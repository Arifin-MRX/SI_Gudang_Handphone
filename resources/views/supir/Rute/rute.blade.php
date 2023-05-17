@extends('supir.master')
@section('content')
    <div class="container">
        <div class="tb-gudang  ">
            <div class="col border rounded p-2 ">
                <h3 class="my-3 text-center ">DATA RUTE</h3>
                <p>Cari Kode Pengiriman:</p>
                <form class="d-flex" action="/supir/cari" method="GET">
                    <input class=" form-control" type="text" name="cari" placeholder="Cari Kode Pengiriman .."
                        value="{{ old('cari') }}">
                    <input type="submit" value="CARI" class="btn btn-outline-primary mx-2">
                </form>
                <button type="button" class="btn btn-outline-danger my-4 mx-3">
                    <i class="bi bi-filetype-pdf"></i>
                    Export PDF
                </button>
                <div class="table-responsive">
                    <table class="table ">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode Pengiriman</th>
                                <th scope="col">Status Pengiriman</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>KPN-001</td>
                                <td> Dalam Perjalanan menuju tujuan</td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-warning">
                                        <a class="text-decoration-none text-black" href="#">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </button>
                                    <button type="button" class="btn btn-outline-danger">
                                        <a class="text-decoration-none text-black" href="#">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
