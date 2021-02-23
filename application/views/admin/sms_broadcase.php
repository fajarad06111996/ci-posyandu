<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BROADCAST SMS</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                
                            </ul>
                        </div>
                        <div class="body">
						<form action="<?php echo base_url("admin/kirim_sms"); ?>" method="post">
                            <select id="optgroup" class="ms" multiple="multiple" name="id_balita[]">
                                <optgroup label="Pilih Semua">
								<?php foreach($lihat_balita as $v) { ?>
                                    <option value="<?php echo $v->id_balita; ?>"><?php echo $v->telepon; ?> - <?php echo $v->nama_ibu; ?></option>
								<?php } ?>
                                </optgroup>
                            </select><br/>
							<label>Keterangan </label>
							<div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="ket_imunisasi" class="form-control" placeholder="Keterangan Broadcast">
                                    </div>
                                </div>
                        </div>
						<div class="modal-footer">
                                    <button class="btn btn-primary btn-block margin-bottom" type="submit"><i class="fa fa-arrow-right"></i>Broadcast</button>
                         </div>
                         </form>
                    </div>
                </div>
        </section><!-- /.content -->
      </div>