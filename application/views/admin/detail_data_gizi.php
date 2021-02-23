<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DETAIL DATA VITAMIN</h2>
				
            </div>
<div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                          <b>  </b>
                        </div>
                        <body>
							<script src="<?php echo base_url(); ?>assets/highcharts/code/highcharts.js"></script>
							<script src="<?php echo base_url(); ?>assets/highcharts/code/modules/exporting.js"></script>

							<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
							<?php foreach($detail_data_gizi as $dt){ ?> <?php } ?>


									<script type="text/javascript">
							Highcharts.chart('container', {
								chart: {
									type: 'area'
								},
								title: {
									text: '<b><?php echo $dt->nama_balita; ?></b>'
								},
								subtitle: {
									text: 'laporan Data Vitamin'
								},
								xAxis: {
									categories: [<?php foreach($detail_data_gizi as $tt){ ?> '<?php echo tgl_indo($tt->tgl_gizi); ?>', <?php } ?>],
									tickmarkPlacement: 'on',
									title: {
										enabled: false
									}
								},
								yAxis: {
									title: {
										text: 'Data Vitamin'
									},
									labels: {
										formatter: function () {
											return this.value / 1000;
										}
									}
								},
								tooltip: {
									split: true,
									valueSuffix: ''
								},
								plotOptions: {
									area: {
										stacking: 'normal',
										lineColor: '#666666',
										lineWidth: 1,
										marker: {
											lineWidth: 1,
											lineColor: '#666666'
										}
									}
								},
								series: [{
									name: 'Tinggi Badan (CM)',
									data: [<?php foreach($detail_data_gizi as $tb){ ?> <?php echo $tb->tb_gizi; ?>, <?php } ?>]
								}, {
									name: 'Berat Badan (KG)',
									data: [<?php foreach($detail_data_gizi as $bb){ ?> <?php echo $bb->bb_gizi; ?>, <?php } ?>]
								}]
							});
									</script>
								</body>
                    </div>
                </div>
				
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <div class="body">
							<div class="table-responsive">
						
							<div class=" pull-right"><i class="fa fa-check"></i> </div>
							<p>

                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><center>Tanggal<center></th>
                                            <th><center>NIK</center></th>
                                            <th><center>Nama Balita</center></th>
                                            <th><center>Nama ibu</center></th>
                                            <th><center>Vitamin</center></th>
                                            <th><center>Keterangan</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach($detail_data_gizi as $v) { ?>
									     <tr>
                                            <td align="center"><?php echo tgl_indo($v->tgl_gizi); ?></td>
                                            <td align="center"><?php echo $v->nik; ?></td>
                                            <td align="center"><?php echo $v->nama_balita; ?></td>
                                            <td align="center"><?php echo $v->nama_ibu; ?></td>
                                            <td align="center"><?php echo $v->gizi; ?></td>
                                            <td align="center"><?php echo $v->ket_gizi; ?></td>
                                            
                                        </tr>
									<?php } ?>
                                    </tbody>
                                </table>
								
                            </div>

							</div>

                </div><!-- /.tab-content -->
               
              </div> 
                
        </section>
		</div>
