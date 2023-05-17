@extends('admin.master')
@section('content')
    <div class="container">
        <div class="tb_pemesanan mb-4 ">
            <h3 class="my-3 text-center ">PEMESANAN</h3>
            <p>Cari Data Barang:</p>
            <form class="d-flex" action="#" method="GET">
                <input class=" form-control" type="text" name="cari" placeholder="Cari Barang..."
                    value="{{ old('cari') }}">
                {{-- <input type="submit" value="CARI" class="btn btn-primary"> --}}
            </form>
            <div class="col border rounded p-2 mt-5">
                <h3 class="my-3 text-center ">DATA PEMESANAN</h3>
                <form action="" class="mb-4 ml-3">
                    <Label class="ml-4">
                        Kode Pemesanan :
                    </Label>
                    {{-- <input type="text" name="cari" placeholder="Cari Pemesanan...
                    " class="form"> --}}
                    <Label class="border px-3 py-2 border-primary border-opacity-25 rounded text-body-tertiary">
                        PSN-001
                    </Label>
                    <div class="mt-3">
                        <Label>
                            ID Outlet <span style="margin-left: 60px">:</span>
                        </Label>
                        <input type="text" class="border px-1 py-1 border-primary border-opacity-25 rounded ">
                    </div>
                </form>
                <div class="p-4">
                    <table class="table">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Jumlah Barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>OPPO</td>
                                <td>Pcs</td>
                                <td>
                                    <input type="text" class="border px-1 py-1 border-primary border-opacity-25 rounded" value="0">
                                </td>
                                <td>
                                    1000000
                                </td>
                                <td>
                                    <button  type="button" class="btn btn-danger">
                                        <i class="fa-solid fa-trash "></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>OPPO</td>
                                <td>Pcs</td>
                                <td>
                                    <input type="text" class="border px-1 py-1 border-primary border-opacity-25 rounded" value="0">
                                </td>
                                <td>
                                    1000000
                                </td>
                                <td>
                                    <button  type="button" class="btn btn-danger">
                                        <i class="fa-solid fa-trash "></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>OPPO</td>
                                <td>Pcs</td>
                                <td>
                                    <input type="text" class="border px-1 py-1 border-primary border-opacity-25 rounded" value="0">
                                </td>
                                <td>
                                    1000000
                                </td>
                                <td>
                                    <button  type="button" class="btn btn-danger">
                                        <i class="fa-solid fa-trash "></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-info my-4 mx-3 ">
                            <a class="text-decoration-none text-light" href="#">Prose Pesanan</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
