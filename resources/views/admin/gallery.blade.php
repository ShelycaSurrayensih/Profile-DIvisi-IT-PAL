@extends('admin.layouts.master')
@section('content')
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
                            @include('admin.modals.addgallery')
                            <div class="card-body">
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
                                                <!--start modal edit-->
                                                <div class="modal fade" id="editModal{{ $g->id }}" tabindex="-1"
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
                                                                <form action="{{ route('Agallery.update', $g->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Nama Kegiatan</label>
                                                                                <input id="nama_kegiatan" type="text" name="nama_kegiatan" value="{{ $g->nama_kegiatan }}" class="form-control" placeholder="Masukkan Nama kegiatan">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Kategori</label>
                                                                                <select name="kategori" id="kategori" type="text" class="form-control" placeholder="Masukkan Kategori">
                                                                                    <option value="Seminar" {{$g->kategori == 'Seminar' ? 'selected' : ''}}>Seminar</option>
                                                                                    <option value="Project" {{$g->kategori == 'Project' ? 'selected' : ''}}>Project</option>
                                                                                    <option value="Kegiatan Divisi" {{$g->kategori == 'Kegiatan Divisi' ? 'selected' : ''}}>Kegiatan Divisi</option>
                                                                                </select>
                                                                                {{-- <input id="kategori" type="text" name="kategori" value="{{ $g->kategori }}" class="form-control" placeholder="Masukkan Kategori"> --}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Gambar</label>
                                                                                <input type="file" name="gambar" class="form-control" placeholder="image">
                                                                            </div>
                                                                            <img src="{{asset('images/'.$g->gambar)}}"  width="100px" alt="">
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
                                                <div class="modal fade" id="detailModal{{ $g->id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                                            <label>Nama Kegiatan</label>
                                                                            {{ $g->nama_kegiatan }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Kategori</label>
                                                                            {{ $g->kategori }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group form-group-default">
                                                                            <label>Gambar</label>
                                                                            {{ $g->gambar }} <br>
                                                                            <img src="{{asset('images/'.$g->gambar)}}"  width="100px" alt="">
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
                                                    <td class="text-center">{{ $g->nama_kegiatan }}</td>
                                                    <td class="text-center">{{ $g->kategori}}</td>
                                                    <td><img src="{{asset('images/'.$g->gambar) }}" width="100px"></td>
                                                    <td class="text-center">
                                                        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $g->id }}"><i class="fa fa-edit">Edit</i></button>
                                                        <button class="btn btn-info" data-toggle="modal" data-target="#detailModal{{ $g->id }}"><i class="fa fa-edit">Details</i></button>
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
@endsection
