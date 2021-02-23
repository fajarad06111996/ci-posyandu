<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MASTER IMUNISASI</h2>
				
            </div>
<div class="row clearfix">
                
			  
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <button data-toggle="modal" data-target="#tambah" class="btn btn-primary ">Tambah Imunisasi</button>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table id="lookup" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                   <tr>
                                            <th><center>No</center></th>
                                            <th><center>Imunisasi</center></th>
                                            <th><center>Opsi</center></th>
                                        </tr>
                                </thead>
                                <tbody>
								<?php $no=1; foreach($tampil_master_imunisasi as $v) { ?>
                                    <tr>
                                            <td align="center"><?php echo $no; ?></td>
                                            <td align="center"><?php echo $v->imunisasi; ?></td>
                                            <td align="center"><center><a href="<?php echo base_url("admin/"); ?>"><button class="btn btn-primary">Edit</button></a> 
											<a href="<?php echo base_url("admin/"); ?>"><button onclick="javascript : return confirm('Apakah Anda Yakin Ingin Menghapus ?')" class="btn btn-danger">Hapus</button></a>
											</center></td>
                                        </tr>
										<?php $no++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
			  
        </section><!-- /.content -->
      </div>
	  <div class="modal fade" id="tambah">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- modal header -->
                               
								  <div class="modal-header">
								  <h4 class="modal-title" id="largeModalLabel">Form Tambah Data Pejuang</h4>
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                   
                                </div>
                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/tambah_master_imunisasi"); ?>" enctype="multipart/form-data" method="post">
								<div class="form-group">
								    <div class="form-line">
										<label>Imunisasi</label>
                                        <input name="imunisasi" type="text" class="form-control" placeholder="Imunisasi" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label>Keterangan</label>
                                        <input name="keterangan_imunisasi" type="text" class="form-control" placeholder="Keterangan">
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
                                        <label></label>
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
											<h4 class="modal-title" id="myModalLabel">Daftar Penduduk</h4>
										</div>
										<div class="modal-body">
											<table id="lookup" class="table table-bordered table-hover table-striped">
												<thead>
													<tr>
														<th>NIK</th>
														<th>Nama</th>
													</tr>
												</thead>
												 <tbody>
												
												 <tr class="pilih" data-idpenduduk="" data-nikpenduduk="123" data-namapenduduk="wixi">
															<td>123</td>
															<td>wixi</td>
														</tr>
																  
														</tbody>
											</table>  
										</div>
									</div>
								</div>
							</div>