@foreach($galeri as $g)
    <!-- Modal Detail Data -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                    {{-- <form action="{{ route('Asharing.index') }}" method="POST" enctype="multipart/form-data">
                    @csrf --}}
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
                                <img src="{{asset('images/'.$g->gambar)}}"  width="100px" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer no-bd">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
    <!--End Modal Detail-->
@endforeach
