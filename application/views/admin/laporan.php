<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>LAPORAN POSYANDU</h2>
				
            </div>
<div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                          <b> Laporan Data Imunisasi </b>
                        </div>
                        <div class="body">
                          <form role="form" action="<?php echo base_url("admin/laporan_data_imunisasi"); ?>" enctype="multipart/form-data" method="post" target="_blank">
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
                                  <!--  <div class="col-xs-6">
                                    <div class="form-group">
								    <div class="form-line">
										<label>Dari Tanggal</label>
                                        <input name="tgl_dari" type="date" class="form-control" placeholder="" REQUIRED>
                                    </div>
                                    </div>
                                    </div>
									  
									<div class="col-xs-6">
                                    <div class="form-group">
								    <div class="form-line">
										<label>Sampai Tanggal</label>
                                        <input name="tgl_sampai" type="date" class="form-control" placeholder="" REQUIRED>
                                    </div>
                                    </div>
                                    </div> -->
                                    
                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-print"></i> Cetak</button>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
                
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                          <b> Laporan Data Vitamin </b>
                        </div>
                        <div class="body">
                          <form role="form" action="<?php echo base_url("admin/laporan_data_gizi"); ?>" enctype="multipart/form-data" method="post" target="_blank">
                               <div class="form-group">
                                    <label for="varchar">Pilih Balita</label>
                                     <div class="row">
                                        <div class="col-md-10">
                                        <input type="hidden" class="form-control" name="id_balita" id="id_balitax" placeholder="" readonly="" />
										<input type="text" class="form-control"  id="nikx" placeholder="NIK" name="nik" readonly="" />
                                          <input type="text" class="form-control"  id="namabalitax" placeholder="NAMA BALITA" readonly="" />
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModalx">. . .</button>
                                    </div>
									</div>
								</div>
                                   <!--  <div class="col-xs-6">
                                    <div class="form-group">
								    <div class="form-line">
										<label>Dari Tanggal</label>
                                        <input name="tgl_dari" type="date" class="form-control" placeholder="" REQUIRED>
                                    </div>
                                    </div>
                                    </div>
									  
									<div class="col-xs-6">
                                    <div class="form-group">
								    <div class="form-line">
										<label>Sampai Tanggal</label>
                                        <input name="tgl_sampai" type="date" class="form-control" placeholder="" REQUIRED>
                                    </div>
                                    </div>
                                    </div> -->
                                    
                                <!-- modal untuk footer -->
                                <div class="modal-footer">
                                    <button class="btn btn-info" type="submit"><i class="fa fa-print"></i> Cetak</button>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
        </section>
		</div><!-- /.content -->
		
		<!-- untuk tambah data -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog" style="width:800px">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">Daftar Balita</h4>
										</div>
										<div class="modal-body">
											<table id="lookup" class="table table-bordered table-hover table-striped">
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
							
							<div class="modal fade" id="myModalx" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog" style="width:800px">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">Daftar Balita</h4>
										</div>
										<div class="modal-body">
											<table id="lookupx" class="table table-bordered table-hover table-striped">
												<thead>
													<tr>
														<th>NIK</th>
														<th>Nama Balita</th>
													</tr>
												</thead>
												 <tbody>
												<?php foreach($lihat_balita as $mp ) { ?>
												 <tr class="pilihx" data-idbalitax="<?php echo $mp->id_balita; ?>" data-nikx="<?php echo $mp->nik; ?>" data-namabalitax="<?php echo $mp->nama_balita; ?>">
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
