<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT INFORMASI</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                         <a href="<?php echo base_url("admin/data_informasi"); ?>" class="btn btn-danger" > Kembali</a>
                        </div>
                        <div class="body">
						<?php foreach($edit_informasi as $v){ ?>
                            <form role="form" action="<?php echo base_url("/admin/simpan_informasi/$v->id_informasi"); ?>" enctype="multipart/form-data" method="post">
                               <div class="form-group">
								    <div class="form-line">
										<label> Judul Informasi </label>
                                        <input name="judul_informasi" type="text" class="form-control" value="<?php echo $v->judul_informasi; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Tanggal Informasi</label>
                                        <input name="tgl_informasi" type="date" class="form-control" value="<?php echo $v->tgl_informasi; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Keterangan </label>
                                        <div class="body">
											<textarea class="ckeditor" name="isi">
												<?php echo $v->isi; ?>
											</textarea>
											   <script type="text/javascript">
											  CKEDITOR.replace( 'isi' );
											  CKEDITOR.add            
										   </script>
										</div>
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