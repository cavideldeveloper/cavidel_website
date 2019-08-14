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
        <div class="col-lg-9 col-md-12">
          <div class="card">
            <div class="card-heading">
              <div class="card-title">
                <div class="pull-right"><a href=""><em class="ion-plus-round text-soft"></em></a></div>Tasks
              </div>
            </div>
            <div class="card-body text-center pt0">
              <div class="easypie-chart block-center" id="dashboard-easypiechartTask" data-percent="85">
                <small class="percentage">Goal</small></div>
              <p class="mv">85% productivity</p>
            </div>
            <div class="list-group m0">
              <a class="list-group-item bt0" href="">
                <span class="text-sm">Work on project presentation</span>
                <span class="pull-right"><em class="ion-ios-arrow-right"></em></span>
              </a>
              <a class="list-group-item" href="">
                <span class="text-sm">Prepare a call with Henry Yeelda</span>
                <span class="pull-right"><em class="ion-ios-arrow-right"></em></span>
              </a>
              <a class="list-group-item" href="">
                <span class="text-sm">Release a new version</span>
                <span class="pull-right"><em class="ion-ios-arrow-right"></em></span>
              </a>
              <a class="list-group-item bb0" href="">
                <span class="text-sm">Tell Lekki Gardens there's no problem</span><span class="pull-right"><em class="ion-ios-arrow-right"></em></span>
              </a>

              <a class="list-group-item bb0" href="">
                <span class="text-sm">View all Task</span>
              </a>
            </div>
            <div class="flot-chart flot-chart-sm" id="flot-task-chart" data-height="90"></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12">
          <div class="card">
            <div class="card-heading">
              <div class="card-title">
                Progress
              </div>
            </div>
            <div class="card-body text-center pt0">
              
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
                <p class="m0">OfficeMate<br>
                  <small class="text-thin">${val.software_name}</small>
                </p>
              </td>
              <td class="va-middle">${val.client}</td>
              <td><em class="ion-arrow-graph-up-right text-success"></em> Running</td>
              <td class="va-middle">
                <a href="javascript:void(0);" class="small">view</a>
              </td>
            </tr>
          `);
        });
      });
    }
  </script>
@endsection