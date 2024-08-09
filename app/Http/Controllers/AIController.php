<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\Marketer;
use App\Models\Response;
use App\Models\LevelUmkm;
use Illuminate\Http\Request;
use App\Models\StrategiDigital;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Request as RequestModel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Models\BrandPersonalityAakerResult;
use App\Models\BrandPersonalityAaker as BrandPersonalityAakerModel;

class AIController extends Controller
{
    public function ai() {
        return view('new.umkm.ai');
    }

    public function generateText() {
        $user = User::with('detailProduk')->find(Auth::id());
        $dayEvents = $this->getDayEvents();
        $today = now()->year;
        $todayEvent = collect($dayEvents)->first(function ($event) use ($today) {
            return $event['tanggal'] === $today;
        });
        return view('new.umkm.ai-generate-text', compact(
            'user',
            'todayEvent',
        ));
    }

    public function generateTextStore(Request $request) {
        try {
            $request->validate([
                'detail_produk_id' => 'required',
                'text_request' => 'required',
            ]);

            $user = Auth::user();
            $detailProduk = $user->detailProduk;

            $userModel = User::where('id', $user->id)->first();
            if ($userModel->credits >= 10) {
                $userModel->decrement('credits', 10);
            } else {
                return back()->with('error', 'Credits tidak cukup');
            }

            $apiKey = env('OPENAI_API_KEY');

            $prompt = "Buatkan 3 variasi deskripsi media sosial yang sesuai dan sedang trending dengan nama produk = {$detailProduk->nama_produk}, deskripsi yang menjelaskan produk = {$detailProduk->deskripsi_produk}, dan prompt = {$request->text_request}. Berikan hasil dalam format list dengan setiap deskripsi pada baris baru. Dengan bahasa indonesia.";

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
            $generatedDescriptions = array_filter(array_map('trim', explode("\n", $text)));

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
                'user' => $user,
                'responses' => $responses,
            ]);
            return ;
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function generateTextHistories() {
        $user = User::with('detailProduk')->find(Auth::id());
        $responses = Response::where('user_id', $user->id)->where('type_response', 1)->where('status', 1)->latest()->paginate(9);
        return view('new.umkm.ai-generate-text-history', compact(
            'user',
            'responses',
        ));
    }

    public function generateImage() {
        $user = User::with('detailProduk')->find(Auth::id());
        $dayEvents = $this->getDayEvents();
        $today = now()->year;
        $todayEvent = collect($dayEvents)->first(function ($event) use ($today) {
            return $event['tanggal'] === $today;
        });
        return view('new.umkm.ai-generate-image', compact(
            'user',
            'todayEvent',
        ));
    }

    public function generateImageStore(Request $request) {
        
    }

    public function generateTag() {
        $user = User::with('detailProduk')->find(Auth::id());
        $dayEvents = $this->getDayEvents();
        $today = now()->year;
        $todayEvent = collect($dayEvents)->first(function ($event) use ($today) {
            return $event['tanggal'] === $today;
        });
        return view('new.umkm.ai-generate-tag', compact(
            'user',
            'todayEvent',
        ));
    }

    public function generateTagStore(Request $request) {
        try {
            $request->validate([
                'detail_produk_id' => 'required',
                'text_request' => 'required',
            ]);

            $user = Auth::user();
            $detailProduk = $user->detailProduk;

            $userModel = User::where('id', $user->id)->first();
            if ($userModel->credits >= 10) {
                $userModel->decrement('credits', 10);
            } else {
                return back()->with('error', 'Credits tidak cukup');
            }

            $apiKey = env('OPENAI_API_KEY');

            $prompt = "Buatkan 9 variasi hastag # media sosial yang sesuai dan sedang trending dengan nama produk = {$detailProduk->nama_produk}, {$detailProduk->deskripsi_produk}, dan prompt = {$request->text_request}. Berikan hasil dalam format list dengan setiap hastag pada baris baru. Dengan bahasa indonesia.";

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
            $generatedDescriptions = array_filter(array_map('trim', explode("\n", $text)));

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
                'user' => $user,
                'responses' => $responses,
            ]);
            return ;
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function generateTagHistories() {
        $user = User::with('detailProduk')->find(Auth::id());
        $responses = Response::where('user_id', $user->id)->where('type_response', 3)->where('status', 1)->latest()->paginate(9);
        return view('new.umkm.ai-generate-tag-history', compact(
            'user',
            'responses',
        ));
    }

    public function getDayEvents() {
        $now = now()->year;
        $response = Http::get("https://dayoffapi.vercel.app/api?year={$now}");
    
        if ($response->successful()) {
            $data = $response->json();
            return $data;
        } else {
            return ['error' => 'Error'];
        }
    }
}
