<nav class="navbar navbar-expand navbar-dark bg-white topbar mb-4 static-top">
  <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
    <i class="fa fa-bars text-gray-800"></i>
  </button>
  <ul class="navbar-nav ml-auto">
    
    <div class="topbar-divider d-none d-sm-block"></div>
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <img class="img-profile rounded-circle" src="../admin/img/boy.png" style="max-width: 60px">
          <span class="ml-2 d-none text-gray-800 d-lg-inline small">{{Session::get('nama')}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="{{ url ('logoutAnggota') }}">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>
  </ul>
</nav>