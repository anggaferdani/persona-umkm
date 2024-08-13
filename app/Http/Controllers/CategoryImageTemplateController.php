<?php

namespace App\Http\Controllers;

use App\Models\CategoryImageTemplate;
use Illuminate\Http\Request;

class CategoryImageTemplateController extends Controller
{
    public function index(Request $request) {
        $query = CategoryImageTemplate::where('status', 1);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('category', 'like', '%' . $search . '%');
            });
        }

        $categoryImageTemplates = $query->paginate(10);

        return view('new.admin.category-image-template.index', compact(
            'categoryImageTemplates',
        ));
    }

    public function create() {}

    public function store(Request $request) {
        try {
            $request->validate([
                'category' => 'required',
            ]);
    
            $array = [
                'category' => $request['category'],
            ];

            CategoryImageTemplate::create($array);
    
            return redirect()->route('admin.category-image-template.index')->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function show($id) {}

    public function edit($id) {}

    public function update(Request $request, $id) {
        try {
            $categoryImageTemplates = CategoryImageTemplate::find($id);
    
            $request->validate([
                'category' => 'required',
            ]);
    
            $array = [
                'category' => $request['category'],
            ];

            $categoryImageTemplates->update($array);
    
            return redirect()->route('admin.category-image-template.index')->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id) {
        try {
            $categoryImageTemplate = CategoryImageTemplate::find($id);

            $categoryImageTemplate->update([
                'status' => 0,
            ]);

            return redirect()->route('admin.category-image-template.index')->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
