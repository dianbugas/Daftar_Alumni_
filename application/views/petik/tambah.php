<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Alumni Petik
                </div>
                <div class="card-body">
                    <form action="#" method='post'>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-7">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" width="260">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ttl" class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
                            <div class="col-sm-7">
                            <input type="text" name="ttl" class="form-control" id="ttl" placeholder="Alamat" width="260">
                            <small class="form-text text-danger"><?= form_error('ttl'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-7">
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" width="260">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perusahaan" class="col-sm-2 col-form-label">Perusahaan</label>
                            <div class="col-sm-7">
                            <input type="text" name="perusahaan" class="form-control" id="perusahaan" placeholder="Perusahaan" width="260">
                            <small class="form-text text-danger"><?= form_error('perusahaan'); ?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-7">
                            <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Jabatan" width="260">
                            <small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
                            </div>
                        </div>
                       
                    
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>