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
                                <h4 class="card-title">Tambah Kategori</h4>
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
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
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="small">Tambahkan data baru</p>
                                            <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Kode Kategori</label>
                                                            <input id="kode_kategori" type="text" name="kode_kategori" class="form-control" placeholder="Masukkan Kode">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Nama Kategori</label>
                                                            <input id="nama_kategori" type="text" name="nama_kategori" class="form-control" placeholder="Masukkan Kategori">
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer no-bd">
                                                        <button type="submit" id="addRowButton" class="btn btn-primary">Tambahkan</button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover text-center" >
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Kategori</th>
                                            <th>Nama Kategori</th>
                                            <th style="width: 30%">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($kategori as $k)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $k->kode_kategori }}</td>
                                                <td class="text-center">{{ $k->nama_kategori}}</td>
                                                <td class="text-center">
                                                    {{--  <a href="{{ route('products.edit', $p->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                                    <a href="{{ route('products.show', $p->id) }}" class="btn btn-primary"><i class="fa fa-edit">Detail</i></a>  --}}
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-edit">Detail</i></a>
                                                    <form action="{{ route('Kategori.destroy', $k->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin menghapus data tersebut?')"><i class="fa fa-trash">Delete</i></a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                                {{-- <div class="form-button-action">
                                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr> --}}
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
