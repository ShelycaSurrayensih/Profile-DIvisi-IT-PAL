<!-- Modal Add Data -->
<div class="modal fade" id="addModaluser" tabindex="-1" role="dialog" aria-hidden="true">
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
                <form action="{{ route('Auser.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Nama</label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Masukkan Nama">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Email</label>
                                <input id="email" type="text" name="email" class="form-control" placeholder="Masukkan Email">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Password</label>
                                <input id="password" type="text" name="password" class="form-control" placeholder="masukkan password">
                            </div>
                        </div>
                    </div>
                     <div class="modal-footer no-bd">
                        <button type="submit" id="addButtonuser" class="btn btn-primary">Tambahkan</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End Modal Add-->
