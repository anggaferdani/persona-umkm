<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use Illuminate\Http\Request;

class JenisProdukController extends Controller
{
    public function index(Request $request) {
        $query = JenisProduk::where('status', 1);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('jenis_produk', 'like', '%' . $search . '%');
            });
        }

        $jenisProduks = $query->paginate(10);

        return view('new.admin.jenis-produk.index', compact(
            'jenisProduks',
        ));
    }

    public function create() {}

    public function store(Request $request) {
        try {
            $request->validate([
                'jenis_produk' => 'required',
            ]);
    
            $array = [
                'jenis_produk' => $request['jenis_produk'],
            ];

            JenisProduk::create($array);
    
            return redirect()->route('admin.jenis-produk.index')->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function show($id) {}

    public function edit($id) {}

    public function update(Request $request, $id) {
        try {
            $jenisProduk = JenisProduk::find($id);
    
            $request->validate([
                'jenis_produk' => 'required',
            ]);
    
            $array = [
                'jenis_produk' => $request['jenis_produk'],
            ];

            $jenisProduk->update($array);
    
            return redirect()->route('admin.jenis-produk.index')->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id) {
        try {
            $jenisProduk = JenisProduk::find($id);

            $jenisProduk->update([
                'status' => 2,
            ]);

            return redirect()->route('admin.jenis-produk.index')->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
