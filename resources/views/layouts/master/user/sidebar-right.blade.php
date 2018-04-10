 <aside class="control-sidebar control-sidebar-light">
   <!-- Create the tabs -->
   <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
     <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-tasks"></i></a></li>
     <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-user"></i></a></li>
     {{-- <li><a href="#control-sidebar-settings-tab2" data-toggle="tab"><i class="fa fa-ger"></i></a></li> --}}
   </ul>
   <!-- Tab panes -->
   <div class="tab-content">
     <!-- Home tab content -->
     <div class="tab-pane active" id="control-sidebar-home-tab">
       <h3 class="control-sidebar-heading"> ADMINISTRATOR</h3>



       <!-- /.control-sidebar-menu -->
       {{-- Right Menu --}}
         <ul class="sidebar-menu" data-widget="tree">
          <li class="treeview">
            <a href="#"><i class="fa fa-user-plus"></i> <span>Pengguna</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              {{-- <li><a href="home"><i class="fa fa fa-pie-chart text-grey"></i> Intelijen</a></li> --}}
              <li><a href="home"><i class="fa fa-angle-right"></i> Kelola Pengguna</a></li>
              <li><a href="home"><i class="fa fa-angle-right"></i> Group Pengguna</a></li>
              <li><a href="home"><i class="fa fa-angle-right"></i> Level Akses Tampilan</a></li>
            </ul>
         </li>
           <li class="treeview"><a href="home"><i class="fa fa fa-university"></i> Satuan Kerja
             <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
             </span>
           </a>
           <ul class="treeview-menu">
             {{-- <li><a href="home"><i class="fa fa fa-pie-chart text-grey"></i> Intelijen</a></li> --}}
             <li><a href="home"><i class="fa fa-angle-right"></i> Wilayah</a></li>
             <li><a href="home"><i class="fa fa-angle-right"></i> Jabatan</a></li>
             <li><a href="home"><i class="fa fa-angle-right"></i> Pangkat</a></li>
           </ul>
         </li>                            
           <li class="treeview"><a href="administrator"><i class="fa fa fa-database"></i> Data Penunjang
             <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
             </span>
           </a>
           <ul class="treeview-menu">
             {{-- <li><a href="administrator"><i class="fa fa fa-pie-chart text-grey"></i> Intelijen</a></li> --}}
             <li><a href="administrator"><i class="fa fa-angle-right"></i> Peraturan dan UU</a></li>
             <li><a href="administrator"><i class="fa fa-angle-right"></i> Kategori Pidana</a></li>
             <li><a href="administrator"><i class="fa fa-angle-right"></i> Kategori 2</a></li>
           </ul>
         </li>                            
       </ul>
       
       
             <!-- /.control-sidebar-menu -->

           </div>
           <!-- /.tab-pane -->
           <!-- Stats tab content -->
           <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
           <!-- /.tab-pane -->
           <!-- Settings tab content -->
           <div class="tab-pane" id="control-sidebar-settings-tab">
               <h3 class="control-sidebar-heading">PENGATURAN UMUM</h3><ul class="sidebar-menu" data-widget="tree">
                    <li class="treeview">
                      <a href="#"><i class="fa fa-user"></i> <span>Kelola Akun</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                       <li><a href="#">Link in level 2</a></li>
                       <li><a href="#">Link in level 2</a></li>
                     </ul>
                   </li>
                   <li><a href="pribadi"><i class="fa fa-users"></i> <span>Forum Diskusi</span></a></li>
                   <li class="treeview">
                     <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                       <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                     </a>
                     <ul class="treeview-menu">
                       <li><a href="#">Link in level 2</a></li>
                       <li><a href="#">Link in level 2</a></li>
                     </ul>
                   </li>
                 </ul>

               
         </div>
           <!-- /.tab-pane -->

            {{--  <!-- Stats tab content -->
             <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
             <!-- /.tab-pane -->
             <!-- Settings tab content -->
             <div class="tab-pane" id="control-sidebar-settings-tab2">
                 <h3 class="control-sidebar-heading">Pengaturan</h3>

                   <ul class="sidebar-menu" data-widget="tree">
                    <li class="treeview">
                      <a href="#"><i class="fa fa-user"></i> <span>Umum</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                       <li><a href="#">Link in level 2</a></li>
                       <li><a href="#">Link in level 2</a></li>
                     </ul>
                   </li>
                 </ul>
           </div>
             <!-- /.tab-pane --> --}}
         </div>
       </aside>