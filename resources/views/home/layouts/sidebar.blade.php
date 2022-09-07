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
          <a class="nav-link {{ Request::is('home/pencatat')?'active':'' }}" aria-current="page" href="/home/pencatat">
            <span data-feather="book"></span>
            Pencatat
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard')?'active':'' }}" aria-current="page" href="/dashboard">
            <span data-feather="book"></span>
            Eksekutor
          </a>
        </li>
        
      </ul>

     
    </div>
  </nav>
