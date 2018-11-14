@extends('layouts.admin-skin')

@section('title')
  {{ env("APP_NAME") }} | Dashboard
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
        <div class="col-xs-6 col-lg-3">
          <div class="card">
            <div class="card-body pv">
              <div class="clearfix">
                <div class="pull-left">
                  <h4 class="m0 text-thin total-visit"></h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-up-b"></em>New visitors</small>
                </div>
                <div class="pull-right mt-lg">
                  <div class="sparkline" id="sparkline2" data-line-color="#4caf50"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-lg-3">
          <div class="card">
            <div class="card-body pv">
              <div class="clearfix">
                <div class="pull-left">
                  <h4 class="m0 text-thin total-visit"></h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-down-b"></em>Page views</small>
                </div>
                <div class="pull-right mt-lg">
                  <div class="sparkline" id="sparkline1" data-line-color="#03A9F4"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-lg-3 visible-lg">
          <div class="card">
            <div class="card-body pv">
              <div class="clearfix">
                <div class="pull-left">
                  <h4 class="m0 text-thin active-software"></h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-up-b"></em>Active Software</small>
                </div>
                <div class="pull-right mt-lg">
                  <div class="sparkline" id="sparkline3" data-line-color="#ab47bc"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-lg-3 visible-lg">
          <div class="card">
            <div class="card-body pv">
              <div class="clearfix">
                <div class="pull-left">
                  <h4 class="m0 text-thin expired-software"></h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-up-b"></em>Expired Software</small>
                </div>
                <div class="pull-right mt-lg">
                  <div class="sparkline" id="sparkline4" data-line-color="#e91e63"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-9 col-md-12">
          <div class="row">
            <div class="col-xs-12 col-lg-12">
              <div class="card">
                <!-- START table-responsive-->
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Software</th>
                        <th>Expires on</th>
                        <th>Status</th>
                        <th>Stage</th>
                        <th>More</th>
                      </tr>
                    </thead>
                    <tbody class="display-software-subscriptions"></tbody>
                  </table>
                </div>
                <!-- END table-responsive-->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-12">
          <!-- Activity feed-->
          <div class="card">
            <div class="card-heading">
              <!-- START dropdown-->
              <div class="pull-right dropdown">
                <button class="btn btn-default btn-flat btn-flat-icon" type="button" data-toggle="dropdown"><em class="ion-android-more-vertical"></em></button>
                <ul class="dropdown-menu md-dropdown-menu dropdown-menu-right" role="menu">
                  <li><a href="">Last 30 days</a></li>
                  <li><a href="">Last week</a></li>
                  <li><a href="">Last year</a></li>
                </ul>
              </div>
              <!-- END dropdown-->
              <div class="card-title">Activity</div><small>What's people doing right now</small>
            </div>
            <div class="card-body bb">
              <p class="pull-left mr"><a href="">
                <img class="img-circle thumb32" src="{{ asset('admin-assets/img/user/04.jpg') }}" alt="User"></a></p>
              <div class="oh">
                <p><strong class="spr">Rilwan</strong><span class="spr">push update to</span>
                  <a href="">TradeFi</a>
                </p>
                <p class="bl pl"><i>That's awesome!</i></p>
                <div class="clearfix">
                  <div class="pull-left text-muted"><em class="ion-android-time mr-sm"></em><span>2 hours ago</span></div>
                </div>
              </div>
            </div>
            <div class="card-body bb">
              <p class="pull-left mr"><a href=""><img class="img-circle thumb32" src="{{ asset('admin-assets/img/user/01.jpg') }}" alt="User"></a></p>
              <div class="oh">
                <p>
                  <strong class="spr">Standly</strong>
                  <span class="spr">push update to</span>
                  <a href="">VFD</a>
                </p>
                <p class="bl pl"><i>That's awesome!</i></p>
                <div class="clearfix">
                  <div class="pull-left text-muted"><em class="ion-android-time mr-sm"></em><span>2 weeks ago</span></div>
                </div>
              </div>
            </div><a class="card-footer btn btn-flat btn-default" href=""><small class="text-center text-muted lh1">See more activities</small></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="card">
            <div class="card-heading bg-pink-500 ripple ripple-block">
              <div class="card-title text-center"><small>October</small>
                <h4 class="mv-sm text-md">12</h4><span>Monday</span>
              </div>
            </div>
            <div class="ui-datepicker-responsive">
              <div class="ui-datepicker" id="dashboard-datepicker" data-date="04/04/2016"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-heading">
              <div class="card-title">
                <div class="pull-right"><a href=""><em class="ion-plus-round text-soft"></em></a></div>Tasks
              </div>
            </div>
            <div class="card-body text-center pt0">
              <div class="easypie-chart block-center" id="dashboard-easypiechartTask" data-percent="85"><small class="percentage">Goal</small></div>
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
      </div>
    </div>
  </section>

  <!-- Page footer-->
  <footer><span>{{ Date("Y") }} - {{ env("APP_NAME") }}.</span></footer>
@endsection

@section('scripts')
  <script type="text/javascript">
    loadSoftwareSubscription();

    // load software issues
    function loadSoftwareSubscription() {
      $.get('{{ url('admin/load/projects') }}', function(data) {
        $(".display-software-subscriptions").val();
        var sn = 0;
        var total_active = 0;
        var total_expired = 0;

        $.each(data, function(index, val) {
          sn++;

          if(val.status == "active"){
            total_active++;
          }

          if(val.status == "expired"){
            total_expired++;
          }

          $(".display-software-subscriptions").append(`
            <tr>
              <td>
                <p class="m0">${val.name}<br>
                  <small class="text-thin">${val.client}</small>
                </p>
              </td>
              <td class="va-middle">${moment(val.duration).format("lll")}</td>
              <td><em class="ion-ios-circle-outline text-success"></em> ${val.status}</td>
              <td><em class="ion-arrow-graph-up-right text-success"></em> ${val.project_stage}</td>
              <td class="va-middle">
                <a href="{{url('admin/view/project')}}/${val.id}" class="small">view</a>
              </td>
            </tr>
          `);
        });
        $(".active-software").html(total_active);
        $(".expired-software").html(total_expired);
      });
    }
  </script>
@endsection