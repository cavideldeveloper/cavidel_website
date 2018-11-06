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
    <input type="hidden" id="token" value="{{ csrf_token() }}" />
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.all.min.js"></script>
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <script type="text/javascript">
      {{-- get issues count --}}
      getIssuesCount();

      $("#add-software-btn").click(function (e){
        $("#add-software").modal("show");
      });

      $("#add-category-btn").click(function (e){
        $("#add-category").modal("show");
      });

      // add software
      function addSoftware() {
        var token   = $("#token").val();
        var name    = $("#project_name").val();
        var sector  = $("#project_sector").val();
        var clients = $("#project_clients").val();
        var company = $("#project_company").val();

        var params = {
          _token: token,
          name: name,
          sector: sector,
          clients: clients,
          company: company
        };

        $.post('{{url('admin/add/projects')}}', params, function(data, textStatus, xhr) {
          if(data.status == "success"){
            swal(
              "Ok",
              data.message,
              data.status
            );
            $("#add-software").modal("hide");
            window.location.href = '{{ url("admin/projects") }}';
          }else{
            swal(
              "oops",
              data.message,
              data.status
            );
          }
        });

        // return
        return false;
      }

      // get all software issues
      function getIssuesCount() {
        $.get('{{url('admin/count/all/issues')}}', function(data) {
          $(".issues_counts").html(data);
        });
      }
    </script>
    @yield('scripts')
  </body>
</html>