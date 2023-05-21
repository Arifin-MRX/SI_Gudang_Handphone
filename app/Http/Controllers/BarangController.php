<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\gudang;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Termwind\Components\Dd;

class BarangController extends Controller
{
    //Menampilkan data Barang 
    function index()
    {
        // $barangs = DB::table('barangs')->paginate(10);
        $barangs = barang::paginate(10);
        $kategoris = kategori::all();
        $gudangs = gudang::all();
        // array data
        $data = [
            'barangs' => $barangs,
            'kategoris' => $kategoris,
            'gudangs' => $gudangs
        ];
        // dd($data);
        return view(
            'admin.barang.Databarang',
            $data
        );
    }
    // Menambahkan data Barang
    function create(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'stok_awal' => 'required|numeric',
            'harga' => 'required|numeric'
        ]);

        // Cek validasi
        if ($validator->fails()) {
            return redirect('/admin/Databarang')->withErrors($validator)->withInput();
        }

        $barangs = new barang(
            [
                'nama_barang' => request('nama_barang'),
                'harga' => request('harga'),
                'satuan' => request('satuan'),
                'kategori_id' => request('kategori_id'),
                'gudang_id' => request('gudang_id'),
                'stok_awal' => request('stok_awal'),
                'stok_akhir' => request('stok_awal'),
                'stok_masuk' => request('stok_masuk'),
                'stok_keluar' => request('stok_keluar')
            ]
        );
        $barangs->save();
        return redirect('/admin/Databarang')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    // Mencaari data Barang
    function search(Request $request)
    {
        $search = $request->search;
        $barangs = barang::where('nama_barang', 'like', '%' . $search . '%')->paginate(10);
        $kategoris = kategori::all();
        $gudangs = gudang::all();
        $data = [
            'barangs' => $barangs,
            'kategoris' => $kategoris,
            'gudangs' => $gudangs
        ];
        return view('admin.barang.Databarang', $data);
    }
    // Menghapus data Barang
    function delete($id)
    {
        $barangs = barang::find($id);
        $barangs->delete();
        return redirect('/admin/Databarang')->with('pesan', 'Data Berhasil Dihapus');
    }
    // Mengedit data Barang
    function edit($id)
    {
        $barangs = barang::find($id);
        $kategoris = kategori::all();
        $gudangs = gudang::all();
        $data = [
            'barangs' => $barangs,
            'kategoris' => $kategoris,
            'gudangs' => $gudangs
        ];
        return view('admin.barang.Databarang', $data);
    }
    // Mengupdate data Barang
    function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'stok_awal' => 'required|numeric',
            'harga' => 'required|numeric'
        ]);

        // Cek validasi
        if ($validator->fails()) {
            return redirect('/admin/Databarang')->withErrors($validator)->withInput();
        }

        barang::find($request->id)->update([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'satuan' => $request->satuan,
            'kategori_id' => $request->kategori_id,
            'gudang_id' => $request->gudang_id
        ]);
        return redirect("/admin/Databarang")->with('success', 'Data Berhasil Diubah');
    }
}
