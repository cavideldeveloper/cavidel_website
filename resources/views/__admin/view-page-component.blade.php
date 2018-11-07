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
          <div class="col-sm-9">
            <a href="{{ URL::previous() }}">
              <i class="ion-ios-arrow-right"></i> Back
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="row components">
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
    loadPageComponent();

    // load all components
    function loadPageComponent() {
      $.get('{{ url('admin/load/components') }}/{{ $id }}', function(data) {
        $(".components").html("");
        $.each(data, function(index, val) {
          $(".components").append(`
            <div class="col-md-4">
              <a href="javascript:void(0);" style="text-decoration:none;">
                <div class="card">
                  <div class="card-body">
                    <i class="fa fa-plus fa-2x"></i> ${val.body}
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