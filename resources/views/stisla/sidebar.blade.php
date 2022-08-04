<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">Darungan</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">KKN</a>
      </div>
      <ul class="sidebar-menu">
        @if (auth()->user()->hasRole('admin'))
          <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="{{ url('/admin') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i> <span>Homepage</span></a>
              <ul class="dropdown-menu">
                  <li>
                      <a class="nav-link" href="{{ url('admin/home-hero') }}"> <span>Hero</span></a>
                  </li>
                  <li>
                      <a class="nav-link" href="{{ url('admin/home-feature') }}"> <span>Feature</span></a>
                  </li>
              </ul>
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Profile</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ url('admin/profile-content') }}"> <span>Content</span></a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('admin/profile-team') }}"> <span>Our Team</span></a>
                    </li>
                </ul>
          </li>
        @endif
      </ul>
    </aside>
  </div>