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
                                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @extends('admin.modals.modaladd')
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover text-center" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Description</th>
                                            <th style="width: 30%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @extends('admin.modals.modaledit')
                                    @extends('admin.modals.modaldetail')
                                     @foreach($sharing as $s)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $s->judul }}</td>
                                                <td class="text-center">{{ $s->description }}</td>
                                                <td class="text-center">
                                                    {{--  <a href="{{ route('products.edit', $p->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a>
                                                    <a href="{{ route('products.show', $p->id) }}" class="btn btn-primary"><i class="fa fa-edit">Detail</i></a>  --}}
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editRowModal"><i class="fa fa-edit">Edit</i></button>
                                                    <button class="btn btn-info" data-toggle="modal" data-target="#detailRowModal"><i class="fa fa-edit">Details</i></button>
                                                    {{-- <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a> --}}
                                                    {{-- <a href="#" class="btn btn-primary"><i class="fa fa-edit">Detail</i></a> --}}
                                                    <form action="{{ route('Asharing.destroy', $s->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda yakin menghapus data tersebut?')"><i class="fa fa-trash">Delete</i></a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                                <div class="form-button-action">
                                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
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
