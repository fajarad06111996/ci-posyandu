<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT DATA IBU HAMIL</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                         <a href="<?php echo base_url("admin/data_ibuhamil"); ?>" class="btn btn-danger" > Kembali</a>
                        </div>
                        <div class="body">
						<?php foreach($edit_data_ibuhamil as $v){ ?>
                            <form role="form" action="<?php echo base_url("/admin/simpan_ibuhamili/$v->id_ibuhamil"); ?>" enctype="multipart/form-data" method="post">
                               <div class="form-group">
								    <div class="form-line">
										<label> NIK </label>
                                        <input name="nik" type="text" class="form-control" value="<?php echo $v->nik; ?>" readonly>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Nama Ibu </label>
                                        <input name="nama_ibu" type="text" class="form-control" value="<?php echo $v->nama_ibu; ?>" readonly>
                                    </div>
                                    </div>
							   <div class="form-group">
								    <div class="form-line">
										<label> Kegiatan </label>
                                        <input name="kegiatan" type="text" class="form-control" value="<?php echo $v->kegiatan; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Umur Kehamilan (Bulan)</label>
                                        <input name="umur_kehamilan" type="number" class="form-control" value="<?php echo $v->umur_kehamilan; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Tanggal Kegiatan </label>
                                        <input name="tgl_kegiatan" type="date" class="form-control" value="<?php echo $v->tgl_kegiatan; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Keterangan </label>
                                        <textarea name="keterangan" type="text" class="form-control" value="<?php echo $v->keterangan; ?>"> </textarea>
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