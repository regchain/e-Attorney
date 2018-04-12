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
        <li><a href="#"><i class="fa fa-cogs"></i> <span>PANEL KONTROL</span></a></li>
        <li>
          <ul class="treeview-menu" style="display: block;">
            <li class="treeview"><a href="administrator"><i class="fa fa fa-user"></i> PENGGUNA
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              {{-- <li><a href="administrator"><i class="fa fa fa-pie-chart text-grey"></i> Intelijen</a></li> --}}
              <li><a href="administrator"><i class="fa fa-angle-right"></i> Kelola Pengguna</a></li>
              <li><a href="administrator"><i class="fa fa-angle-right"></i> Group Pengguna</a></li>
              <li><a href="administrator"><i class="fa fa-angle-right"></i> Level Akses Tampilan</a></li>
            </ul>
          </li>                            
        </ul>
      </li>
        <li>
          <ul class="treeview-menu" style="display: block;">
            <li class="treeview"><a href="administrator"><i class="fa fa fa-university"></i> SATUAN KERJA
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              {{-- <li><a href="administrator"><i class="fa fa fa-pie-chart text-grey"></i> Intelijen</a></li> --}}
              <li><a href="administrator"><i class="fa fa-angle-right"></i> Wilayah</a></li>
              <li><a href="administrator"><i class="fa fa-angle-right"></i> Jabatan</a></li>
              <li><a href="administrator"><i class="fa fa-angle-right"></i> Pangkat</a></li>
            </ul>
          </li>                            
        </ul>
      </li>
        <li>
          <ul class="treeview-menu" style="display: block;">
            <li class="treeview"><a href="administrator"><i class="fa fa fa-database"></i> DATA PENUNJANG
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              {{-- <li><a href="administrator"><i class="fa fa fa-pie-chart text-grey"></i> Intelijen</a></li> --}}
              <li><a href="administrator"><i class="fa fa-angle-right"></i> Peraturan dan UU</a></li>
              <li><a href="administrator"><i class="fa fa-angle-right"></i> Kategori 1</a></li>
              <li><a href="administrator"><i class="fa fa-angle-right"></i> Kategori 2</a></li>
            </ul>
          </li>                            
        </ul>
      </li>
      <li><a href="home"><i class="fa fa-sign-out pull-right"></i><span>SELESAI</span>  </a></li>
    </ul>
     
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
