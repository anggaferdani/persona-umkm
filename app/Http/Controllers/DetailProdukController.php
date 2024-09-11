<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\JenisProduk;
use App\Models\DetailProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailProdukController extends Controller
{
    public function detailProduk() {
        $user = User::with('detailProduks')->find(Auth::id());
        $detailProduks = DetailProduk::where('user_id', $user->id)->where('status', 1)->get();
        $jenisProduks = JenisProduk::where('status', 1)->get();
        return view('new.umkm.detail-produk', compact(
            'user',
            'detailProduks',
            'jenisProduks',
        ));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'foto_produk' => 'required|file|mimes:png,jpg,jpeg',
                'nama_produk' => 'required',
                'deskripsi_produk' => 'required',
                'jenis_produk_id' => 'required',
            ]);
    
            $array = [
                'user_id' => Auth::id(),
                'foto_produk' => $this->handleFileUpload($request->file('foto_produk'), 'detail-produk/foto-produk/'),
                'nama_produk' => $request['nama_produk'],
                'deskripsi_produk' => $request['deskripsi_produk'],
                'jenis_produk_id' => $request['jenis_produk_id'],
            ];

            DetailProduk::create($array);
    
            return back()->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function update(Request $request, $id) {
        try {
            $detailProduk = DetailProduk::find($id);
            
            $request->validate([
                'foto_produk' => 'nullable|file|mimes:png,jpg,jpeg',
                'nama_produk' => 'required',
                'deskripsi_produk' => 'required',
                'jenis_produk_id' => 'required',
            ]);
    
            $array = [
                'nama_produk' => $request['nama_produk'],
                'deskripsi_produk' => $request['deskripsi_produk'],
                'jenis_produk_id' => $request['jenis_produk_id'],
            ];

            if ($request->hasFile('foto_produk')) {
                $array['foto_produk'] = $this->handleFileUpload($request->file('foto_produk'), 'detail-produk/foto-produk/');
            }

            $detailProduk->update($array);
    
            return back()->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id) {
        try {
            $detailProduk = DetailProduk::find($id);

            $detailProduk->update([
                'status' => 2,
            ]);

            return back()->with('success', 'Success');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
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
}
