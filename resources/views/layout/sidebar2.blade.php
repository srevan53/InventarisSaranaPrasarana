<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link bg-primary">
    <img src="{{asset('assets/AdminLTE/dist/img/SMKN1CIMAHI.png')}}" alt="AdminLTE Logo" class="brand-image img-circle ml-4 mr-4" style="opacity: .8">
    <span class="brand-text font-weight-light"><b>INVENTARIS</b></span>

  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('assets/AdminLTE/dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ asset('/') }}" class="nav-link {{ (request()->is('/*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              DASHBOARD
            </p>
          </a>
        </li>
        
        <li class="nav-header">DATA MASTER</li>

        <li class="nav-item menu-open">
          <ul class="nav nav-treeview">
            <li class="nav-item menu-open">
              <a class="nav-link {{ (request()->is('user*')) ? 'active' : '' }}" href="{{ asset('user') }}">
                <i class="far fas fa-user nav-icon"></i>
                <p>User</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link {{ (request()->is('kib*')) ? 'active' : '' }}">
                <i class="far fas fa-table nav-icon"></i>
                <p>
                  KIB
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('/kib/kiba*')) ? 'active' : '' }}" href="{{ asset('/kib/kiba') }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>KIB A</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('/kib/kibb*')) ? 'active' : '' }}" href="{{ asset('/kib/kibb') }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>KIB B</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('/kib/kibc*')) ? 'active' : '' }}" href="{{ asset('/kib/kibc') }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>KIB C</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('/kib/kibd*')) ? 'active' : '' }}" href="{{ asset('/kib/kibd') }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>KIB D</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('/kib/kibe*')) ? 'active' : '' }}" href="{{ asset('/kib/kibe') }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>KIB E</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ (request()->is('aset*')) ? 'active' : '' }}" href="{{asset('aset')}}">
                <i class="far fas fa-warehouse nav-icon"></i>
                <p>Data Aset</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('ruangan*')) ? 'active' : '' }}" href="{{asset('ruangan')}}">
                <i class="far fas fa-university nav-icon"></i>
                <p>Ruangan</p>
              </a>
            </li>
          </ul>
        </li>
        {{--@endif--}}
        <li class="nav-header"></li>

        <!------ TRANSAKSI ------>
        <li class="nav-item ">
          <a href="{{ asset('peminjaman')}}" class="nav-link {{ (request()->is('peminjaman*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-fw fa-exchange-alt"></i>
            <p>
              TRANSAKSI
            </p>
          </a>
        </li>

        <!------ LAPORAN ------>
        <li class="nav-item">
          <a href="#" class="nav-link {{ (request()->is('laporan*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-book"></i>
            <p>
              LAPORAN
            </p>
          </a>
        </li>

      </ul>
    </nav>
  </div>
  <!-- /.sidebar -->
</aside>