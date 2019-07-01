    <div class="container">
        <div class="row mt-3">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Tambah Data Alumni Sekolah Programmer</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method='post'>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                <input type="text" name="ttl" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir">
                                <small class="form-text text-danger"><?= form_error('ttl'); ?></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                                <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                <input type="text" name="perusahaan" class="form-control" id="perusahaan" placeholder="Perusahaan">
                                <small class="form-text text-danger"><?= form_error('perusahaan'); ?></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Jabatan">
                                <small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                <input type="text" name="mulai" class="form-control" id="mulai" placeholder="Mulai">
                                <small class="form-text text-danger"><?= form_error('mulai'); ?></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                <input type="text" name="selesai" class="form-control" id="selesai" placeholder="Jabatan">
                                <small class="form-text text-danger"><?= form_error('selesai'); ?></small>
                                </div>
                            </div>
                            <button type="submit" name="tambah" class="btn btn-primary float-left">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>