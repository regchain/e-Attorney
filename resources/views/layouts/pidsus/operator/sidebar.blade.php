 <!-- Left side column. contains the logo and sidebar -->
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
        <li class="treeview">
          <a href="home"><i class="fa fa-dashboard"></i> <span>LAPORAN EKSEKUTIF</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu" style="display: block;">
                            <li><a href="progress"><i class="fa fa fa-pie-chart text-blue"></i> Pembinaan</a></li>
                            <li><a href="progress"><i class="fa fa fa-pie-chart text-grey"></i> Intelijen</a></li>
                            <li><a href="progress"><i class="fa fa fa-pie-chart text-green"></i> Tindak Pidana Umum</a></li>
                            <li><a href="progress"><i class="fa fa fa-pie-chart text-orange"></i> Tindak Pidana Khusus</a></li>
                            <li><a href="progress"><i class="fa fa fa-pie-chart text-purple"></i> Perdata & T.U.N</a></li>
                            <li><a href="lapdu"><i class="fa fa fa-pie-chart text-red"></i> <strong>Pengawasan</strong></a></li>
                          </ul>
        </li>
      <li class="active treeview">
                <a href="#">
                  <i class="fa fa-sitemap"></i> <span>APLIKASI BIDANG TEKNIS</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li  class="treeview"><a href="home"><i class="fa fa-mobile"></i> el-BIN</a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('rp1.index') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RP-1</a></li>
                      <li><a href="{{ route('rp2.index') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RP-2</a></li>
                      <li><a href="{{ route('rp3mum.index') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RP-3 MUM</a></li>
                      <li><a href="{{ route('rp3sus.index') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RP-3 SUS</a></li>
                      <li><a href="{{ url('/obyek') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RB-1</a></li>
                      <li><a href="{{ url('/subyek') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RT</a></li>
                    </ul>
                  </li>
                  <li  class="treeview"><a href="home"><i class="fa fa-mobile"></i> el-PIDUM</a>
                                      <ul class="treeview-menu">
                                        <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 1</a></li>
                                        <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 2</a></li>
                                        <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 3</a></li>
                                        <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 4</a></li>
                                        <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 5</a></li>
                                      </ul>
                                    </li>
                  <li  class="treeview"><a href="home"><i class="fa fa-mobile"></i> el-PIDSUS</a>
                                      <ul class="treeview-menu">
                                         <li  class="treeview"><a href="home"><i class="fa fa-mobile"></i> el-BIN</a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('rp1.index') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RP-1</a></li>
                      <li><a href="{{ route('rp2.index') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RP-2</a></li>
                      <li><a href="{{ route('rp3mum.index') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RP-3 MUM</a></li>
                      <li><a href="{{ route('rp3sus.index') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RP-3 SUS</a></li>
                      <li><a href="{{ url('/obyek') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RB-1</a></li>
                      <li><a href="{{ url('/subyek') }}" class="btn btn-default"><i class="fa fa-list-ol"></i> RT</a></li>
                    </ul>
                  </li>
                                      </ul>
                                    </li>
                  <li  class="treeview"><a href="home"><i class="fa fa-mobile"></i> el-DATUN</a>
                                      <ul class="treeview-menu">
                                        <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 1</a></li>
                                        <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 2</a></li>
                                        <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 3</a></li>
                                        <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 4</a></li>
                                        <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 5</a></li>
                                      </ul>
                                    </li>
                  <li  class="treeview"><a href="home"><span class="label label-danger pull-right">NEW!</span><i class="fa fa-mobile"></i> el-WAS</a>
                                      <ul class="treeview-menu">
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
                                                    <li class="treeview"><a href="blank"><i class="fa fa-users"></i> <span>SUBYEK HUKUM</span>
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
                                        {{-- <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 2</a></li>
                                        <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 3</a></li>
                                        <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 4</a></li>
                                        <li><a href="home"><i class="fa fa fa-mobile"></i> APPS 5</a></li> --}}
                                      </ul>
                                    </li>
                </ul>
              </li>
              
        
      
        {{-- <li class="header">EXECUTIVE INFORMATION SYSTEM</li> --}}
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview"><a href="#"><i class="fa fa-book"></i> <span>DOKUMENTASI</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
          <ul class="treeview-menu">
            <li  class="treeview"><a href="home"><i class="fa fa-edit"></i> FORMS
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

            <li  class="treeview"><a href="home"><i class="fa fa-tv"></i> UI Element
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span></a>
              <ul class="treeview-menu">
                <li><a href="button"><i class="fa fa fa-circle-o"></i> Button</a></li>
                <li><a href="uigeneral"><i class="fa fa fa-circle-o"></i> Color & Typo</a></li>
                <li><a href="table"><i class="fa fa fa-circle-o"></i> Data Table</a></li>
                <li><a href="document"><i class="fa fa fa-circle-o"></i> Print Document</a></li>
                <li><a href="progress"><i class="fa fa fa-circle-o"></i> Tab & Progress</a></li>
                {{-- <li><a href="icheck"><i class="fa fa fa-times-circle-o"></i> Radio Button</a></li> --}}
                {{-- <li><a href="timepicker"><i class="fa fa fa-circle-o"></i> Time Picker</a></li> --}}
              </ul>
            </li>
          </ul>
        </li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
