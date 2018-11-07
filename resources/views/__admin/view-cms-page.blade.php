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
          <a href="{{ URL::previous() }}">
            <i class="ion-ios-arrow-right"></i> Back
          </a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="row page-components">
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
    loadAllPagesComponent();

    // load all components
    function loadAllPagesComponent() {
      $.get('{{ url('admin/page/components')}}/{{ $page }}', function(data) {
        $(".page-components").html("");
        $.each(data, function(index, val) {
          $(".page-components").append(`
            <div class="col-md-4">
              <a href="{{url('admin/view/component')}}/${val.id}" style="text-decoration:none;">
                <div class="card">
                  <div class="card-body">
                    <i class="fa fa-plus fa-2x"></i> ${val.name}
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