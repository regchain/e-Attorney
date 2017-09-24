
   <!-- Small boxes (Stat box) -->
   <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $dashboard['kasus_rp2'] }}<sup style="font-size: 15px"> kasus</sup></h3>
          <p>Penyelidikan</p>
        </div>
        <div class="icon">
          <i class="fa fa-eye"></i>
        </div>
        <a href="{{ route('rp2.index') }}" class="small-box-footer">Lihat Detil <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $dashboard['kasus_rp3mum'] }}<sup style="font-size: 15px"> kasus</sup></h3>
          <p>Penyidikan Umum</p>
        </div>
        <div class="icon">
          <i class="fa fa-gavel"></i>
        </div>
        <a href="{{ route('rp3mum.index') }}" class="small-box-footer">Lihat Detil <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $dashboard['kasus_rp3sus'] }}<sup style="font-size: 15px"> berkas perkara</sup></h3>
          <p>Penyidikan Khusus</p>
        </div>
        <div class="icon">
          <i class="fa fa-balance-scale"></i>
        </div>
        <a href="{{ route('rp3sus.index') }}" class="small-box-footer">Lihat Detil <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $dashboard["tahanan"] }}<sup style="font-size: 15px"> orang</sup></h3>
          <p>Tahanan</p>
        </div>
        <div class="icon">
          <i class="fa fa-odnoklassniki"></i>
        </div>
        <a href="{{ url('/subyek') }}" class="small-box-footer">Lihat Detil <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
