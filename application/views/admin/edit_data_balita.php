<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT DATA BALITA</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                         <a href="<?php echo base_url("admin/data_balita"); ?>" class="btn btn-danger" > Kembali</a>
                        </div>
                        <div class="body">
						<?php foreach($edit_data_balita as $v){ ?>
                            <form role="form" action="<?php echo base_url("/admin/simpan_balita/$v->id_balita"); ?>" enctype="multipart/form-data" method="post">
                               <div class="form-group">
								    <div class="form-line">
										<label> NIK </label>
                                        <input name="nik" type="text" class="form-control" value="<?php echo $v->nik; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Nama Balita </label>
                                        <input name="nama_balita" type="text" class="form-control" value="<?php echo $v->nama_balita; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Nama Ayah </label>
                                        <input name="nama_ayah" type="text" class="form-control" value="<?php echo $v->nama_ayah; ?>">
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Nama Ibu </label>
                                        <input name="nama_ibu" type="text" class="form-control" value="<?php echo $v->nama_ibu; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Tanggal Lahir </label>
                                        <input name="tanggal_lahir" type="date" class="form-control" value="<?php echo $v->tanggal_lahir; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										  <label>Jenis Kelamin</label>
										  <select class="form-control" name="jenis_kelamin">
											<option value="<?php echo $v->jenis_kelamin; ?>"><?php echo $v->jenis_kelamin; ?></option>
											<option value="Laki-Laki">Laki-Laki</option>
											<option value="Perempuan">Perempuan</option>
										  </select>
										</div>
										</div>
								<div class="form-group">
								    <div class="form-line">
										  <label>Agama</label>
										  <select class="form-control" name="agama">
											<option value="<?php echo $v->agama; ?>"><?php echo $v->agama; ?></option>
											<option value="Islam">Islam</option>
											<option value="Hindu">Hindu</option>
											<option value="Budha">Budha</option>
											<option value="Katolik">Katolik</option>
											<option value="Protestan">Protestan</option>
											<option value="Konghucu">Konghucu</option>
										  </select>
										</div>
										</div>
									<div class="form-group">
								    <div class="form-line">
										<label> Umur (Bulan) </label>
                                        <input name="umur_balita" type="number" class="form-control" value="<?php echo $v->umur_balita; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Berat Badan (KG) </label>
                                        <input name="bb_balita" type="number" class="form-control" value="<?php echo $v->bb_balita; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Tinggi Badan (CM) </label>
                                        <input name="tb_balita" type="number" class="form-control" value="<?php echo $v->tb_balita; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Telepon / HP </label>
                                        <input name="telepon" type="number" class="form-control" value="<?php echo $v->telepon; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Username </label>
                                        <input name="username" type="text" class="form-control" value="<?php echo $v->username; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Password </label>
                                        <input name="password" type="password" class="form-control" placeholder="Kosongkan Jika Tidak Ubah Password">
                                        <input name="pass_lama" type="hidden" class="form-control" value="<?php echo $v->username; ?>">
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Keterangan </label>
                                        <textarea name="keterangan_balita" type="text" class="form-control"> <?php echo $v->keterangan_balita; ?></textarea>
                                    </div>
                                    </div>
						<?php } ?>
                                <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
        </section><!-- /.content -->
      </div>