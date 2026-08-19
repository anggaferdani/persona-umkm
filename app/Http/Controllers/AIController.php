<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\Marketer;
use App\Models\Response;
use App\Models\LevelUmkm;
use Illuminate\Http\Request;
use App\Models\TemporaryImage;
use App\Models\StrategiDigital;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Request as RequestModel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Models\BrandPersonalityAakerResult;
use App\Models\BrandPersonalityAaker as BrandPersonalityAakerModel;
use App\Models\DetailProduk;
use App\Models\ImageTemplate;

class AIController extends Controller
{
    public function ai() {
        return view('new.umkm.ai');
    }

    public function generateText() {
        $user = User::with('detailProduks')->find(Auth::id());
        $dayEvents = $this->getDayEvents();
        $today = now()->year;
        $todayEvent = collect($dayEvents)->first(function ($event) use ($today) {
            return is_array($event) && ($event['tanggal'] ?? null) === $today;
        });
        $detailProduks = DetailProduk::where('user_id', $user->id)->where('status', 1)->get();
        return view('new.umkm.ai-generate-text', compact(
            'user',
            'todayEvent',
            'detailProduks',
        ));
    }

    public function generateTextStore(Request $request) {
        try {
            $request->validate([
                'detail_produk_id' => 'required',
                'text_request' => 'required',
            ]);

            $user = Auth::user();
            $detailProduk = DetailProduk::where('user_id', $user->id)->where('id', $request['detail_produk_id'])->first();
            $userModel = User::where('id', $user->id)->first();

            $apiKey = env('OPENAI_API_KEY');

            if (empty($apiKey)) {
                return back()->with('error', 'Tidak ada API Key');
            }

            if ($userModel->credits >= 10) {
                $userModel->decrement('credits', 10);


                $prompt = "Buatkan 3 variasi deskripsi media sosial yang kreatif dan engaging. Setiap deskripsi harus mengandung nama produk ({$detailProduk->nama_produk}) dan deskripsi produk ({$detailProduk->deskripsi_produk}, {$request->text_request}), setiap deksripisi harus mengandung informatif, lucu, dan inspiratif Dengan bahasa indonesia. Hasilkan setiap variasi dalam format list 1. 2. 3. dengan setiap deskripsi pada baris baru.";

                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ])->post('https://api.openai.com/v1/chat/completions', [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        ['role' => 'user', 'content' => $prompt],
                    ],
                    'max_tokens' => 1000,
                    'n' => 1,
                ]);

                $responseData = $response->json();

                // dd($responseData);

                $text = $responseData['choices'][0]['message']['content'] ?? '';
                $generatedDescriptions = array_filter(array_map(function($desc) {
                    return preg_replace('/^\d+[\.\)]\s*/', '', trim($desc));
                }, explode("\n", $text)));

                // dd($generatedDescriptions);
        
                if (count($generatedDescriptions) < 3) {
                    $generatedDescriptions = array_pad($generatedDescriptions, 3, '');
                }

                $array = [
                    'user_id' => $user->id,
                    'detail_produk_id' => $request['detail_produk_id'],
                    'text_request' => $request['text_request'],
                    'type_request' => 1,
                    'tanggal_request' => now(),
                ];

                $requestModel = RequestModel::create($array);

                foreach ($generatedDescriptions as $description) {
                    $responseArray = [
                        'user_id' => $user->id,
                        'request_id' => $requestModel->id,
                        'text_response' => $description,
                        'image_url' => null,
                        'type_response' => 1,
                        'tanggal_response' => now(),
                    ];

                    Response::create($responseArray);
                }

                $responses = Response::where('request_id', $requestModel->id)->get();

                return back()->with([
                    'success' => 'Success',
                    'text_request' => $request['text_request'],
                    'detail_produk_id' => $request['detail_produk_id'],
                    'user' => $user,
                    'responses' => $responses,
                ]);
            } else {
                return back()->with('error', 'Credits tidak cukup');
            }
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function generateTextHistories() {
        $user = User::with('detailProduks')->find(Auth::id());
        $responses = Response::where('user_id', $user->id)->where('type_response', 1)->where('status', 1)->latest()->paginate(9);
        return view('new.umkm.ai-generate-text-history', compact(
            'user',
            'responses',
        ));
    }

    public function postImageGenerate(Request $request) {
        try {
            $request->validate([
                'image' => 'required',
                'judul' => 'required',
                'deskripsi' => 'required',
            ]);
    
            $array = [
                'user_id' => Auth::id(),
                'image' => $this->handleFileUpload($request->file('image'), 'temporary/'),
                'judul' => $request['judul'],
                'deskripsi' => $request['deskripsi'],
            ];

            TemporaryImage::create($array);
    
            return back()->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function generateImage() {
        $user = User::with('detailProduks')->find(Auth::id());
        $dayEvents = $this->getDayEvents();
        $today = now()->year;
        $todayEvent = collect($dayEvents)->first(function ($event) use ($today) {
            return is_array($event) && ($event['tanggal'] ?? null) === $today;
        });
        $imageTemplates = ImageTemplate::where('status', 1)->paginate(12);
        return view('new.umkm.ai-generate-image', compact(
            'user',
            'todayEvent',
            'imageTemplates',
        ));
    }

    public function generateImageTemporary(Request $request) {
        $user = User::with('detailProduks')->find(Auth::id());
        $imageTemplate = ImageTemplate::where('id', $request->id)->first();
        $detailProduks = DetailProduk::where('user_id', $user->id)->where('status', 1)->get();
        return view('new.umkm.ai-generate-image-temporary', compact(
            'user',
            'imageTemplate',
            'detailProduks',
        ));
    }

    public function generateImageTemporaryPost(Request $request) {
        try {
            $request->validate([
                'image_option' => 'required',
                'image' => 'required_if:image_option,manual|mimes:jpeg,png,jpg|dimensions:ratio=1/1',
                'text_request' => 'required_if:image_option,ai',
                'image_template_id' => 'required',
                'judul' => 'required|max:50',
                'deskripsi' => 'required|max:100',
            ]);
    
            $user = Auth::user();
            $requestModel = null;
    
            if ($request->image_option == 'ai') {
                $detailProduk = DetailProduk::where('user_id', $user->id)->where('id', $request['detail_produk_id'])->first();
                $userModel = User::where('id', $user->id)->first();
                
                $apiKey = env('OPENAI_API_KEY');

                if (empty($apiKey)) {
                    return back()->with('error', 'Tidak ada API Key');
                }

                if ($userModel->credits >= 10) {
                    $prompt = "buat gambar dengan reference {$detailProduk->deskripsi_produk} dan {$request->text_request}";

                    if (strlen($prompt) > 1000) {
                        return back()->with('error', 'Panjang prompt melebihi 1000 karakter. Silakan perpendek prompt Anda.');
                    }
        
                    $response = Http::withHeaders([
                        'Authorization' => 'Bearer ' . $apiKey,
                        'Content-Type' => 'application/json',
                    ])->post('https://api.openai.com/v1/images/generations', [
                        'prompt' => $prompt,
                        'n' => 1,
                        'size' => '1024x1024',
                    ]);
        
                    $responseData = $response->json();
                    $imageUrl = $responseData['data'][0]['url'] ?? '';

                    if ($imageUrl) {
                        $imageContent = Http::get($imageUrl)->body();
                        $fileExtension = 'jpg';
                        $fileName = date('YmdHis') . rand(999999999, 9999999999) . '.' . $fileExtension;
                        $imagePath = public_path('temporary/' . $fileName);
                        file_put_contents($imagePath, $imageContent);
                        $savedImageUrl = asset('temporary/' . $fileName);
                    } else {
                        return back()->with('error', 'Failed to generate image.');
                    }
        
                    $array = [
                        'user_id' => $user->id,
                        'detail_produk_id' => $request['detail_produk_id'],
                        'text_request' => $request['text_request'],
                        'type_request' => 2,
                        'tanggal_request' => now(),
                    ];
        
                    $requestModel = RequestModel::create($array);
        
                    $responseArray = [
                        'user_id' => $user->id,
                        'request_id' => $requestModel->id,
                        'image_url' => $savedImageUrl,
                        'type_response' => 2,
                        'tanggal_response' => now(),
                    ];
        
                    $response = Response::create($responseArray);
        
                    $arrayTemporaryImage = [
                        'user_id' => Auth::id(),
                        'image_template_id' => $request['image_template_id'],
                        'response_id' => $response->id,
                        'image' => $savedImageUrl,
                        'judul' => $request['judul'],
                        'deskripsi' => $request['deskripsi'],
                        'type' => 2,
                    ];
        
                    $temporary = TemporaryImage::create($arrayTemporaryImage);

                    $userModel->decrement('credits', 10);
                } else {
                    return back()->with('error', 'Credits tidak cukup');
                }
            } else {
                if ($request->hasFile('image')) {
                    $array = [
                        'user_id' => Auth::id(),
                        'image_template_id' => $request['image_template_id'],
                        'image' => $this->handleFileUpload($request->file('image'), 'temporary/'),
                        'judul' => $request['judul'],
                        'deskripsi' => $request['deskripsi'],
                        'type' => 1,
                    ];
    
                    $temporary = TemporaryImage::create($array);
                } else {
                    return back()->with('error', 'Gagal Upload Image.');
                }
            }
    
            return redirect()->route('umkm.ai.generate-image.response', $temporary->id)->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function generateImageResponse($id) {
        $temporaryImage = TemporaryImage::find($id);
        $imageTemplate = ImageTemplate::find($temporaryImage->image_template_id);

        $template = $imageTemplate->text;
        $finalHtml = str_replace(
            ['{{ $temporaryImage->judul }}', '{{ $temporaryImage->deskripsi }}'],
            [$temporaryImage->judul, $temporaryImage->deskripsi],
            $template
        );
        return view('new.umkm.ai-generate-image-response', compact(
            'temporaryImage',
            'imageTemplate',
            'finalHtml',
        ));
    }

    public function generateImageHistories() {
        $user = User::with('detailProduks')->find(Auth::id());
        $temporaryImages = TemporaryImage::where('user_id', $user->id)->where('status', 1)->latest()->paginate(5);
    
        foreach ($temporaryImages as $temporaryImage) {
            $imageTemplate = ImageTemplate::find($temporaryImage->image_template_id);
            $template = $imageTemplate->text;
            $temporaryImage->finalHtml = str_replace(
                ['{{ $temporaryImage->judul }}', '{{ $temporaryImage->deskripsi }}'],
                [$temporaryImage->judul, $temporaryImage->deskripsi],
                $template
            );
        }
    
        return view('new.umkm.ai-generate-image-history', compact(
            'user',
            'temporaryImages'
        ));
    }

    public function generateImageStore(Request $request) {}

    public function generateTag() {
        $user = User::with('detailProduks')->find(Auth::id());
        $dayEvents = $this->getDayEvents();
        $today = now()->year;
        $todayEvent = collect($dayEvents)->first(function ($event) use ($today) {
            return is_array($event) && ($event['tanggal'] ?? null) === $today;
        });
        $detailProduks = DetailProduk::where('user_id', $user->id)->where('status', 1)->get();
        return view('new.umkm.ai-generate-tag', compact(
            'user',
            'todayEvent',
            'detailProduks',
        ));
    }

    public function generateTagStore(Request $request) {
        try {
            $request->validate([
                'detail_produk_id' => 'required',
                'text_request' => 'required',
            ]);

            $user = Auth::user();
            $detailProduk = DetailProduk::where('user_id', $user->id)->where('id', $request['detail_produk_id'])->first();

            $userModel = User::where('id', $user->id)->first();

            $apiKey = env('OPENAI_API_KEY');

            if (empty($apiKey)) {
                return back()->with('error', 'Tidak ada API Key');
            }

            if ($userModel->credits >= 10) {
                $userModel->decrement('credits', 10);

                $prompt = "{$request->text_request} buat 9 hashtag media sosial yang relevan dan trending sesuai dengan produk ({$detailProduk->nama_produk}), deskripsi produk{$detailProduk->deskripsi_produk}. Gunakan bahasa Indonesia yang santai, menarik perhatian, serta dapat memancing interaksi audiens. Hasilkan setiap variasi dalam format list 1. 2. 3. dengan setiap hashtag pada baris baru, 9 baris hastag saja";

                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ])->post('https://api.openai.com/v1/chat/completions', [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        ['role' => 'user', 'content' => $prompt],
                    ],
                    'max_tokens' => 1000,
                    'n' => 1,
                ]);

                $responseData = $response->json();

                // dd($responseData);

                $text = $responseData['choices'][0]['message']['content'] ?? '';
                $generatedDescriptions = array_filter(array_map(function($desc) {
                    return preg_replace('/^\d+[\.\)]\s*/', '', trim($desc));
                }, explode("\n", $text)));

                // dd($generatedDescriptions);
        
                if (count($generatedDescriptions) < 9) {
                    $generatedDescriptions = array_pad($generatedDescriptions, 9, '');
                }

                $array = [
                    'user_id' => $user->id,
                    'detail_produk_id' => $request['detail_produk_id'],
                    'text_request' => $request['text_request'],
                    'type_request' => 3,
                    'tanggal_request' => now(),
                ];

                $requestModel = RequestModel::create($array);

                foreach ($generatedDescriptions as $description) {
                    $responseArray = [
                        'user_id' => $user->id,
                        'request_id' => $requestModel->id,
                        'text_response' => $description,
                        'image_url' => null,
                        'type_response' => 3,
                        'tanggal_response' => now(),
                    ];

                    Response::create($responseArray);
                }

                $responses = Response::where('request_id', $requestModel->id)->get();

                return back()->with([
                    'success' => 'Success',
                    'text_request' => $request['text_request'],
                    'detail_produk_id' => $request['detail_produk_id'],
                    'user' => $user,
                    'responses' => $responses,
                ]);
            } else {
                return back()->with('error', 'Credits tidak cukup');
            }
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function generateTagHistories() {
        $user = User::with('detailProduks')->find(Auth::id());
        $responses = Response::where('user_id', $user->id)->where('type_response', 3)->where('status', 1)->latest()->paginate(18);
        return view('new.umkm.ai-generate-tag-history', compact(
            'user',
            'responses',
        ));
    }

    private function handleFileUpload($file, $path)
    {
        if ($file) {
            $fileName = date('YmdHis') . rand(999999999, 9999999999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $fileName);
            return $fileName;
        }
        return null;
    }

    public function getDayEvents() {
        $now = now()->year;
        $response = Http::get("https://dayoffapi.vercel.app/api?year={$now}");
    
        if ($response->successful() && is_array($response->json())) {
            return $response->json();
        }

        return [];
    }
}
