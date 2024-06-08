<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Master Dosen</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data" action="<?= base_url('/admin/master-dosen/simpan'); ?>">
                <?= csrf_field(); ?>
                <div class="col-md-7 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tambah Data Master Dosen</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <!-- < ?= validation_list_errors(); ?> --> 
                            <div class="form-group row">
                                <label class="control-label col-md-12 col-sm-12" for="nidn">NIDN</label>
                                <div class="col-md-12 col-sm-12">
                                    <input type="text" name="nidn" value="<?= old('nidn') ?>" class="form-control <?= validation_show_error('nidn') ? 'is-invalid' : null; ?>" id="nidn" placeholder="Tuliskan NIDN">
                                    <div class="invalid-feedback" style="display: block;">
                                        <?= validation_show_error('nidn'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-12 col-sm-12" for="peg_nip">NIP</label>
                                <div class="col-md-12 col-sm-12 ">
                                    <input type="text" value="<?= old('peg_nip'); ?>" class="form-control <?= validation_show_error('peg_nip') ? 'is-invalid' : null; ?>" id="peg_nip" name="peg_nip" placeholder="Tuliskan NIP">
                                    <div class="invalid-feedback" style="display: block;">
                                        <?= validation_show_error('peg_nip'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-4 col-sm-4" for="peg_gel_bel">Gelar Depan</label>
                                <label class="control-label col-md-4 col-sm-4" for="peg_nama">Nama</label>
                                <label class="control-label col-md-4 col-sm-4" for="peg_gel_bel">Gelar Belakang</label>
                                <div class="col-md-4 col-sm-4">
                                    <input type="text" value="<?= old('peg_gel_dep'); ?>" class="form-control <?= validation_show_error('peg_gel_dep') ? 'is-invalid' : null; ?>"  id="peg_gel_dep" name="peg_gel_dep" placeholder="Tuliskan gelar depan">
                                    <div class="invalid-feedback" style="display: block;">
                                        <?= validation_show_error('peg_gel_dep'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <input type="text" value="<?= old('peg_nama'); ?>" class="form-control <?= validation_show_error('peg_nama') ? 'is-invalid' : null; ?>" id="peg_nama" name="peg_nama" placeholder="Tuliskan Nama">
                                    <div class="invalid-feedback" style="display: block;">
                                        <?= validation_show_error('peg_nama'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <input type="text" value="<?= old('peg_gel_bel'); ?>" class="form-control <?= validation_show_error('peg_gel_bel') ? 'is-invalid' : null; ?>" id="peg_gel_bel" name="peg_gel_bel" placeholder="Tuliskan gelar belakang">
                                    <div class="invalid-feedback" style="display: block;">
                                        <?= validation_show_error('peg_gel_bel'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-lg-12 col-md-3 col-sm-12" for="peg_prodi">Departemen</label>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <select class="form-control <?= validation_show_error('peg_prodi') ? 'is-invalid' : null; ?>" name="peg_prodi" id="peg_prodi">
                                        <option value="">-- Pilih Departemen --</option>
                                        <?php foreach ($semuaDepartemen as $d) { ?>
                                            <option value="<?= $d['departemen_id']; ?>" <?= old('peg_prodi')  == $d['departemen_id'] ? "selected" : null; ?>><?= $d['departemen_nama']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('peg_prodi'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-12 col-sm-12" for="peg_bidang">Bidang</label>
                                <div class="col-md-12 col-sm-12">
                                    <input type="text" value="<?= old('peg_bidang'); ?>" class="form-control <?= validation_show_error('peg_bidang') ? 'is-invalid' : null; ?>" id="peg_bidang" name="peg_bidang" placeholder="Tuliskan Bidang">
                                    <div class="invalid-feedback" style="display: block;">
                                        <?= validation_show_error('peg_bidang'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-12 col-sm-12" for="peg_pendidikan">Pendidikan</label>
                                <div class="col-md-12 col-sm-12">
                                    <input type="text" value="<?= old('peg_pendidikan'); ?>" class="form-control <?= validation_show_error('peg_pendidikan') ? 'is-invalid' : null; ?>" id="peg_pendidikan" name="peg_pendidikan" placeholder="Tuliskan Pendidikan">
                                    <div class="invalid-feedback" style="display: block;">
                                        <?= validation_show_error('peg_pendidikan'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-12 col-sm-12s" for="peg_tmt">TMT :</label>
                                <div class="input-group date col-md-12 col-sm-12">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                    <input required <?= validation_show_error('peg_tmt') ? "style='border : 1px solid red'" : null?> placeholder="Pilih Tanggal TMT" type="text" value="<?= old('peg_tmt'); ?>" class="form-control datepicker" name="peg_tmt">
                                    <div class="invalid-feedback" style="text-align: left; display: block;">
                                        <?= validation_show_error('peg_tmt'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-lg-12 col-md-3 col-sm-12" for="peg_status">Status Kepegawaian</label>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <select class="form-control <?= validation_show_error('peg_status') ? 'is-invalid' : null; ?>" name="peg_status" id="peg_status">
                                        <option value="">-- Pilih Status Kepegawaian --</option>
                                        <option value="PNS">PNS</option>
                                        <option value="P3K">P3K</option>
                                        <option value="Tetap Non PNS">Tetap Non PNS</option>
                                    </select>
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('peg_status'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-lg-12 col-md-3 col-sm-12" for="peg_pangkat">Pangkat</label>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <select class="form-control <?= validation_show_error('peg_pangkat') ? 'is-invalid' : null; ?>" name="peg_pangkat" id="peg_pangkat">
                                        <option value="">-- Pilih Pangkat --</option>
                                        <option value="Penata Muda Tk. I">Penata Muda Tk. I</option>
                                        <option value="Penata">Penata</option>
                                        <option value="Penata Tk. I">Penata Tk. I</option>
                                        <option value="Pembina">Pembina</option>
                                        <option value="Pembina Tk. I">Pembina Tk. I</option>
                                        <option value="Pembina Utama Muda">Pembina Utama Muda</option>
                                        <option value="Pembina Utama Madya">Pembina Utama Madya</option>
                                        <option value="Pembina Utama">Pembina Utama</option>
                                    </select>
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('peg_pangkat'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-lg-12 col-md-3 col-sm-12" for="peg_golongan">Golongan</label>
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <select class="form-control <?= validation_show_error('peg_golongan') ? 'is-invalid' : null; ?>" name="peg_golongan" id="peg_golongan">
                                        <option value="">-- Pilih Golongan --</option>
                                        <option value="III/b">III/b</option>
                                        <option value="III/c">III/c</option>
                                        <option value="III/d">III/d</option>
                                        <option value="IV/a">IV/a</option>
                                        <option value="IV/b">IV/b</option>
                                        <option value="IV/c">IV/c</option>
                                        <option value="IV/d">IV/d</option>
                                        <option value="IV/e">IV/e</option>
                                    </select>
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('peg_golongan'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-lg-12 col-md-3 col-sm-12" for="peg_jabatan">Jabatan</label>
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <select class="form-control <?= validation_show_error('peg_jabatan') ? 'is-invalid' : null; ?>" name="peg_jabatan" id="peg_jabatan">
                                        <option value="">-- Pilih Jabatan --</option>
                                        <option value="Asisten Ahli">Asisten Ahli</option>
                                        <option value="Lektor">Lektor</option>
                                        <option value="Lektor Kepala">Lektor Kepala</option>
                                        <option value="Guru Besar">Guru Besar</option>
                                    </select>
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('peg_jabatan'); ?>
                                    </div>
                                </div>  
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-12 col-sm-12" for="peg_tmp_lahir">Tempat Lahir</label>
                                <div class="col-md-12 col-sm-12 ">
                                    <input type="text" value="<?= old('peg_tmp_lahir'); ?>" class="form-control <?= validation_show_error('peg_tmp_lahir') ? 'is-invalid' : null; ?>" id="peg_tmp_lahir" name="peg_tmp_lahir" placeholder="Tuliskan Tempat Lahir">
                                    <div class="invalid-feedback" style="display: block;">
                                        <?= validation_show_error('peg_tmp_lahir'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-12 col-sm-12s" for="peg_tgl_lahir">Tanggal Lahir :</label>
                                <div class="input-group date col-md-12 col-sm-12">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                    <input required <?= validation_show_error('peg_tgl_lahir') ? "style='border : 1px solid red'" : null?> placeholder="Pilih Tanggal Lahir" type="text" value="<?= old('peg_tgl_lahir'); ?>" class="form-control datepicker" name="peg_tgl_lahir">
                                    <div class="invalid-feedback" style="text-align: left; display: block;">
                                        <?= validation_show_error('peg_tgl_lahir'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-lg-12 col-md-3 col-sm-12" for="peg_sex">Jenis Kelamin</label>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <select class="form-control <?= validation_show_error('peg_sex') ? 'is-invalid' : null; ?>" name="peg_sex" id="peg_sex">
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="L" <?= old('peg_sex') && old('peg_sex') ==  'L' ? 'selected' : null ; ?>>Laki - laki</option>
                                        <option value="P" <?= old('peg_sex') && old('peg_sex') ==  'P' ? 'selected' : null ; ?>>Perempuan</option>
                                    </select>
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('peg_sex'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-12 col-sm-12" for="peg_agama">Agama</label>
                                <div class="col-md-12 col-sm-12 ">
                                    <input type="text" value="<?= old('peg_agama'); ?>" class="form-control <?= validation_show_error('peg_agama') ? 'is-invalid' : null; ?>" id="peg_agama" name="peg_agama" placeholder="Tuliskan Agama">
                                    <div class="invalid-feedback" style="display: block;">
                                        <?= validation_show_error('peg_agama'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-12 col-sm-12" for="peg_alamat">Alamat</label>
                                <div class="col-md-12 col-sm-12">
                                    <textarea name="peg_alamat" placeholder="Tuliskan Alamat" id="peg_alamat" class="form-control <?= validation_show_error('peg_alamat') ? 'is-invalid' : null; ?>" cols="10" rows="10"><?= old('peg_alamat'); ?></textarea>
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('peg_alamat'); ?>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Upload Foto</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <!-- < ?= validation_list_errors(); ?> -->
                            <div class="form-group row">
                                <label for="berita_sampul" class="control-label col-md-12 col-sm-12">Foto <b>( dibawah 1MB / 1024KB)</b></label>
                                <div class="col-md-12 col-sm-12">
                                    <input accept="image/*" class="form-control <?= validation_show_error('berita_sampul') ? 'is-invalid' : null; ?>" type="file" id="berita_sampul" name="berita_sampul">
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('berita_sampul'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="berita_sampul" class="control-label col-md-12 col-sm-12">Preview Foto</label>
                                <div class="col-md-12 col-sm-12">
                                    <img id="gambar_load" src="" alt="" style="width: 400px;" class="img-thumbnail img-preview">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Informasi Tambahan</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <div class="form-group row">
                                <label class="control-label col-md-12 col-sm-12" for="bio">Biografi</label>
                                <div class="col-md-12 col-sm-12">
                                    <textarea name="bio" placeholder="Tuliskan Biografi" id="bio" class="form-control <?= validation_show_error('bio') ? 'is-invalid' : null; ?>" cols="10" rows="10"><?= old('bio'); ?></textarea>
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('bio'); ?>
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="control-label col-md-12 col-sm-12" for="home_base">Home Base</label>
                                <div class="col-md-12 col-sm-12">
                                    <input type="text" value="<?= old('home_base'); ?>" class="form-control <?= validation_show_error('home_base') ? 'is-invalid' : null; ?>" id="home_base" name="home_base" placeholder="Tuliskan Home Base">
                                    <div class="invalid-feedback" style="display: block;">
                                        <?= validation_show_error('home_base'); ?>
                                    </div>
                                </div>
                            </div>    
                            <div class="form-group row">
                                <label class="control-label col-md-12 col-sm-12" for="google_schoolar">Google Schoolar</label>
                                <div class="col-md-12 col-sm-12">
                                    <input type="text" value="<?= old('google_schoolar'); ?>" class="form-control <?= validation_show_error('google_schoolar') ? 'is-invalid' : null; ?>" id="google_schoolar" name="google_schoolar" placeholder="Tuliskan Link Google Schoolar">
                                    <div class="invalid-feedback" style="display: block;">
                                        <?= validation_show_error('google_schoolar'); ?>
                                    </div>
                                </div>
                            </div>           
                            <div class="form-group row">
                                <label class="control-label col-md-12 col-sm-12" for="scopus_id">Scopus ID</label>
                                <div class="col-md-12 col-sm-12">
                                    <input type="text" value="<?= old('scopus_id'); ?>" class="form-control <?= validation_show_error('scopus_id') ? 'is-invalid' : null; ?>" id="scopus_id" name="scopus_id" placeholder="Tuliskan Link Scopus ID">
                                    <div class="invalid-feedback" style="display: block;">
                                        <?= validation_show_error('scopus_id'); ?>
                                    </div>
                                </div>
                            </div>      
                            <div class="form-group row">
                                <label class="control-label col-md-12 col-sm-12" for="hand_book">Hand Book</label>
                                <div class="col-md-12 col-sm-12">
                                    <input type="text" value="<?= old('hand_book'); ?>" class="form-control <?= validation_show_error('hand_book') ? 'is-invalid' : null; ?>" id="hand_book" name="hand_book" placeholder="Tuliskan Hand Book">
                                    <div class="invalid-feedback" style="display: block;">
                                        <?= validation_show_error('hand_book'); ?>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Roadmap</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <div class="form-group row">
                                <label for="gambar_roadmap" class="file-label col-md-12 col-sm-12">Gambar Roadmap <b>( dibawah 1MB / 1024KB)</b></label>
                                <div class="col-md-12 col-sm-12">
                                    <input accept="image/*" class="form-control <?= validation_show_error('gambar_roadmap') ? 'is-invalid' : null; ?>" type="file" id="gambar_roadmap" name="gambar_roadmap">
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('gambar_roadmap'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="preview_roadmap" class="col-md-12 col-sm-12">Preview Foto Roadmap</label>
                                <div class="col-md-12 col-sm-12">
                                    <img id="gambar_load_roadmap" alt="" style="width: 400px;" class="img-thumbnail img-preview">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-12 col-sm-12" for="deskripsi_roadmap">Deskripsi Roadmap</label>
                                <div class="col-md-12 col-sm-12">
                                    <textarea name="deskripsi_roadmap" placeholder="Deskripsikan tentang roadmap" id="deskripsi_roadmap" class="form-control <?= validation_show_error('deskripsi_roadmap') ? 'is-invalid' : null; ?>" cols="10" rows="10"><?= old('deskripsi_roadmap'); ?></textarea>
                                    <div class="invalid-feedback" style="text-align: left;">
                                        <?= validation_show_error('deskripsi_roadmap'); ?>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12  offset-md-3">
                            <a href="<?= base_url('/master-dosen'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-circle-left" style="margin-right: 5px;"></i>Kembali</a>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save" style="margin-right: 5px;"></i>Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>
<script>
    function bacaGambar(input) {
        if(input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function(e)
            {
                $('#gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#berita_sampul').change(function() {
        bacaGambar(this);
    })
</script>
<script>
    function bacaGambarRoadmap(input) {
        if(input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function(e)
            {
                $('#gambar_load_roadmap').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#gambar_roadmap').change(function() {
        bacaGambarRoadmap(this);
    })
</script>
<?= $this->endSection(); ?>
