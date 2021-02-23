<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA BALITA</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
						<!-- <button data-toggle="modal" data-target="#tambah" class="btn btn-success">Tambah Balita</button> -->
							<div class=" pull-right"><i class="fa fa-check"></i> </div>
							<p>

                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><center>No<center></th>
                                            <th><center>NIK</center></th>
                                            <th><center>Nama Balita</center></th>
                                            <th><center>Nama Ayah</center></th>
                                            <th><center>Nama Ibu</center></th>
                                            <th><center>Umur</center></th>
                                            <th><center>Tanggal Lahir</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $no=1; foreach($tampil_balita as $v) { 
									$tanggal = new DateTime($v->tanggal_lahir);
											$today = new DateTime('today');
											$m = $today->diff($tanggal)->m;
									?>
									     <tr>
                                            <td align="center"><?php echo $no; ?></td>
                                            <td align="center"><?php echo $v->nik; ?></td>
                                            <td align="center"><?php echo $v->nama_balita; ?></td>
                                            <td align="center"><?php echo $v->nama_ayah; ?></td>
                                            <td align="center"><?php echo $v->nama_ibu; ?></td>
                                            <td align="center"><?php echo $m; ?></td>
                                            <td align="center"><?php echo tgl_indo($v->tanggal_lahir); ?></td>
                                        </tr>
									<?php $no++; } ?>
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
								  <h4 class="modal-title" id="largeModalLabel">Form Tambah Balita</h4>
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                   
                                </div>
                                <!-- modal untuk isi konten -->
                                <div class="modal-body">
                                <form role="form" action="<?php echo base_url("/admin/tambah_balita"); ?>" enctype="multipart/form-data" method="post">
								
								<div class="form-group">
								    <div class="form-line">
										<label> NIK </label>
                                        <input name="nik" type="text" class="form-control" placeholder="nik" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Nama Balita </label>
                                        <input name="nama_balita" type="text" class="form-control" placeholder="Nama Balita" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Nama Ayah </label>
                                        <input name="nama_ayah" type="text" class="form-control" placeholder="Nama Ayah">
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Nama Ibu </label>
                                        <input name="nama_ibu" type="text" class="form-control" placeholder="Nama Ibu" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Tanggal Lahir </label>
                                        <input name="tanggal_lahir" type="date" class="form-control" placeholder="" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Umur (Bulan) </label>
                                        <input name="umur_balita" type="number" class="form-control" placeholder="Umur (Bulan)" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Berat Badan (KG) </label>
                                        <input name="bb_balita" type="number" class="form-control" placeholder="Berat Badan (KG)" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Tinggi Badan (CM) </label>
                                        <input name="tb_balita" type="number" class="form-control" placeholder="Tinggi Badan (CM)" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Telepon / HP </label>
                                        <input name="telepon" type="number" class="form-control" placeholder="Telepon / HP (** Wajib Di Isi **)" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Keterangan </label>
                                        <textarea name="keterangan_balita" type="text" class="form-control" placeholder="Keterangan"> </textarea>
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
     