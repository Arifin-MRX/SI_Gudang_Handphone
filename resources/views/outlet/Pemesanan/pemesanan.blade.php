@extends('outlet.master')
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
                                    <input type="text" class="border px-1 py-1 border-primary border-opacity-25 rounded"
                                        value="0">
                                </td>
                                <td>
                                    1000000
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>OPPO</td>
                                <td>Pcs</td>
                                <td>
                                    <input type="text" class="border px-1 py-1 border-primary border-opacity-25 rounded"
                                        value="0">
                                </td>
                                <td>
                                    1000000
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>OPPO</td>
                                <td>Pcs</td>
                                <td>
                                    <input type="text" class="border px-1 py-1 border-primary border-opacity-25 rounded"
                                        value="0">
                                </td>
                                <td>
                                    1000000
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <form action="#" class="d-flex m-2 mt-4 justify-content-end">
                            {{-- total pesanan --}}
                            <ul style="list-style-type: none;">
                                <li>
                                    <label for="total" class="form-label">Total Pesanan</label>
                                    <input type="text" class="form-control" id="total" placeholder="Total Pesanan"
                                        value="0" readonly>
                                </li>
                                {{-- total bayar --}}
                                <li>
                                    <label for="total" class="form-label">Total Bayar</label>
                                    <input type="text" class="form-control" id="total" placeholder="Total Bayar"
                                        value="0" readonly>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-outline-primary mx-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Proses Pesanan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
