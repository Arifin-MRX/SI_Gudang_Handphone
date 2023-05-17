@extends('admin.master')
@section('content')
    <div class="container">
        <div class="tb-gudang  ">
            <div class="col border rounded p-2 ">
                <h3 class="my-3 text-center ">DATA GUDANG</h3>
                <p>Cari Data Gudang:</p>
                <form class="d-flex" action="/admin/gudang" method="GET">
                    <input class=" form-control" type="text" name="search" placeholder="Cari Gudang .."
                        value="{{ old('search') }}">
                    <input type="submit" value="search" class="btn btn-outline-primary mx-2">
                </form>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-add" viewBox="0 0 16 16">
                        <path
                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z">
                        </path>
                        <path
                            d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z">
                        </path>
                    </svg>
                    Tambah Data
                </button>
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
                                <th scope="col">Nama Gudang</th>
                                <th scope="col">Alamat</th>
                                <th scope="col" style="width: 300px;">Opsi</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($gudangs as $g)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $g->nama_gudang }}</td>
                                    <td>{{ $g->alamat }}</td>
                                    <td>
                                        {{-- button edit --}}
                                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalEdit{{ $g->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        {{-- btn hapus --}}
                                        <button type="button" class="btn btn-outline-danger">
                                            <a class="text-decoration-none text-body"
                                                href="{{ route('gudang.delete', ['id' => $g->id]) }}">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $gudangs->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
    {{-- Kumpulan modal --}}
    <!-- Modal tambah gudang start-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Gudang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('gudang.create') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="nama" class="form-label">Masukkan Nama Gudang</label>
                            <input type="text" class="form-control" id="nama" name="nama_gudang">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Masukkan Alamat Gudang</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal tambah gudang  end -->

    <!-- Modal Edit gudang  start -->
    @foreach ($gudangs as $g)
        <div class="modal fade" id="exampleModalEdit{{ $g->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Gudang</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('gudang.update') }}" method="POST">
                            {{-- mengubah method --}}
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="id" value="{{ $g->id }}">
                            <div class="mb-3">
                                <label for="nama" class="form-label"> Nama Gudang</label>
                                <input type="text" class="form-control" id="nama" name="nama_gudang"
                                    value="{{ $g->nama_gudang }}">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label"> Alamat Gudang</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="{{ $g->alamat }}">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
    <!-- Modal Edit gudang  end -->
@endsection
