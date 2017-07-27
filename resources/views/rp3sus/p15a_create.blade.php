@extends('layouts.penyidikan_template')

@section('title', 'Dir.Dik')

@section('stylesheet')

@endsection

@section('maintitle', 'DIREKTORAT PENYIDIKAN')

@section('mainsubtitle', 'Tindak Pidana Khusus')

@section('judulhalaman', 'Surat Perintah Penyerahan Tanggungjawab Tersangka dan Barang Buktinya [p-15a]')

@section('materi')

<div class="box-body">
				<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12">
				<!-- left column -->
				<div class="row">
					<div class="col-lg-6 col-md-6 col-xs-12">				
							<!-- No. Surat -->
						<div class="form-group">
							<label> No. Surat P-15a</label>
							<input type="text" class="form-control" placeholder="PRINT-">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<!-- Tanggal Surat -->
						<div class="form-group">
							<label>Tanggal</label>
							<div class="input-group date">
								<div class="input-group-addon">
									<span class="fa fa-calendar"></span>
								</div>
								<input type="date" class="form-control pull-right" id="datepicker">
							</div>
							<!-- /.input group -->
						</div>
						<!-- /.form group -->
					</div>
					<div class="col-lg-12 col-md-12 col-xs-12">
					<p>
						<label>Berkas Perkara Berdasarkan:</label><br>
						<div class="checkbox">
						  <label>
						    <input type="checkbox" value="" checked="checked">
						    <strong class="text-green">Nota Dinas Direktur Penuntutan&mdash;Berkas dinyatakan lengkap [P-21]</strong>
						  </label>
						</div>
							<li>Sprint Dik No. <span class="label label-success">Print-xx/F.2/Fd.1/dd/mm/yyyy</span> Tgl. xx/mm/yyy</li>
							<li>Sprint Dik No. <span class="label label-success">Print-xx/F.2/Fd.1/dd/mm/yyyy</span> Tgl. xx/mm/yyy</li>
							<li>Penetapan Tersangka. <span class="label label-success">B-xx/F.2/Fd.1/dd/mm/yyyy</span> Tgl. xx/mm/yyy</li>
					</p>
					</div>
						<div class="col-lg-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label>Pasal Disangkakan</label>
								<li>Pasal 1</li>
								<li>Pasal 2</li>
								<li>Pasal 3</li>
								<li>Pasal 4</li>
								<li>Pasal 5</li>
								<li>Pasal 6</li>
						</div>
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
				</div><!-- ./left column -->
				</div>
			<div class="col-lg-6 col-md-6 col-xs-12">
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
						<a href="rp3sus" class="btn btn-danger"> BATAL</a>
						<a href="master_penuntutan" class="btn btn-success"> KIRIM</a>
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