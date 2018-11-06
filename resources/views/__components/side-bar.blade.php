<!-- sidebar-->
<aside class="sidebar-container">
  <div class="sidebar-header">
    <div class="pull-right pt-lg text-muted hidden"><em class="ion-close-round"></em></div><a class="sidebar-header-logo" href="javascript:void(0);"><img src="{{ asset('/img/favicon.png') }}" data-svg-replace="admin-assets/img/logo.svg" alt="Logo"><span class="sidebar-header-logo-text">Cavidel</span></a>
  </div>
  <div class="sidebar-content">
    <div class="sidebar-toolbar text-center"><a href="">
      <img class="img-circle thumb64" src="{{ asset('admin-assets/img/user/01.jpg') }}" alt="Profile"></a>
      <div class="mt">Ekpoto Liberty</div>
    </div>
    <nav class="sidebar-nav">
      <ul>
        <li>
          <a class="ripple" href="{{ url('/admin/dashboard') }}">
            <span class="nav-icon">
              <img class="hidden" src="{{ asset('admin-assets/img/icons/aperture.svg') }}" alt="MenuItem">
            </span>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a class="ripple" href="{{ url('/admin/issues') }}">
            <span class="pull-right nav-label">
              <span class="badge bg-success">
                <span class="issues_counts"></span>
              </span>
            </span>
            <span class="nav-icon">
              <img class="hidden" src="{{ asset('admin-assets/img/icons/aperture.svg') }}" alt="MenuItem">
            </span>
            <span>Issues Center</span>
          </a>
        </li>

        <li>
          <a class="ripple" href="{{ url('/admin/projects') }}">
            <span class="nav-icon">
              <img class="hidden" src="{{ asset('admin-assets/img/icons/aperture.svg') }}" alt="MenuItem">
            </span>
            <span>Projects</span>
          </a>
        </li>

        <li>
          <a class="ripple" href="{{ url('/admin/subscriptions') }}">
            <span class="nav-icon">
              <img class="hidden" src="{{ asset('admin-assets/img/icons/aperture.svg') }}" alt="MenuItem">
            </span>
            <span>Subscriptions</span>
          </a>
        </li>

        <li>
          <a class="ripple" href="{{ url('/admin/builder') }}">
            <span class="nav-icon">
              <img class="hidden" src="{{ asset('admin-assets/img/icons/aperture.svg') }}" alt="MenuItem">
            </span>
            <span>CMS (Builder)</span>
          </a>
        </li>

        <li>
          <a class="ripple" href="{{ url('/admin/tasks') }}">
            <span class="nav-icon">
              <img class="hidden" src="{{ asset('admin-assets/img/icons/aperture.svg') }}" alt="MenuItem">
            </span>
            <span>Tasks</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
<div class="sidebar-layout-obfuscator"></div>