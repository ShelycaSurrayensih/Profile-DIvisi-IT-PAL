@extends('admin.layouts.master')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Tambah Department</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                    data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" id="addRowModal" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                    Tambah</span>
                                                <span class="fw-light">
                                                    Data
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="small">Tambahkan data baru</p>
                                            <form action="{{ route('department.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Nama Department</label>
                                                            <input id="nama" type="text" name="nama"
                                                                class="form-control" placeholder="Masukkan Nama Department">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label for="kedudukan" class="col-form-label">Kedudukan</label>
                                                            <textarea id="kedudukan" type="text" name="kedudukan" class="form-control" placeholder="Masukkan Kedudukan"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Organisasi</label>
                                                            <input id="organisasi1" type="text" name="organisasi1"
                                                                class="form-control"
                                                                placeholder="Masukkan Organisasi Pertama">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Organisasi</label>
                                                            <input id="organisasi2" type="text" name="organisasi2"
                                                                class="form-control"
                                                                placeholder="Masukkan Organisasi Kedua">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label for="tugas1" class="col-form-label">Tugas</label>
                                                            <textarea id="tugas1" type="text" name="tugas1" class="form-control" placeholder="Masukkan Tugas Pertama"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label for="tugas2" class="col-form-label">Tugas</label>
                                                            <textarea id="tugas2" type="text" name="tugas2" class="form-control" placeholder="Masukkan Tugas Kedua"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label for="fungsi1" class="col-form-label">Fungsi</label>
                                                            <textarea id="fungsi1" type="text" name="fungsi1" class="form-control" placeholder="Masukkan Fungsi Pertama"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label for="fungsi2" class="col-form-label">Fungsi</label>
                                                            <textarea id="fungsi2" type="text" name="fungsi2" class="form-control" placeholder="Masukkan Fungsi Kedua"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label for="fungsi3" class="col-form-label">Fungsi</label>
                                                            <textarea id="fungsi3" type="text" name="fungsi3" class="form-control" placeholder="Masukkan Fungsi Ketiga"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label for="fungsi4" class="col-form-label">Fungsi</label>
                                                            <textarea id="fungsi4" type="text" name="fungsi4" class="form-control" placeholder="Masukkan Fungsi Keempat"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label for="fungsi5" class="col-form-label">Fungsi</label>
                                                            <textarea id="fungsi5" type="text" name="fungsi5" class="form-control" placeholder="Masukkan Fungsi Kelima"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label for="fungsi6" class="col-form-label">Fungsi</label>
                                                            <textarea id="fungsi6" type="text" name="fungsi6" class="form-control" placeholder="Masukkan Fungsi Keenam"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer no-bd">
                                                    <button type="submit" id="addRowButton"
                                                        class="btn btn-primary">Tambahkan</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th style="width: 1%">No</th>
                                            <th>Nama Department</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($adepartments as $d)
                                            <tr>
                                                <div class="modal fade" id="editModal{{ $d->id }}" tabindex="-1"
                                                    role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div lass="modal-header no-bd">
                                                                <h5 class="modal-title">
                                                                    <span class="fw-mediumbold">
                                                                        Edit Data
                                                                    </span>
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p class="small">Edit Data ID {{ $loop->iteration }}</p>
                                                                <form action="{{ route('department.update', $d->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Nama Department</label>
                                                                                <input id="nama" type="text"
                                                                                    name="nama"
                                                                                    value="{{ $d->nama }}"
                                                                                    class="form-control"
                                                                                    placeholder="Masukkan Nama Department">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Kedudukan</label>
                                                                                <textarea id="kedudukan" type="text" name="kedudukan" class="form-control"
                                                                                    placeholder="Masukkan Kedudukan">{{ $d->kedudukan }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Organisasi</label>
                                                                                <input id="organisasi1" type="text"
                                                                                    name="organisasi1"
                                                                                    value="{{ $d->organisasi1 }}"
                                                                                    class="form-control"
                                                                                    placeholder="Masukkan Organisasi Pertama">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Organisasi</label>
                                                                                <input id="organisasi2" type="text"
                                                                                    name="organisasi2"
                                                                                    value="{{ $d->organisasi2 }}"
                                                                                    class="form-control"
                                                                                    placeholder="Masukkan Organisasi Kedua">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label for="tugas1"
                                                                                    class="col-form-label">Tugas</label>
                                                                                <textarea id="tugas1" type="text" name="tugas1" class="form-control"
                                                                                    placeholder="Masukkan Tugas Pertama">{{ $d->tugas1 }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label for="tugas2"
                                                                                    class="col-form-label">Tugas</label>
                                                                                <textarea id="tugas2" type="text" name="tugas2" class="form-control"
                                                                                    placeholder="Masukkan Tugas Kedua">{{ $d->tugas2 }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label for="fungsi1"
                                                                                    class="col-form-label">Fungsi</label>
                                                                                <textarea id="fungsi1" type="text" name="fungsi1" class="form-control"
                                                                                    placeholder="Masukkan Fungsi Pertama">{{ $d->fungsi1 }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label for="fungsi2"
                                                                                    class="col-form-label">Fungsi</label>
                                                                                <textarea id="fungsi2" type="text" name="fungsi2" class="form-control"
                                                                                    placeholder="Masukkan Fungsi Kedua">{{ $d->fungsi2 }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label for="fungsi3"
                                                                                    class="col-form-label">Fungsi</label>
                                                                                <textarea id="fungsi3" type="text" name="fungsi3" class="form-control"
                                                                                    placeholder="Masukkan Fungsi Ketiga">{{ $d->fungsi3 }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label for="fungsi4"
                                                                                    class="col-form-label">Fungsi</label>
                                                                                <textarea id="fungsi4" type="text" name="fungsi4" class="form-control"
                                                                                    placeholder="Masukkan Fungsi Keempat">{{ $d->fungsi4 }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label for="fungsi5"
                                                                                    class="col-form-label">Fungsi</label>
                                                                                <textarea id="fungsi5" type="text" name="fungsi5" class="form-control"
                                                                                    placeholder="Masukkan Fungsi Kelima">{{ $d->fungsi5 }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label for="fungsi6"
                                                                                    class="col-form-label">Fungsi</label>
                                                                                <textarea id="fungsi6" type="text" name="fungsi6" class="form-control"
                                                                                    placeholder="Masukkan Fungsi Keenam">{{ $d->fungsi6 }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer np-bd">
                                                                        <button type="submit" id="editRowButton"
                                                                            class="btn btn-primary">Simpan</button>
                                                                        <button type="button" class="btn btn-danger"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="detailModal{{ $d->id }}"
                                                    tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header no-bd">
                                                                <h5 class="modal-title">
                                                                    <span class="fw-mediumbold">
                                                                        Details Data
                                                                    </span>
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p class="small">Detail Data ID {{ $loop->iteration }}
                                                                </p>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Nama Department</label>
                                                                        {{ $d->nama }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Kedudukan</label>
                                                                        {{ $d->kedudukan }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Organisasi</label>
                                                                        {{ $d->organisasi1 }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Organisasi</label>
                                                                        {{ $d->organisasi2 }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Tugas</label>
                                                                        {{ $d->tugas1 }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Tugas</label>
                                                                        {{ $d->tugas2 }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Fungsi</label>
                                                                        {{ $d->fungsi1 }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Fungsi</label>
                                                                        {{ $d->fungsi2 }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Fungsi</label>
                                                                        {{ $d->fungsi3 }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Fungsi</label>
                                                                        {{ $d->fungsi4 }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Fungsi</label>
                                                                        {{ $d->fungsi5 }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-group-default">
                                                                        <label>Fungsi</label>
                                                                        {{ $d->fungsi6 }}
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer no-bd">
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $d->nama }}</td>
                                                {{-- <td class="text-center">{{ $d->kedudukan }}</td>
                                                <td class="text-center">{{ $d->organisasi1 }}</td>
                                                <td class="text-center">{{ $d->organisasi2 }}</td>
                                                <td class="text-center">{{ $d->tugas1 }}</td>
                                                <td class="text-center">{{ $d->tugas2 }}</td>
                                                <td class="text-center">{{ $d->fungsi1 }}</td>
                                                <td class="text-center">{{ $d->fungsi2 }}</td>
                                                <td class="text-center">{{ $d->fungsi3 }}</td>
                                                <td class="text-center">{{ $d->fungsi4 }}</td>
                                                <td class="text-center">{{ $d->fungsi5 }}</td>
                                                <td class="text-center">{{ $d->fungsi6 }}</td> --}}
                                                <td class="text-center">
                                                    <button class="btn btn-primary" data-toggle="modal"
                                                        data-target="#editModal{{ $d->id }}"><i
                                                            class="fa fa-edit">Edit</i></button>
                                                    <button class="btn btn-info" data-toggle="modal"
                                                        data-target="#detailModal{{ $d->id }}"><i
                                                            class="fa fa-edit">Detail</i></a>
                                                        <form action="{{ route('department.destroy', $d->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Apa anda yakin menghapus data tersebut?')"><i
                                                                    class="fa fa-trash">Delete</i></a>
                                                        </form>
                                                </td>
                                            </tr>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
