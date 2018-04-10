TLS <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('bower_components/admin-lte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active"><a href="home"><span class="label label-success pull-right">Home</span><i class="fa fa-balance-scale"></i> <span>e-KEJAKSAAN</span></a></li>
        <li class="header"><h4>JAM PENGAWASAN</h4></li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="progress"><i class="fa fa-bar-chart-o"></i> <span>DASHBOARD</span></a></li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><h5>APLIKASI JAMWAS</h5></li>
        <!-- Optionally, you can add icons to the links -->
        <li class=" active treeview">
          <a href="#"><i class="fa fa-commenting"></i> <span>e-LAPDU</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="laporan"><i class="fa fa-bullhorn"></i> Laporan Pengaduan</a></li>
            <li><a href="klarifikasi"><i class="fa fa-comments-o"></i> Klarifikasi</a></li>
            <li><a href="inspeksi"><i class="fa fa-search-plus"></i> Inspeksi Kasus</a></li>
            <li><a href="usulan"><i class="fa fa-balance-scale"></i> Usulan Hukum</a></li>
            <li><a href="putusan"><i class="fa fa-gavel"></i> Putusan Hukum</a></li>
            <li class="treeview"><a href="test"><i class="fa fa-users"></i> <span>SUBYEK HUKUM</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="table"><i class="fa fa-sliders"></i> Terlapor</a></li>
              <li><a href="table"><i class="fa fa-sliders"></i> Klarifikasi</a></li>
              <li><a href="table"><i class="fa fa-sliders"></i> Inspeksi Kasus</a></li>
              <li><a href="table"><i class="fa fa-sliders"></i> Jelang Putusan</a></li>
              <li><a href="table"><i class="fa fa-sliders"></i> Masa Hukuman</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-share"></i> <span>DIALIHKAN</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="disposisi"><i class="fa fa-balance-scale"></i> JAMPIDUM</a></li>
              <li><a href="disposisi"><i class="fa fa-balance-scale"></i> JAMPIDSUS</a></li>
              <li><a href="disposisi"><i class="fa fa-balance-scale"></i> JAMDATUN</a></li>
              <li><a href="disposisi"><i class="fa fa-balance-scale"></i> KEJATI</a></li>
            </ul>
          </li>
        </ul>
      </li>
        <li class="treeview"><a href="#"><i class="fa fa-book"></i> <span>DOKUMENTASI</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
          <ul class="treeview-menu">
            <li  class="treeview"><a href="test"><i class="fa fa-edit"></i> FORMS
              </a>
              <ul class="treeview-menu">
                <li><a href="daterange"><i class="fa fa fa-calendar"></i> Date Range</a></li>
                <li><a href="editor"><i class="fa fa fa-text-width"></i> Document Editor</a></li>
                <li><a href="inputmask"><i class="fa fa fa-pencil"></i> Input Mask</a></li>
                <li><a href="inputaddon"><i class="fa fa fa-pencil-square"></i> Input Add On</a></li>
                <li><a href="select2"><i class="fa fa fa-sort-numeric-asc"></i> Multiple Select</a></li>
                <li><a href="icheck"><i class="fa fa fa-times-circle-o"></i> Radio Button</a></li>
                <li><a href="timepicker"><i class="fa fa fa-clock-o"></i> Time Picker</a></li>
              </ul>
            </li>

            <li  class="treeview"><a href="test"><i class="fa fa-tv"></i> UI Element
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span></a>
              <ul class="treeview-menu">
                <li><a href="button"><i class="fa fa fa-circle-o"></i> Button</a></li>
                <li><a href="uigeneral"><i class="fa fa fa-circle-o"></i> Color & Typo</a></li>
                <li><a href="table"><i class="fa fa fa-circle-o"></i> Data Table</a></li>
                <li><a href="document"><i class="fa fa fa-circle-o"></i> Print Document</a></li>
                <li><a href="progress"><i class="fa fa fa-circle-o"></i> Tab & Progress</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="administrator"><i class="fa fa-gear"></i> <span>ADMINISTRATOR</span></a></li>
      {{-- <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">Link in level 2</a></li>
          <li><a href="#">Link in level 2</a></li>
        </ul>
      </li> --}}
    </ul>


    <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
