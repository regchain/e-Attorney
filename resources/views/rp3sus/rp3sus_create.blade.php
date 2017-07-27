@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')
<!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="css/skins/_all-skins.min.css">


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Register Perkara Penyidikan Khusus')

@section('materi')
<div class="box-body">
				<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12">
				<!-- left column -->
				<div class="row">
					<div class="col-lg-6 col-md-6 col-xs-12">
						<label>Status</label>
						<div class="input-group">
							<div class="input-group-btn"> 
								<button type="button" class="btn btn-default" aria-label="stop" title="DIHENTIKAN"><span class="glyphicon glyphicon-minus-sign"></span> </button>
								<button type="button" class="btn btn-default" aria-label="transfer" title="DIALIHKAN"><span class="glyphicon glyphicon-transfer"></span></button> </div> 
								<input class="form-control" aria-label="Text input with multiple buttons" placeholder="Keterangan Status...">
							</div>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">				
							<!-- No. Surat -->
						<div class="form-group">
							<label> No. Surat</label>
							<input type="text" class="form-control" placeholder="PRINT-">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label>Pasal Disangkakan</label>
							<select class="form-control" style="width: 250px;">
								<option selected="selected">Pasal...</option>
								<option>Pasal 1</option>
								<option>Pasal 2</option>
								<option>Pasal 3</option>
								<option>Pasal 4</option>
								<option>Pasal 5</option>
								<option>Pasal 6</option>
							</select>
						</div>
					</div>
						<div class="col-lg-6 col-md-6 col-xs-12">
						<!-- Tanggal Surat -->
						<div class="form-group">
							<label>Tanggal</label>
							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="date" class="form-control pull-right" id="datepicker">
							</div>
							<!-- /.input group -->
						</div>
						<!-- /.form group -->
							</div>							
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Judul Kasus : Brunch 3 wolf moon tempor, sunt aliqua put a bird on it</h3>
					</div>
					<div class="panel-body">
						<strong>Kasus Posisis: </strong> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</div>
				</div>
				<div class="list-group">
					<a href="#" class="list-group-item">
						<strong>PEMULIHAN ASET</strong>
					</a>
					<a href="#" class="list-group-item">Nilai Anggaran <div class="pull-right">
						Rp. xxx.xxx.xxx.xxx	
					</div></a>
					<a href="#" class="list-group-item">Kerugian Negara<div class="pull-right">
						Rp. xxx.xxx.xxx.xxx	
					</div></a>
					<a href="#" class="list-group-item">Pemulihan Aset<div class="pull-right">
						Rp. xxx.xxx.xxx.xxx	
					</div></a>
					<!-- Widget: user widget style 1 -->
					<div class="box box-widget widget-user-2 bg-gray">
						<!-- Add the bg color to the header using any of the bg-* classes -->
						<div class="widget-user-header">
							<div class="widget-user-image">
								<img class="img-circle" src="dist/img/subyek/robert.jpg" alt="User Avatar">
							</div>
							<!-- /.widget-user-image -->
							<h3 class="widget-user-username">[nama_terlapor]</h3>
							<h5 class="widget-user-desc">DITAHAN</h5>
						</div>
						<div class="box-footer no-padding">
							<ul class="nav nav-stacked">
								<li><a href="#">Surat Penetapan Tersangka <strong class="pull-right">B-xxx/xx/mm/yyyy</strong></a></li>
								<li><a href="#">Institusi / Lembaga <span class="pull-right">Pem.Prov Lampung</span></a></li>
								<li><a href="#">Jabatan Resmi <span class="pull-right ">Gubernur</span></a></li>
								<li><a href="#">Jabatan Lain <span class="pull-right">Panitia Lelang</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /.widget-user -->
				</div><!-- ./left column -->
				</div>
			<div class="col-lg-6 col-md-6 col-xs-12">
					

				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user-2 bg-gray">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header">
						<div class="widget-user-image">
							<img class="img-circle" src="dist/img/subyek/nancy.jpg" alt="User Avatar">
						</div>
						<!-- /.widget-user-image -->
						<h3 class="widget-user-username">[nama_terlapor]</h3>
						<h5 class="widget-user-desc">DITAHAN</h5>
					</div>
					<div class="box-footer no-padding">
						<ul class="nav nav-stacked">
							<li><a href="#">Surat Penetapan Tersangka <strong class="pull-right">B-xxx/xx/mm/yyyy</strong></a></li>
							<li><a href="#">Institusi / Lembaga <span class="pull-right">Pem.Prov Lampung</span></a></li>
							<li><a href="#">Jabatan Resmi <span class="pull-right ">Gubernur</span></a></li>
							<li><a href="#">Jabatan Lain <span class="pull-right">Panitia Lelang</span></a></li>
						</ul>
					</div>
				</div>
				<!-- /.widget-user -->
				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user-2 bg-gray">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header">
						<div class="widget-user-image">
							<img class="img-circle" src="dist/img/subyek/avatar5.png" alt="User Avatar">
						</div>
						<!-- /.widget-user-image -->
						<h3 class="widget-user-username">[nama_terlapor]</h3>
						<h5 class="widget-user-desc">DITAHAN</h5>
					</div>
					<div class="box-footer no-padding">
						<ul class="nav nav-stacked">
							<li><a href="#">Surat Penetapan Tersangka <strong class="pull-right">B-xxx/xx/mm/yyyy</strong></a></li>
							<li><a href="#">Institusi / Lembaga <span class="pull-right">Pem.Prov Lampung</span></a></li>
							<li><a href="#">Jabatan Resmi <span class="pull-right ">Gubernur</span></a></li>
							<li><a href="#">Jabatan Lain <span class="pull-right">Panitia Lelang</span></a></li>
						</ul>
					</div>
				</div>
				<!-- /.widget-user -->
					<div class="box-tools pull-right">
						<a href="rp3mum" class="btn btn-danger"> BATAL</a>
						<a href="rp3sus" class="btn btn-success"> KIRIM</a>
					</div>
				</div>
				</div><!-- ./row -->
</div>

		@stop



@section('script')

	<!-- Form Kasus Posisi -->
	<script src='{{ asset('js/kasus_posisi.js') }}'></script>


	<!-- jQuery 2.2.3 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
         <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
      $(function () {
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace('editor1');
  //bootstrap WYSIHTML5 - text editor
  $(".textarea").wysihtml5();
});
</script>

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- Select2 -->
        <script src="plugins/select2/select2.full.min.js"></script>
        <!-- InputMask -->
        <script src="plugins/input-mask/jquery.inputmask.js"></script>
        <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
        <!-- date-range-picker -->
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap datepicker -->
        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
        <!-- bootstrap time picker -->
        <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- iCheck 1.0.1 -->
        <script src="plugins/iCheck/icheck.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="js/demo.js"></script>
        <!-- Page script -->
        <script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
          $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate: moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>


<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=j1yaxq035o6154hm6fbshpotvu1o89w9x5kjpiqt50a7n5j9"></script>
<script>
	tinymce.init({
		plugins: 'placeholder'
	});
</script>

@endsection
