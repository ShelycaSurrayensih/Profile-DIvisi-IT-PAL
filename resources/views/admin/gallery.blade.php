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
                                <h4 class="card-title">Tambah Gallery</h4>
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
                                            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Nama Kegiatan</label>
                                                            <input id="nama_kegiatan" type="text" name="nama_kegiatan" class="form-control" placeholder="Masukkan Nama kegiatan">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Kategori</label>
                                                            <input id="kategori" type="text" name="kategori" class="form-control" placeholder="Masukkan Kategori">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-md-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Foto</label>
                                                            <input id="addOffice" type="text" name="foto" class="form-control" placeholder="fill office">
                                                        </div>
                                                    </div> --}}
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                        {{-- <label class="text-label" for="gambar">GAMBAR</label>
                                                        <div class="input-group input-group-merge">
                                                            <input id="gambar" name="gambar" type="file" required="" class="form-control form-control-prepended" style="padding: 2px;">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <span class="far fa-user"></span>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        {{-- <div class="form-group"> --}}
                                                            <label>Gambar</label>
                                                            <input type="file" name="gambar" class="form-control" placeholder="image">
                                                        </div>
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
                        </div>

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover text-center" >
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Kategori</th>
                                            <th>Gambar</th>
                                            <th style="width: 30%">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($galeri as $g)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $g->nama_kegiatan }}</td>
                                                <td class="text-center">{{ $g->kategori}}</td>
                                                <td><img src="{{asset('images/'.$g->gambar) }}" width="100px"></td>
                                                <td class="text-center">
                                                    {{--  <a href="{{ route('products.edit', $p->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                                    <a href="{{ route('products.show', $p->id) }}" class="btn btn-primary"><i class="fa fa-edit">Detail</i></a>  --}}
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-edit">Detail</i></a>
                                                    <form action="{{ route('gallery.destroy', $g->id) }}" method="POST" class="d-inline">
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
