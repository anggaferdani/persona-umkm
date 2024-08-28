<?php

namespace App\Http\Controllers;

use App\Models\CategoryImageTemplate;
use App\Models\ImageTemplate;
use Illuminate\Http\Request;

class ImageTemplateController extends Controller
{
    public function index(Request $request) {
        $imageTemplates = ImageTemplate::where('status', 1)->paginate(10);
        $categoryImageTemplates = CategoryImageTemplate::where('status', 1)->get();

        return view('new.admin.image-template.index', compact(
            'imageTemplates',
            'categoryImageTemplates',
        ));
    }

    public function create() {}

    public function store(Request $request) {
        try {
            $request->validate([
                'category_image_template_id' => 'required',
                'contoh' => 'required|dimensions:ratio=1/1',
                'template' => 'required|dimensions:ratio=1/1',
                'text' => 'required',
            ]);
    
            $array = [
                'category_image_template_id' => $request['category_image_template_id'],
                'text' => $request['text'],
                'contoh' => $this->handleFileUpload($request->file('contoh'), 'image-template/contoh/'),
                'template' => $this->handleFileUpload($request->file('template'), 'image-template/template/'),
            ];

            ImageTemplate::create($array);
    
            return redirect()->route('admin.image-template.index')->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function show($id) {}

    public function edit($id) {}

    public function update(Request $request, $id) {
        try {
            $imageTemplate = ImageTemplate::find($id);
    
            $request->validate([
                'category_image_template_id' => 'required',
                'contoh' => 'dimensions:ratio=1/1',
                'template' => 'dimensions:ratio=1/1',
                'text' => 'required',
            ]);
    
            $array = [
                'category_image_template_id' => $request['category_image_template_id'],
                'text' => $request['text'],
            ];

            if ($request->hasFile('contoh')) {
                $array['contoh'] = $this->handleFileUpload($request->file('contoh'), 'image-template/contoh/');
            }
            if ($request->hasFile('template')) {
                $array['template'] = $this->handleFileUpload($request->file('template'), 'image-template/template/');
            }
    
            $imageTemplate->update($array);
    
            return redirect()->route('admin.image-template.index')->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id) {
        try {
            $imageTemplate = ImageTemplate::find($id);

            $imageTemplate->update([
                'status' => 0,
            ]);

            return redirect()->route('admin.image-template.index')->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    private function handleFileUpload($file, $path)
    {
        if ($file) {
            $fileName = date('YmdHis') . rand(999999999, 9999999999) . $file->getClientOriginalName();
            $file->move(public_path($path), $fileName);
            return $fileName;
        }
        return null;
    }
}
