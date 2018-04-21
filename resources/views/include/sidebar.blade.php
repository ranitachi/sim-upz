<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="{{URL::to('/')}}"><i class="fa fa-dashboard"></i> <span>Beranda</span></a>
          
        </li>
        <li class="">
          <a href="{{URL::to('/')}}"><i class="fa fa-user-secret"></i> <span>Data Muzzaki</span></a>
        </li>
        <li class="">
          <a href="{{URL::to('/')}}"><i class="fa fa-users"></i> <span>Data Mustahik</span></a>
        </li>
        <li class="">
          <a href="{{URL::to('/')}}"><i class="fa fa-th-large"></i> <span>Data UPZ</span></a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Penerimaan</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Pengeluaran</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="akun"><i class="fa fa-circle-o text-aqua"></i> Akun</a></li>
            <li><a href="amilin"><i class="fa fa-circle-o text-aqua"></i> Amilin</a></li>
            <li><a href="muzzaki"><i class="fa fa-circle-o text-aqua"></i> Muzaki</a></li>
            <li><a href="jenis-zakat"><i class="fa fa-circle-o text-aqua"></i> Jenis Zakat</a></li>
            <li><a href="jenis-infak"><i class="fa fa-circle-o text-aqua"></i> Jenis Infak</a></li>
            <li><a href="jenis-mustahik"><i class="fa fa-circle-o text-aqua"></i> Jenis Mustahik</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Penerimaan</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Pengeluaran</a></li>
          </ul>
        </li>
        
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
