@extends('layouts.admin-skin')

@section('title')
  {{ env("APP_NAME") }} | CMS Builder
@endsection

@section('contents')
  <!-- Page content-->
  <section>
    <div class="content-heading bg-white">
      <div class="row">
        <div class="col-sm-9">
          <h4 class="m0 text-thin">Welcome to Cavidel dashboard</h4><small>Make it count, Make it real.</small>
        </div>
        @include('__components.start-builder')
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="row site-components">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Page footer-->
  <footer><span>{{ Date("Y") }} - {{ env("APP_NAME") }}.</span></footer>
@endsection

@section('scripts')
  <script type="text/javascript">
    // load module
    loadAllComponent();

    // add component
    function addComponent() {
      var token   = $("#token").val();
      var name    = $("#com_name").val();
      var page    = $("#com_page").val();

      var params = {
        _token: token,
        name: name,
        page: page
      };

      $.post('{{url('admin/add/components')}}', params, function(data, textStatus, xhr) {
        if(data.status == "success"){
          swal(
            "Ok",
            data.message,
            data.status
          );
          $("#add-category").modal("hide");
          loadAllComponent();
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

    // load all components
    function loadAllComponent() {
      $.get('{{ url('admin/all/components') }}', function(data) {
        $(".site-components").html("");
        $.each(data, function(index, val) {
          $(".site-components").append(`
            <div class="col-md-4">
              <a href="{{url('admin/view/page')}}/${val.page}" style="text-decoration:none;">
                <div class="card">
                  <div class="card-body">
                    <i class="fa fa-plus fa-2x"></i> ${val.page}
                  </div>
                </div>
              </a>
            </div>
          `);
        });
      });
    }
  </script>
@endsection