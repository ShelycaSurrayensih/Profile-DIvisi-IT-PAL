<!-- Modal Add Data -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Tambah Data
                    </span>
                    {{-- <span class="fw-light">
                        Data
                    </span> --}}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="small">Tambahkan data baru</p>
                <form action="{{ route('Asharing.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Judul</label>
                                <input id="judul" type="text" name="judul" class="form-control" placeholder="Masukkan Judul">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Deskripsi</label>
                                <input id="description" type="text" name="description" class="form-control" placeholder="Description">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Tanggal Dibuat</label>
                                <input id="tanggal_dibuat" type="date" name="tanggal_dibuat" class="form-control" placeholder="Tanggal">
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
<!--End Modal Add-->
