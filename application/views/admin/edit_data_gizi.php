<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT DATA GIZI</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                         <a href="<?php echo base_url("admin/data_gizi"); ?>" class="btn btn-danger" > Kembali</a>
                        </div>
                        <div class="body">
						<?php foreach($edit_data_gizi as $v){ ?>
                            <form role="form" action="<?php echo base_url("/admin/simpan_gizi/$v->id_gizi"); ?>" enctype="multipart/form-data" method="post">
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
										<label> Vitamin </label>
                                        <input name="gizi" type="text" class="form-control" value="<?php echo $v->gizi; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Berat Badan (KG)</label>
                                        <input name="bb_gizi" type="number" class="form-control" value="<?php echo $v->bb_gizi; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Tinggi Badan (CM)</label>
                                        <input name="tb_gizi" type="number" class="form-control" value="<?php echo $v->tb_gizi; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Tanggal Imunisasi </label>
                                        <input name="tgl_gizi" type="date" class="form-control" value="<?php echo $v->tgl_gizi; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Keterangan </label>
                                        <textarea name="ket_gizi" type="text" class="form-control"><?php echo $v->ket_gizi; ?> </textarea>
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