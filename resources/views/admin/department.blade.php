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
                                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
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
                                                                    class="form-control"
                                                                    placeholder="Masukkan Nama Department">
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Kedudukan</label>
                                                            <input id="kedudukan" type="text" name="kedudukan" class="form-control" placeholder="Kedudukan">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Organisasi</label>
                                                            <input id="organisasi" type="text" name="organisasi" class="form-control" placeholder="Organisasi">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Tugas</label>
                                                            <input id="tugas" type="text" name="tugas" class="form-control" placeholder="Tugas">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Fungsi</label>
                                                            <input id="fungsi" type="text" name="fungsi" class="form-control" placeholder="Fungsi">
                                                        </div>
                                                    </div> --}}
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
                                            @foreach ($department as $d)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $d->nama }}</td>
                                                    {{-- <td class="text-center">{{ $d->description }}</td> --}}
                                                    <td class="text-center">
                                                        {{-- <a href="{{ route('products.edit', $p->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                                    <a href="{{ route('products.show', $p->id) }}" class="btn btn-primary"><i class="fa fa-edit">Detail</i></a> --}}
                                                        <div class="dropdown">
                                                            <a class="btn btn-primary dropdown-toggle" href="#"
                                                                role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                Edit
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <button type="button" class="btn btn-light"
                                                                    data-toggle="modal"
                                                                    data-target="#kedudukan">Kedudukan</button>
                                                                <button type="button" class="btn btn-light"
                                                                    data-toggle="modal"
                                                                    data-target="#organisasi">Organisasi</button>
                                                                <button type="button" class="btn btn-light"
                                                                    data-toggle="modal"
                                                                    data-target="#tugas">Tugas</button>
                                                                <button type="button" class="btn btn-light"
                                                                    data-toggle="modal"
                                                                    data-target="#fungsi">Fungsi</button>
                                                            </div>

                                                            <div class="modal fade bd-example-modal-lg" id="kedudukan"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header border-bottom-0">
                                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                                Create Account
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form>
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="kedudukan"
                                                                                        class="col-form-label">Masukkan
                                                                                        kedudukan:</label>
                                                                                    <textarea class="form-control" id="kedudukan"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer border-top-0 d-flex justify-content-center">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal fade bd-example-modal-lg" id="organisasi"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header border-bottom-0">
                                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                                Create Account
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form>
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="organisasi"
                                                                                        class="col-form-label">Masukkan
                                                                                        organisasi:</label>
                                                                                    <textarea class="form-control" id="organisasi"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer border-top-0 d-flex justify-content-center">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal fade bd-example-modal-lg" id="fungsi"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header border-bottom-0">
                                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                                Create Account
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form>
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="fungsi"
                                                                                        class="col-form-label">Masukkan
                                                                                        fungsi:</label>
                                                                                    <textarea class="form-control" id="fungsi"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer border-top-0 d-flex justify-content-center">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="modal fade bd-example-modal-lg" id="tugas"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header border-bottom-0">
                                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                                Create Account
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form>
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="tugas"
                                                                                        class="col-form-label">Masukkan
                                                                                        tugas:</label>
                                                                                    <textarea class="form-control" id="tugas"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer border-top-0 d-flex justify-content-center">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <a href="#" class="btn btn-primary"><i
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
