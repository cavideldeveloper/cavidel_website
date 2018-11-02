<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin Template">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>@yield('title')</title>
    <!-- Vendor styles-->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/vendor.css') }}"/>
    <!-- Application styles-->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/app.css') }}">
	  <script src="{{ asset('admin-assets/ga.js') }}"></script>
  </head>
  <body class="theme-1">
    <div class="layout-container">
      
      @include('__components.menu-bar')
      @include('__components.side-bar')

      <!-- Main section-->
      <main class="main-container">
        @yield('contents')
      </main>

    </div>

    @include('__components.modals')

    <!-- End Settings template-->
    <!-- Google Maps API-->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBNs42Rt_CyxAqdbIBK0a5Ut83QiauESPA"></script>

    <script src="{{ asset('admin-assets/js/vendor.js') }}"></script>
    <!-- App script-->
    <script src="{{ asset('admin-assets/js/app.js') }}"></script>
    <script src="https://momentjs.com/downloads/moment.js"></script>
    @yield('scripts')
  </body>
</html>