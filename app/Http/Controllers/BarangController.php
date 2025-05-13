<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('pages.barang.index', compact('barang'));
    }
    public function create(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'kategori' => 'required|in:Kancing,Kain,Benang,Resleting,Jarum,Gunting,Minyak Mesin,Penggaris,Karet,Tali,Label,Aksesoris,Lainnya',
            'harga' => 'required|integer|min:0',
            'jumlah' => 'required|integer|min:0',
        ]);

        $barang = new Barang();
        $barang->user_id = Auth::id();  
        $barang->name = $validated['name'];
        $barang->deskripsi = $validated['deskripsi'];
        $barang->kategori = $validated['kategori'];
        $barang->harga = $validated['harga'];
        $barang->jumlah = $validated['jumlah'];
        $barang->save();

        // Mengembalikan response
        return redirect()->back()->with('success', 'Barang berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'kategori' => 'required|in:Kancing,Kain,Benang,Resleting,Jarum,Gunting,Minyak Mesin,Penggaris,Karet,Tali,Label,Aksesoris,Lainnya',
            'jumlah' => 'required|integer',
            'harga' => 'required|integer',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Barang berhasil diperbarui.');
    }
    public function delete($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->back()->with('success', 'Barang berhasil dihapus!');
    }

}
