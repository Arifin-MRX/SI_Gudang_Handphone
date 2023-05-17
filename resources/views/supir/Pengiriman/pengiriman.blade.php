@extends('supir.master')
@section('content')
    <div class="container">
        <div class="tb-gudang  ">
            <div class="col border rounded p-2 ">
                <h3 class="my-3 text-center ">DATA PENGIRIMAN</h3>
                <p>Cari Data Pengiriman:</p>
                <form class="d-flex" action="/pegawai/cari" method="GET">
                    <input class=" form-control" type="text" name="cari" placeholder="Cari Pengiriman .."
                        value="{{ old('cari') }}">
                    <input type="submit" value="CARI" class="btn btn-outline-primary mx-2">
                </form>
                {{-- <button type="button" class="btn btn-outline-primary my-4 mx-3 "data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="bi bi-person-add"></i> Tambah Pengiriman</a>
                </button> --}}
                <button type="button" class="btn btn-outline-danger my-4 mx-3">
                    <i class="bi bi-filetype-pdf"></i>
                    Export PDF
                </button>
                <div class="table-responsive">
                    <table class="table ">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jenis Truck</th>
                                <th scope="col">Jadwal Pengiriman </th>
                                <th scope="col">Kode pemesanan </th>
                                <th scope="col">Status </th>
                                {{-- <th scope="col">Opsi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>12/12/2023</td>
                                <td> pa.jakartatimur</td>
                                <td>12/12/2023</td>
                                <td>KPN-001</td>
                                <td>
                                    <select name="" id="" >
                                        <option value="">Belum Sampai</option>
                                        <option value="">Sudah Sampai</option>
                                    </select>
                                </td>
                                {{-- <td>
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
                                </td> --}}
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal start-->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pegawai</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('kategori.create') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Masukkan Username</label>
                            <input type="text" name="nama_kategori" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Masukkan Nomor Hp</label>
                            <input type="text" name="nama_kategori" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Email</label>
                            <input type="Email" name="nama_kategori" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Password</label>
                            <input type="password" name="nama_kategori" class="form-control" id="nama">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-primary" value="simpan data">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <!-- Modal end -->
@endsection
