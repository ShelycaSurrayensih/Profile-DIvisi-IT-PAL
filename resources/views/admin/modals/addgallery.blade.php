 <!-- Modal Add Data -->
 <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
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

<!--End Modal Add-->
