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
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addModal">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @extends('admin.modals.addgallery')
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
                                        @extends('admin.modals.detailgallery')
                                        @extends('admin.modals.editgallery')
                                        @foreach($galeri as $g)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $g->nama_kegiatan }}</td>
                                                <td class="text-center">{{ $g->kategori}}</td>
                                                <td><img src="{{asset('images/'.$g->gambar) }}" width="100px"></td>
                                                <td class="text-center">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit">Edit</i></button>
                                                    <button class="btn btn-info" data-toggle="modal" data-target="#detailModal"><i class="fa fa-edit">Details</i></button>
                                                    <form action="{{ route('gallery.destroy', $g->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin menghapus data tersebut?')"><i class="fa fa-trash">Delete</i></a>
                                                    </form>
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
</div>
@endsection
