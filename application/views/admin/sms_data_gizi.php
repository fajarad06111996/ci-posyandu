<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BROADCAST DATA GIZI</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                         <a href="<?php echo base_url("admin/data_gizi"); ?>" class="btn btn-danger" > Kembali</a>
                        </div>
                        <div class="body">
						<?php foreach($sms_data_gizi as $v){ ?>
                            <form role="form" action="<?php echo base_url("/admin/kirim_sms_gizi"); ?>" enctype="multipart/form-data" method="post">
                               <div class="form-group">
								    <div class="form-line">
										<label> NIK </label>
                                        <input name="nik" type="text" class="form-control" value="<?php echo $v->nik; ?>" readonly>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Nama Balita </label>
                                        <input name="nama_balita" type="text" class="form-control" value="<?php echo $v->nama_balita; ?>" readonly>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Telepon / HP </label>
                                        <input name="telepon" type="text" class="form-control" value="<?php echo $v->telepon; ?>" readonly>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Gizi </label>
                                        <input name="gizi" type="text" class="form-control" placeholder="Gizi" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Keterangan </label>
                                        <textarea name="ket_gizi" type="text" class="form-control">  </textarea>
                                    </div>
                                    </div>
						<?php } ?>
                                <button class="btn btn-info" type="submit"><i class="fa fa-plane"></i> Kirim SMS</button>
                            </form>
                        </div>
                    </div>
                </div>
        </section><!-- /.content -->
      </div>