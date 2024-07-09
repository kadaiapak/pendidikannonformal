<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
 <!-- page content -->
 <div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Master Dosen</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Daftar Dosen</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div style="margin-bottom: 10px;">
							<a href="<?= base_url("/admin/master-dosen/tambah"); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus-square" style="margin-right: 5px;"></i>Tambah Data Dosen</a>
						</div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th width="15%">NIDN</th>
                                                <th width="20%">Nama</th>
                                                <th>Departemen</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1 ?>
                                        <?php foreach($semuaDosen as $sd): ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $sd['nidn']; ?></td>
                                                <td><?= $sd['peg_gel_dep']; ?> <?= $sd['peg_nama']; ?> <?= $sd['peg_gel_bel']; ?></td>
                                                <td>Pendidikan Non Formal</td>
                                                <td>
                                                    <form action="<?= base_url('/admin/master-dosen/hapus/'.$sd['nidn']); ?>" method="post" class="d-inline">
                                                        <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('yakin menu ini dihapus?')"><i class="fa fa-trash-o" style="margin-right: 5px;"></i>Hapus</button>
                                                    </form>
                                                    <a href="<?= base_url('/admin/master-dosen/edit/'.$sd['nidn']); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit d-inline" style="margin-right: 5px;"></i>Edit</a>
                                                </td>
                                            <?php $no++ ?> 
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
</div>
<?= $this->endSection(); ?>
