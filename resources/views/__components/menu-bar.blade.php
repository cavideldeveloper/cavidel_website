<!-- top navbar-->
<header class="header-container">
  <nav>
    <ul class="visible-xs visible-sm">
      <li><a class="menu-link menu-link-slide" id="sidebar-toggler" href=""><span><em></em></span></a></li>
    </ul>
    <ul class="hidden-xs">
      <li><a class="menu-link menu-link-slide" id="offcanvas-toggler" href=""><span><em></em></span></a></li>
    </ul>

    @if(strpos(Request::url(), '/admin/dashboard') == true)
      <h2 class="header-title">Dashboard</h2>
    @elseif(strpos(Request::url(), '/admin/tasks') == true)
      <h2 class="header-title">Tasks Manager</h2>
    @elseif(strpos(Request::url(), '/admin/issues') == true)
      <h2 class="header-title">Issues Resolution Center (IRC)</h2>
    @elseif(strpos(Request::url(), '/admin/projects') == true)
      <h2 class="header-title">Projects & Softwares</h2>
    @elseif(strpos(Request::url(), '/admin/subscriptions') == true)
      <h2 class="header-title">Software Subscription</h2>
    @elseif(strpos(Request::url(), '/admin/builder') == true)
      <h2 class="header-title">CMS Builder</h2>
    @endif

    <ul class="pull-right">
      <li><a class="ripple" id="header-search" href=""><em class="ion-ios-search-strong"></em></a></li>
      <li class="dropdown"><a class="dropdown-toggle has-badge ripple" href="" data-toggle="dropdown"><em class="ion-person"></em><sup class="badge bg-danger">3</sup></a>
        <ul class="dropdown-menu dropdown-menu-right md-dropdown-menu">
          <li><a href="profile.html"><em class="ion-home icon-fw"></em>Profile</a></li>
          <li><a href="messages.html"><em class="ion-gear-a icon-fw"></em>Messages</a></li>
          <li class="divider" role="presentation"></li>
          <li><a href="{{ url('admin/login') }}"><em class="ion-log-out icon-fw"></em>Logout</a></li>
        </ul>
      </li>
      {{-- <li><a class="ripple" id="header-settings" href="javascript:void(0);"><em class="ion-gear-b"></em></a></li> --}}
    </ul>
  </nav>
</header>