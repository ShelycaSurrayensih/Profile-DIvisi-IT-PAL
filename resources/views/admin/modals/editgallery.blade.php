@foreach ($galeri as $g)
    <!-- Modal Edit Data -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">
                            Edit Data
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
                    <p class="small">Edit Data</p>
                    <form action="{{ route('Agallery.update', $g->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Nama Kegiatan</label>
                                    <input id="nama_kegiatan" type="text" name="nama_kegiatan" value="{{ $g->nama_kegiatan }}"
                                    class="form-control" placeholder="Masukkan Nama kegiatan">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Kategori</label>
                                    <input id="kategori" type="text" name="kategori"
                                        value="{{ $g->kategori }}" class="form-control" placeholder="Masukkan Kategori">
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
                            <button type="submit" id="editRowButton" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal Edit-->
@endforeach
