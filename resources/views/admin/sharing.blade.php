@extends('admin.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Tambah Sharing & Knowledge</h4>
                                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                        data-target="#addRowModal">
                                        <i class="fa fa-plus"></i>
                                        Tambah Data
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                @extends('admin.modals.modaladd')
                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Description</th>
                                                <th style="width: 30%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sharing as $s)
                                                <!--start modal edit-->
                                                <div class="modal fade" id="editRowModal{{ $s->id }}" tabindex="-1"
                                                    role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header no-bd">
                                                                <h5 class="modal-title">
                                                                    <span class="fw-mediumbold">
                                                                        Edit Data
                                                                    </span>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p class="small">Edit Data ID {{ $loop->iteration }}</p>
                                                                <form action="{{ route('Asharing.update', $s->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Judul</label>
                                                                                <input id="judul" type="text"
                                                                                    name="judul"
                                                                                    value="{{ $s->judul }}"
                                                                                    class="form-control"
                                                                                    placeholder="Masukkan Judul">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Deskripsi</label>
                                                                                <input id="description" type="text"
                                                                                    name="description"
                                                                                    value="{{ $s->description }}"
                                                                                    class="form-control"
                                                                                    placeholder="Description">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Tanggal Dibuat</label>
                                                                                <input id="tanggal_dibuat" type="date"
                                                                                    name="tanggal_dibuat"
                                                                                    value="{{ $s->tanggal_dibuat }}"
                                                                                    class="form-control"
                                                                                    placeholder="Tanggal">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer no-bd">
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
                                                <!--End Modal Edit-->

                                                <!-- Modal Detail Data -->
                                                <div class="modal fade" id="detailRowModal{{ $s->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header no-bd">
                                                                <h5 class="modal-title">
                                                                    <span class="fw-mediumbold">
                                                                        Details Data
                                                                    </span>
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p class="small">Detail Data ID {{ $loop->iteration }}</p>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Judul</label>
                                                                            {{ $s->judul }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Deskripsi</label>
                                                                            {{ $s->description }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Tanggal Dibuat</label>
                                                                            {{ $s->tanggal_dibuat }}
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
                                                </div>
                                                <!--End Modal Detail-->

                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $s->judul }}</td>
                                                    <td class="text-center">{{ $s->description }}</td>
                                                    <td class="text-center">
                                                        {{-- <a href="{{ route('products.edit', $p->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                                    <a href="{{ route('products.show', $p->id) }}" class="btn btn-primary"><i class="fa fa-edit">Detail</i></a> --}}
                                                        <button class="btn btn-primary" data-toggle="modal" data-target="#editRowModal{{ $s->id }}"><i class="fa fa-edit">Edit</i></button>
                                                        <button class="btn btn-info" data-toggle="modal" data-target="#detailRowModal{{ $s->id }}"><i class="fa fa-edit">Details</i></button>
                                                        {{-- <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a> --}}
                                                        {{-- <a href="#" class="btn btn-primary"><i class="fa fa-edit">Detail</i></a> --}}
                                                        <form action="{{ route('Asharing.destroy', $s->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Apa anda yakin menghapus data tersebut?')"><i
                                                                    class="fa fa-trash">Delete</i></a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            <div class="form-button-action">
                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-primary btn-lg"
                                                    data-original-title="Edit Task">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-danger" data-original-title="Remove">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
