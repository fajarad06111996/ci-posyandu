<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA IBU HAMIL</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
						<button data-toggle="modal" data-target="#tambah" class="btn btn-success">Tambah ibu Hamil</button>
							<div class=" pull-right"><i class="fa fa-check"></i> </div>
							<p>

                                <div class="body">
                            <table id="lookup" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama Ibu</th>
                                        <th>Kegiatan</th>
                                        <th>Tanggal </th>
                                        <th>Umur Kehamilan (Bulan)</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php foreach($tampil_ibuhamil as $v) { ?>
                                    <tr>
                                        <td><?php echo $v->nik; ?></td>
                                        <td><?php echo $v->nama_ibu; ?></td>
                                        <td><?php echo $v->kegiatan; ?></td>
                                        <td><?php echo tgl_indo($v->tgl_kegiatan); ?></td>
                                        <td><?php echo $v->umur_kehamilan; ?></td>
                                        <td>
										<div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url("admin/edit_data_ibuhamil/$v->id_ibuhamil"); ?>" class=" waves-effect waves-block">Edit</a></li>
                                        <li><a href="<?php echo base_url("admin/hapus_data_ibuhamil/$v->id_ibuhamil"); ?>" class=" waves-effect waves-block">Hapus</a></li>
                                        <li><a href="<?php echo base_url("admin/"); ?>" class=" waves-effect waves-block">Detail</a></li>
                                        <li><a href="<?php echo base_url("admin/"); ?>" class=" waves-effect waves-block">Broadcast</a></li>
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
								  <h4 class="modal-title" id="largeModalLabel">Form Tambah Ibu Hamil</h4>
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                   
                                </div>
                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/tambah_ibuhamil"); ?>" enctype="multipart/form-data" method="post">
								<div class="form-group">
                                    <label for="varchar">Pilih Ibu Hamil</label>
                                     <div class="row">
                                        <div class="col-md-10">
                                        <input type="hidden" class="form-control" name="id_master_ibuhamil" id="id_ibuhamil" placeholder="" readonly="" />
										<input type="text" class="form-control"  id="nikibuhamil" placeholder="NIk" name="nik" readonly="" />
                                          <input type="text" class="form-control"  id="namaibu" placeholder="Nama Ibu" name="nama_ibu" readonly="" />
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModalhamil">. . .</button>
                                    </div>
									</div>
								</div>
									<div class="form-group">
								    <div class="form-line">
										<label> Kegiatan </label>
                                        <input name="kegiatan" type="text" class="form-control" placeholder="Kegiatan" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Umur Kehamilan (Bulan)</label>
                                        <input name="umur_kehamilan" type="number" class="form-control" placeholder="Umur Kehamilan" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Tanggal Imunisasi </label>
                                        <input name="tgl_kegiatan" type="date" class="form-control" placeholder="Tanggal Imunisasi" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Keterangan </label>
                                        <textarea name="keterangan" type="text" class="form-control" placeholder="Keterangan"> </textarea>
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
							<div class="modal fade" id="myModalhamil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog" style="width:800px">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">Daftar Balita</h4>
										</div>
										<div class="modal-body">
											<table id="lookuphamil" class="table table-bordered table-hover table-striped">
												<thead>
													<tr>
														<th>NIK</th>
														<th>Nama Ibu</th>
													</tr>
												</thead>
												 <tbody>
												<?php foreach($lihat_ibuhamil as $mp ) { ?>
												 <tr class="pilihhamil" data-idbibuhamil="<?php echo $mp->id_master_ibuhamil; ?>" data-nikhamil="<?php echo $mp->nik; ?>" data-namaibu="<?php echo $mp->nama_ibu; ?>">
															<td><?php echo $mp->nik; ?></td>
															<td><?php echo $mp->nama_ibu; ?></td>
														</tr>
												<?php } ?>			  
														</tbody>
											</table>  
										</div>
									</div>
								</div>
							</div>