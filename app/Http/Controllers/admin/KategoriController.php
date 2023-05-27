<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    // menampilkan data kategori
    function index()
    {
        $kategoris = kategori::paginate(10);
        return view('admin.barang.kategori', ['kategoris' => $kategoris]);
    }
    // menambah kategori
    function create(Request $request)
    {
        // membuat pesan validasi
        $messages = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute minimal :min karakter',
        ];
        // validasi data
        $this->validate($request, [
            'nama_kategori' => 'required|min:5',
        ], $messages);
        Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);
        return redirect('/admin/kategori')->with('success', 'Data Berhasil Ditambahkan');
    }
    /// Edit data kategori
    function edit($id)
    {
        $kategoris = DB::table('kategoris')->where('id', $id)->get();
        return view('admin.barang.kategori', ['kategoris' => $kategoris]);
    }

    // update data kategori
    function update(Request $request)
    {
        // membuat pesan validasi
        $messages = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute minimal :min karakter',
        ];
        // validasi data
        $this->validate($request, [
            'nama_kategori' => 'required|min:5',
        ], $messages);
        Kategori::find($request->id)->update([
            'nama_kategori' => $request->nama_kategori
        ]);
        return redirect("/admin/kategori")->with('edit', 'Data Berhasil Diubah');
    }
    // hapus data kategori
    function delete($id)
    {
        Kategori::find($id)->delete();
        return redirect("/admin/kategori")->with('delete', 'Data Berhasil Dihapus');
    }
    // search data kategori
    function search(Request $request)
    {
        $search = $request->search;
        $kategoris = DB::table('kategoris')->where('nama_kategori', 'like', '%' . $search . '%')->paginate(10);
        return view('admin.barang.kategori', ['kategoris' => $kategoris]);
    }
}
