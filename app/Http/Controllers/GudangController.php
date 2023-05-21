<?php

namespace App\Http\Controllers;

use App\Models\gudang;
// use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Barryvdh\DomPDF\Facade\Pdf;


class GudangController extends Controller
{

    function index()
    {
        $gudangs = DB::table('gudangs')->paginate(10);
        return view('admin.gudang.gudang', ['gudangs' => $gudangs]);
    }
    // menambah data gudang
    function create(Request $request)
    {
        DB::table('gudangs')->insert([
            'nama_gudang' => request('nama_gudang'),
            'alamat' => request('alamat')
        ]);
        return redirect('/admin/gudang')->with('pesan', 'Data Berhasil Ditambahkan');
    }
    // edit data gudang
    function edit($id)
    {
        $gudangs = DB::table('gudangs')->where('id', $id)->get();
        return view('admin.gudang.gudang', ['gudangs' => $gudangs]);
    }
    // update data gudang
    function update(Request $request)
    {
        gudang::find($request->id)->update([
            'nama_gudang' => $request->nama_gudang,
            'alamat' => $request->alamat,
            // 'created_at' => now()
            // 'updated_at' => now()
        ]);
        return redirect("/admin/gudang")->with('success', 'Data Berhasil Diubah');
    }
    // hapus data gudang
    function delete($id)
    {
        gudang::find($id)->delete();
        return redirect("/admin/gudang")->with('success', 'Data Berhasil Dihapus');
    }
    // search data gudang
    function search(Request $request)
    {
        $search = $request->search;
        $gudangs = DB::table('gudangs')->where('nama_gudang', 'like', '%' . $search . '%')->paginate(10);
        return view('admin.gudang.gudang', ['gudangs' => $gudangs]);
    }
}
