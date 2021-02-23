<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>EDIT DATA IMUNISASI</h2>
				
            </div>
<div class="row clearfix">
                <!-- Task Info -->

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                         <a href="<?php echo base_url("admin/data_imunisasi"); ?>" class="btn btn-danger" > Kembali</a>
                        </div>
                        <div class="body">
						<?php foreach($edit_data_imunisasi as $v){ ?>
                            <form role="form" action="<?php echo base_url("/admin/simpan_imunisasi/$v->id_imunisasi"); ?>" enctype="multipart/form-data" method="post">
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
										<label>Imunisasi</label>
                                        <select name="id_master_imunisasi" class="form-control" REQUIRED>
										<option value="<?php echo $v->id_master_imunisasi; ?>"> <?php echo $v->imunisasi; ?> </option>
										<?php foreach($lihat_imunisasi as $li) { ?>
										<option value="<?php echo $li->id_master_imunisasi; ?>"> <?php echo $li->imunisasi; ?> </option>
										<?php } ?>               
                                    </select>    
                                    </div>
                                    </div>
									<!-- <div class="form-group">
								    <div class="form-line">
										<label> Vaksin </label>
                                        <input name="vaksin" type="text" class="form-control" value="<?php //echo $v->vaksin; ?>" REQUIRED>
                                    </div>
                                    </div> -->
									<div class="form-group">
								    <div class="form-line">
										<label> Berat Badan (KG)</label>
                                        <input name="bb_imunisasi" type="number" class="form-control" value="<?php echo $v->bb_imunisasi; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Tinggi Badan (CM)</label>
                                        <input name="tb_imunisasi" type="number" class="form-control" value="<?php echo $v->tb_imunisasi; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Tanggal Imunisasi </label>
                                        <input name="tgl_imunisasi" type="date" class="form-control" value="<?php echo $v->tgl_imunisasi; ?>" REQUIRED>
                                    </div>
                                    </div>
									<div class="form-group">
								    <div class="form-line">
										<label> Keterangan </label>
                                        <textarea name="ket_imunisasi" type="text" class="form-control"> <?php echo $v->ket_imunisasi; ?> </textarea>
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