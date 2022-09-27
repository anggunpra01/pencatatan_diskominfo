<header class="navbar navbar-primary sticky-top bg-primary flex-md-nowrap p-0 shadow">
  
  <nav class="navbar navbar-primary bg-primary fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start text-bg-primary" style="width: 250px" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Diskominfo Jabar</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-2">
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
              <a class="nav-link {{ Request::is('home/inventaris')?'active':'' }}" aria-current="page" href="/home/inventaris">
                <span data-feather="file-text"></span>
                Inventaris
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
      </div>
    </div>
  </nav>
  </header>
  