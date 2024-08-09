<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DetailProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailProdukController extends Controller
{
    public function detailProduk() {
        $user = User::with('detailProduk')->find(Auth::id());
        return view('new.umkm.detail-produk', compact(
            'user',
        ));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'foto_produk' => 'required',
                'nama_produk' => 'required',
                'deskripsi_produk' => 'required',
                'jenis_produk' => 'required',
            ]);
    
            $array = [
                'user_id' => Auth::id(),
                'foto_produk' => $this->handleFileUpload($request->file('foto_produk'), 'detail-produk/foto-produk/'),
                'nama_produk' => $request['nama_produk'],
                'deskripsi_produk' => $request['deskripsi_produk'],
                'jenis_produk' => $request['jenis_produk'],
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
                'nama_produk' => 'required',
                'deskripsi_produk' => 'required',
                'jenis_produk' => 'required',
            ]);
    
            $array = [
                'nama_produk' => $request['nama_produk'],
                'deskripsi_produk' => $request['deskripsi_produk'],
                'jenis_produk' => $request['jenis_produk'],
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
