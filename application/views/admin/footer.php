	
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/node-waves/waves.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/jquery-countto/jquery.countTo.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/morrisjs/morris.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/chartjs/Chart.bundle.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/js/admin.js"></script>
    <script src="<?php echo base_url ()?>/assets/bsb/js/demo.js"></script>
	<!-- Ckeditor -->
    <script src="<?php echo base_url ()?>/assets/plugins/ckeditor/ckeditor.js"></script>
	<!-- TinyMCE -->
    <script src="<?php echo base_url ()?>/assets/plugins/tinymce/tinymce.js"></script>
    <script src="<?php echo base_url ()?>/assets/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url ()?>/assets/datatables/dataTables.bootstrap.js"></script>
	<!-- Multi Select Plugin Js -->
    <script src="<?php echo base_url ()?>/assets/plugins/multi-select/js/jquery.multi-select.js"></script>
	<!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url ()?>/assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url ()?>/assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url ()?>/assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url ()?>/assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url ()?>/assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url ()?>/assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url ()?>/assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url ()?>/assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url ()?>/assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <script type="text/javascript">

//            jika dipilih, idpenduduk / nama penduduk akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("id_balita").value = $(this).attr('data-idbalita');
                document.getElementById("nik").value = $(this).attr('data-nik');
                document.getElementById("namabalita").value = $(this).attr('data-namabalita');
                $('#myModal').modal('hide');
            });

//            tabel lookup 
            $(function () {
                $("#lookup").dataTable();
            });
             $(function () {
                $("#idpenduduk").dataTable();
            });

            

        </script>
		<script type="text/javascript">

//            jika dipilih, idpenduduk / nama penduduk akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilihx', function (e) {
                document.getElementById("id_balitax").value = $(this).attr('data-idbalitax');
                document.getElementById("nikx").value = $(this).attr('data-nikx');
                document.getElementById("namabalitax").value = $(this).attr('data-namabalitax');
                $('#myModalx').modal('hide');
            });

//            tabel lookup 
            $(function () {
                $("#lookupx").dataTable();
            });
             $(function () {
                $("#idpenduduk").dataTable();
            });

            

        </script>
		<script type="text/javascript">

//            jika dipilih, idpenduduk / nama penduduk akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilihhamil', function (e) {
                document.getElementById("id_ibuhamil").value = $(this).attr('data-idbibuhamil');
                document.getElementById("nikibuhamil").value = $(this).attr('data-nikhamil');
                document.getElementById("namaibu").value = $(this).attr('data-namaibu');
                $('#myModalhamil').modal('hide');
            });

//            tabel lookup 
            $(function () {
                $("#lookuphamil").dataTable();
            });
             $(function () {
                $("#idpenduduk").dataTable();
            });

            

        </script>
		
    <script type="text/javascript">
    $(document).ready(function() {
        //$('#optgroup').multiSelect();
        $('#optgroup').multiSelect({ selectableOptgroup: true });
    });
</script>
</body>
</html>