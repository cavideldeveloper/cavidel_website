@extends('layouts.admin-skin')

@section('title')
  {{ env("APP_NAME") }} | Issues
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
                        <th>Issues</th>
                        <th>Client</th>
                        <th>Severity</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="display-software-issues"></tbody>
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
    loadSoftwareIssues();

    // load software issues'
    function loadSoftwareIssues() {
      $.get('{{ url('admin/load/software/issues') }}', function(data) {
        $(".display-software-issues").val();
        $.each(data, function(index, val) {
          $(".display-software-issues").append(`
            <tr>
              <td>
                <p class="m0">${val.project_info.name}<br>
                  <small class="text-thin">${val.software_issue}</small>
                </p>
              </td>
              <td class="va-middle">${val.project_info.company}</td>
              <td><em class="ion-arrow-graph-up-right text-success"></em> Normal</td>
              <td class="va-middle">
                <a href="javascript:void(0);" class="small">Resolve</a>
              </td>
            </tr>
          `);
        });
      });
    }
  </script>
@endsection