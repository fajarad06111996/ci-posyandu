<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA VITAMIN</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
						<button data-toggle="modal" data-target="#tambah" class="btn btn-success">Tambah Vitamin</button>
							<div class=" pull-right"><i class="fa fa-check"></i> </div>
							<p>

                                <div class="body">
                            <table id="lookup" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama Balita</th>
                                        <th>Vitamin</th>
                                        <th>Berat Badan</th>
                                        <th>Tinggi Badan</th>
                                        <th>Tanggal Vitamin</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php foreach($tampil_gizi as $v) { ?>
                                    <tr>
                                        <td><?php echo $v->nik; ?></td>
                                        <td><?php echo $v->nama_balita; ?></td>
                                        <td><?php echo $v->gizi; ?></td>
                                        <td><?php echo $v->bb_gizi; ?></td>
                                        <td><?php echo $v->tb_gizi; ?></td>
                                        <td><?php echo tgl_indo($v->tgl_gizi); ?></td>
                                        <td>
										<div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url("admin/edit_data_gizi/$v->id_gizi"); ?>" class=" waves-effect waves-block">Edit</a></li>
                                        <li><a href="<?php echo base_url("admin/hapus_data_gizi/$v->id_gizi"); ?>" class=" waves-effect waves-block" onclick="javascript : return confirm('Apakah Anda Yakin Ingin Menghapus ?')">Hapus</a></li>
                                        <li><a href="<?php echo base_url("admin/detail_data_gizi/$v->id_balita"); ?>" class=" waves-effect waves-block">Detail</a></li>
                                        <li><a href="<?php echo base_url("admin/sms_data_gizi/$v->id_gizi"); ?>" class=" waves-effect waves-block">Broadcast</a></li>
                                    </ul>
                                </div>
										</td>
                                    </tr>
								<?php } ?>
                                </tbody>
                            </table>
                        </div>
								
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
								  <h4 class="modal-title" id="largeModalLabel">Form Tambah Balita</h4>
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                   
                                </div>
                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/tambah_gizi"); ?>" enctype="multipart/form-data" method="post">
								<div class="form-group">
                                    <label for="varchar">Pilih Balita</label>
                                     <div class="row">
                                        <div class="col-md-10">
                                        <input type="hidden" class="form-control" name="id_balita" id="id_balita" placeholder="" readonly="" />
										<input type="text" class="form-control"  id="nik" placeholder="NIK" name="nik" readonly="" />
                                          <input type="text" class="form-control"  id="namabalita" placeholder="NAMA BALITA" readonly="" />
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">. . .</button>
                                    </div>
									</div>
								</div>
									<div class="form-group">
								    <div class="form-line">
										<label> Vitamin </label>
                                        <input name="gizi" type="text" class="form-control" placeholder="Vitamin" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Berat Badan (KG)</label>
                                        <input name="bb_gizi" type="number" class="form-control" placeholder="Berat Badan" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Tinggi Badan (CM)</label>
                                        <input name="tb_gizi" type="number" class="form-control" placeholder="Tinggi Badan" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Tanggal Imunisasi </label>
                                        <input name="tgl_gizi" type="date" class="form-control" placeholder="Tanggal Imunisasi " REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Keterangan </label>
                                        <textarea name="ket_gizi" type="text" class="form-control" placeholder="Keterangan Imunisasi"> </textarea>
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
                                <form role="form" action="<?php echo base_url("/admin/"); ?>" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                  <div class="form-line">
                                        <label>Nama / No KTP</label>
                                        <input name="cari" type="text" class="form-control" placeholder="Masukan Nama / NIK" REQUIRED>
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
     
						  <!-- untuk tambah data -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog" style="width:800px">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">Daftar Balita</h4>
										</div>
										<div class="modal-body">
											<table id="idpenduduk" class="table table-bordered table-hover table-striped">
												<thead>
													<tr>
														<th>NIK</th>
														<th>Nama Balita</th>
													</tr>
												</thead>
												 <tbody>
												<?php foreach($lihat_balita as $mp ) { ?>
												 <tr class="pilih" data-idbalita="<?php echo $mp->id_balita; ?>" data-nik="<?php echo $mp->nik; ?>" data-namabalita="<?php echo $mp->nama_balita; ?>">
															<td><?php echo $mp->nik; ?></td>
															<td><?php echo $mp->nama_balita; ?></td>
														</tr>
												<?php } ?>			  
														</tbody>
											</table>  
										</div>
									</div>
								</div>
							</div>