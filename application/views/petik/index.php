    <div class="container">
        <h2 class="h3 mb-2 text-gray-800"><?= $title; ?></h2>
        <div class="container">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?php if ($this->session->flashdata('flash')) : ?>
            <!-- <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">Data mahasiswa
                        <strong>berhasil</strong><?= $this->session->flashdata('flash'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div> -->  
            <?php endif; ?> 
            <div class="row mt-3">
                <div class="col-md-6">
                    <a href="<?= base_url(); ?>petik/tambah" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="col-md-6">
                <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Surat Keluar" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col md-6">
                    <div class="table-responsive-sm">
                        <?php if (empty($petik)) : ?>
                            <div class="alert alert-danger" role="alert">
                                Data Surat Keluar tidak ditemukan
                            </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>Nama</th>
                                            <th>alamat</th>
                                            <th>perusahaan</th>
                                            <th>jabatan</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($petik as $p) : ?>
                                        <tr>
                                            <th><?= $no++; ?></th>
                                            <th><?= $p['nama']; ?></th>
                                            <th><?= $p['alamat']; ?></th>
                                            <th><?= $p['perusahaan']; ?></th>
                                            <th><?= $p['jabatan']; ?></th>
                                            <th>
                                                <a href="#" class="fa fa-download fa-lg" style="color:black"></a>
                                                <a href="#" class="fa fa-search-plus fa-lg"></a>
                                                <a href="#" class="fa fa-pencil-square-o fa-lg" style="color:Green"></a>
                                                <a href="#" class="fa fa-trash fa-lg tombol-hapus" style="color:red"></a>
                                            </th>  
                                        </tr>
                                        <?php endforeach; ?>
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

