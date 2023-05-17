@extends('admin.master')
@section('content')
    <div class="container">
        <div class="tb-gudang  ">
            <div class="col border rounded p-2 ">
                <h3 class="my-3 text-center ">DATA OUTLET</h3>
                <p>Cari Data Outlet:</p>
                <form class="d-flex" action="/pegawai/cari" method="GET">
                    <input class=" form-control" type="text" name="cari" placeholder="Cari Outlet .."
                        value="{{ old('cari') }}">
                    <input type="submit" value="CARI" class="btn btn-outline-primary mx-2">
                </form>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                    <i class="bi bi-person-add"></i>
                    Tambah Data
                </button>
                {{-- <button type="button" class="btn btn-success my-4 mx-3">
                    <a class="text-decoration-none text-light" href="#"><i class="fa-solid fa-print"></i> Export
                        Excel</a>
                </button> --}}
                <button type="button" class="btn btn-outline-danger my-4 mx-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z">
                        </path>
                    </svg>
                    Export PDF
                </button>
                <div class="table-responsive rounded">
                    <table class="table ">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Outlet</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Email</th>
                                {{-- <th scope="col">Username</th> --}}
                                {{-- <th scope="col">Nama Pengguna</th>
                                <th scope="col">Alamat Pengguna</th>
                                <th scope="col">Telepon Pengguna</th> --}}
                                <th scope="col" style="padding-right: 110px;">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Elektronik</td>
                                <td>Jalan Raya PKP No. 24 Kelapa Dua Wetan, Ciracas, jakarta TImur</td>
                                <td>(021) 87717548</td>
                                <td> pa.jakartatimur@gmail.com</td>
                                {{-- <td>Arifin</td> --}}
                                {{-- <td>Moh Harifin</td>
                                <td>sumenep</td>
                                <td>089231445667</td> --}}
                                <td>
                                    {{-- button edit --}}
                                    <button type="button" class="btn btn-outline-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    {{-- btn hapus --}}
                                    <button type="button" class="btn btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                    {{-- btn info --}}
                                    <button type="button" class="btn btn-outline-primary">
                                        <i class="bi bi-info-lg"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal tambah oulet start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Outlet</h1>
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
    </div>
    <!-- Modal tambah outlet end -->
@endsection
