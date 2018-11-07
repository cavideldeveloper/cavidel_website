<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin Template">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/vendor-user.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/app.css') }}">
  </head>
  <body>
    <div class="layout-container">
      <div class="page-container bg-blue-grey-900">
        <div class="container-full">
          @yield('contents')
        </div>
      </div>
    </div>

    <script src="{{ asset('admin-assets/js/vendor-user.js') }}"></script>
    <script src="{{ asset('admin-assets/js/app.js') }}"></script>
    <!-- Sweet-Alert  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script>
    @yield('scripts')
  </body>
</html>