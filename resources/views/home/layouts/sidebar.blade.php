<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard')?'active':'' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('home/laporan')?'active':'' }}" aria-current="page" href="/home/laporan">
            <span data-feather="file-text"></span>
            Laporan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/login">
            <span data-feather="log-out"></span>
            Logout
          </a>
        </li>

      </ul>

     
    </div>
  </nav>
  {{-- <div class="nav-item text-nowrap">
    <a class="nav-link px-3" href="/login">Log out</a>
  </div> --}}
