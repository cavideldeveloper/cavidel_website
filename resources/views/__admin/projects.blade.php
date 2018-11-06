@extends('layouts.admin-skin')

@section('title')
  {{ env("APP_NAME") }} | Projects
@endsection

@section('contents')
  <!-- Page content-->
  <section>
    <div class="content-heading bg-white">
      <div class="row">
        <div class="col-sm-9">
          <h4 class="m0 text-thin">Welcome to Cavidel dashboard</h4><small>Make it count, Make it real.</small>
        </div>
        @include('__components.add-software')
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="row">
            <div class="col-xs-12 col-lg-12">
              <div class="card">
                <!-- START table-responsive-->
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Software Name</th>
                        <th>Client</th>
                        <th>Status</th>
                        <th>More</th>
                      </tr>
                    </thead>
                    <tbody class="display-projects"></tbody>
                  </table>
                </div>
                <!-- END table-responsive-->
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

    loadProjects();

    // load software issues
    function loadProjects() {
      $.get('{{ url('admin/load/projects') }}', function(data) {
        $(".display-projects").val();
        $.each(data, function(index, val) {
          $(".display-projects").append(`
            <tr>
              <td>
                <p class="m0">${val.name}<br>
                  <small class="text-thin">${val.company}</small>
                </p>
              </td>
              <td class="va-middle">${val.client}</td>
              <td><em class="ion-arrow-graph-up-right text-success"></em> ${val.status}</td>
              <td class="va-middle">
                <a href="{{url('admin/view/project')}}/${val.id}" class="small">view</a>
              </td>
            </tr>
          `);
        });
      });
    }
  </script>
@endsection