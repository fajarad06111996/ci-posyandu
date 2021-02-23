<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA ADMIN </h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->
				 
               
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
							<p>

                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Nama </th>
                                            <th>Alamat </th>
                                            <th>No Hp </th>
                                            <th>Jenis Kelamin </th>
                                            <th><center>Aksi</center></th>
                                        </tr>
                                    </thead>
						          <?php  foreach($data_admin as $v) { ?>
                                    <tbody>
									     <tr>
                                            <td><?php echo $v->username; ?></td>
                                            <td align="center">*********</td>
                                            <td align="center"><?php echo $v->nama_admin; ?></td>
                                            <td align="center"><?php echo $v->alamat ; ?></td>
                                            <td align="center"><?php echo $v->no_hp ; ?></td>
                                            <td align="center"><?php echo $v->jenis_kelamin ; ?></td>
                                            <td align="center">
                                            <a href="<?php echo base_url("admin/edit_admin/$v->id_admin"); ?>"><button class="btn btn-primary">Edit</button></a> 
                                            
                                        </tr>
									   <?php  } ?> 
                                    </tbody>
                                </table>
							
                            </div>

							</div>

                </div><!-- /.tab-content -->
               
              </div>
        </section><!-- /.content -->
      </div>
	  <div class="modal fade" id="tambah">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                               
								  <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                   
                                </div>
                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/tambah_penduduk_baru"); ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
								    <div class="form-line">
										<label>No KTP </label>
                                        <input name="no_ktp" type="number" class="form-control" placeholder="No KTP" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label>NIK </label>
                                        <input name="nik" type="number" class="form-control" placeholder="Nomor Induk Keluarga" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label>Nama Lengkap</label>
                                        <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control">
										<option value="Laki-Laki"> Laki-Laki </option>
                                        <option value="Perempuan"> Perempuan </option>
                                                        
                                    </select>    
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label>Tempat Tanggal lahir</label>
                                        <input name="ttl" type="text" class="form-control" placeholder="Tempat Tanggal lahir" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label>Alamat</label>
                                        <textarea name="alamat_baru" class="form-control" placeholder="Alamat" REQUIRED></textarea>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label>Status Kawin</label>
                                        <select name="status_kawin" class="form-control">
										<option value="Sudah Menikah"> Sudah Menikah </option>
                                        <option value="Belum Menikah"> Belum Menikah </option>             
                                    </select>    
                                    </div>
                                    </div>
									<div class="form-group">
                                    <div class="form-line">
                                        <label>Tambah Gambar</label>
                                        <input name="foto_penduduk" type="file" class="form-control" placeholder="Tambah Gambar" >
                                    </div>
                                    </div>
                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Simpan</button>
									<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa  fa-arrows-alt"></i> Batal</button>
                                </div>
                                </form>
                            </div>

                          </div>
                        </div>
                        </div>
                        <div class="modal fade" id="cari">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                    
                                </div>

                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/post_cari_penduduk"); ?>" enctype="multipart/form-data" method="post">
                                   <div class="form-group">
								    <div class="form-line">
										<label>Nama / No KTP</label>
                                        <input name="cari" type="text" class="form-control" placeholder="Nama / No KTP" REQUIRED>
                                    </div>
                                    </div>
                                    

                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-search"></i> Cari</button>
                                </div>
                                </form>
                            </div>

                          </div>
                        </div>
                        </div>
     