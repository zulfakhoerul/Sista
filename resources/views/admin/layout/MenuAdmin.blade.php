<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <div class="sidebar-brand d-flex align-items-center justify-content-center bg-info">
        <div class="sidebar-brand-text">
          <img src="../img/logo.png" width="70">
        </div>
        <div class="sidebar-brand-text">Angelo Dance Studio</div>
      </div>
      <hr class="sidebar-divider my-0">

      <li class="nav-item {{ Request::is('admin/DashboardAdmin')? "active":""}}">
        <a class="nav-link" href="{{url ('admin/DashboardAdmin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item {{ Request::is('CrudAkunUser')? "active":""}} {{ Request::is('CrudAkunAnggota')? "show":""}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-user"></i>
          <span>Akun Pengguna</span>
        </a>
        <div id="collapseBootstrap" class="collapse {{ Request::is('CrudAkunUser')? "show":""}} {{ Request::is('CrudAkunAnggota')? "show":""}} {{ Request::is('CrudAkunAdmin')? "show":""}}" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Akun Pengguna</h6>
            <a class="collapse-item {{ Request::is('CrudAkunUser')? "active":""}}" href="{{url ('CrudAkunUser')}}">Users</a>
            <a class="collapse-item {{ Request::is('CrudAkunAnggota')? "active":""}}" href="{{url ('CrudAkunAnggota')}}">Anggota</a>
            <a class="collapse-item {{ Request::is('CrudAkunAdmin')? "active":""}}" href="{{url ('CrudAkunAdmin')}}">Admin</a>
          </div>
        </div>
      </li>
      <li class="nav-item {{ Request::is('CrudSeniTari')? "active":""}}">
        <a class="nav-link" href="{{url ('CrudSeniTari')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Data Seni Tari</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Pendaftaran Anggota
      </div>
      <li class="nav-item {{ Request::is('CrudPendaftaran')? "active":""}}">
        <a class="nav-link" href="{{url ('CrudPendaftaran')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Data Pendaftaran</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('CrudKelas')? "active":""}}">
        <a class="nav-link" href="{{url ('CrudKelas')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Kelas Tari</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('CrudJadwal')? "active":""}}">
        <a class="nav-link" href="CrudJadwal">
          <i class="far fa-fw fa-calendar"></i>
          <span>Jadwal Tari</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Penyewaan kostum
      </div>
      <li class="nav-item">
        <a class="nav-link" href="forms.html">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Data Penyewaan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="forms.html">
          <i class="fas fa-fw fa-donate"></i>
          <span>Data Pembayaran</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('CrudProduk')? "active":""}}">
        <a class="nav-link" href="{{url ('CrudProduk')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Produk</span>
        </a>
      </li>
      <li class="nav-item {{ Request::is('CrudJenisProduk')? "active":""}}">
        <a class="nav-link" href="{{url ('CrudJenisProduk')}}">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Jenis Produk</span>
        </a>
      </li>

      
    </ul>
    <!-- Sidebar -->