@extends('admin.layouts.master')
@section('content')
        <div class="content">
            <div class="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Tambah Data User</h4>
                                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                        data-target="#addModaluser">
                                        <i class="fa fa-plus"></i>
                                        Tambah Data
                                    </button>
                                </div>
                            </div>
                             @include('admin.modals.adduser')
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th style="width: 30%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($abc as $u)
                                                <!--start modal edit-->
                                                <div class="modal fade" id="editModaluser{{ $u->id }}" tabindex="-1"
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
                                                                <form action="{{ route('Auser.update', $u->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Nama</label>
                                                                                <input id="name" type="text"
                                                                                    name="name"
                                                                                    value="{{ $u->name }}"
                                                                                    class="form-control"
                                                                                    placeholder="Masukkan nama">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Email</label>
                                                                                <input id="email" type="text"
                                                                                    name="email"
                                                                                    value="{{ $u->email }}"
                                                                                    class="form-control"
                                                                                    placeholder="Masukkan email">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Password</label>
                                                                                <input id="passwword" type="text"
                                                                                    name="password"
                                                                                    value="{{ $u->password }}"
                                                                                    class="form-control"
                                                                                    placeholder="Masukkan passwword">
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
                                                <div class="modal fade" id="detailModaluser{{ $u->id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                                            <label>Nama</label>
                                                                            {{ $u->name }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Email</label>
                                                                            {{ $u->email }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Password</label>
                                                                            {{ $u->password }}
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
                                                    <td class="text-center">{{ $u->name }}</td>
                                                    <td class="text-center">{{ $u->email }}</td>
                                                    <td class="text-center">{{ $u->password }}</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-primary" data-toggle="modal" data-target="#editModaluser{{ $u->id }}"><i class="fa fa-edit">Edit</i></button>
                                                        <button class="btn btn-info" data-toggle="modal" data-target="#detailModaluser{{ $u->id }}"><i class="fa fa-edit">Details</i></button>
                                                        <form action="{{ route('Auser.destroy', $u->id) }}"
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
@endsection
