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
        <div class="col-sm-3 text-right hidden-xs">
          <button class="mt-sm btn btn-labeled btn-default ripple" type="button">Apps<span class="btn-label btn-label-right"><i class="ion-plus-round"></i></span></button>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-6 col-lg-3">
          <div class="card">
            <div class="card-body pv">
              <div class="clearfix">
                <div class="pull-left">
                  <h4 class="m0 text-thin">350</h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-up-b"></em>New visitors</small>
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
                  <h4 class="m0 text-thin">10,200</h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-down-b"></em>Page views</small>
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
                  <h4 class="m0 text-thin">880</h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-up-b"></em>Last income</small>
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
                  <h4 class="m0 text-thin">780</h4><small class="m0 text-muted"><em class="mr-sm ion-arrow-up-b"></em>Reservations</small>
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
                        <th>#</th>
                        <th>Project</th>
                        <th>Completion</th>
                        <th class="text-right">Trend</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="va-middle"><span class="badge bg-pink-500">1</span></td>
                        <td>
                          <p class="m0">OfficeMate (Lekki Gardens)<br>
                            <small class="text-thin">Nunc posuere eleifend lobortis.</small>
                          </p>
                        </td>
                        <td class="va-middle">50%</td>
                        <td class="text-right va-middle"><em class="ion-arrow-graph-up-right text-success"></em></td>
                      </tr>
                      <tr>
                        <td class="va-middle"><span class="badge bg-purple-400">2</span></td>
                        <td>
                          <p class="m0">OfficeMate (Vision Capital)<br>
                            <small class="text-thin">Nunc posuere eleifend lobortis.</small>
                          </p>
                        </td>
                        <td class="va-middle">30%</td>
                        <td class="text-right va-middle"><em class="ion-arrow-graph-down-right text-warning"></em></td>
                      </tr>
                      <tr>
                        <td class="va-middle"><span class="badge bg-indigo-500">3</span></td>
                        <td>
                          <p class="m0">CATSS (FMDQ)<br>
                            <small class="text-thin">Nunc posuere eleifend lobortis.</small>
                          </p>
                        </td>
                        <td class="va-middle">80%</td>
                        <td class="text-right va-middle"><em class="ion-arrow-graph-up-right text-success"></em></td>
                      </tr>
                      <tr>
                        <td class="va-middle"><span class="badge bg-indigo-500">4</span></td>
                        <td>
                          <p class="m0">CATSS (FDHL)<br>
                            <small class="text-thin">Nunc posuere eleifend lobortis.</small>
                          </p>
                        </td>
                        <td class="va-middle">80%</td>
                        <td class="text-right va-middle"><em class="ion-arrow-graph-up-right text-success"></em></td>
                      </tr>
                      <tr>
                        <td class="va-middle"><span class="badge bg-info">5</span></td>
                        <td>
                          <p class="m0">YEELDA (Gbolaha Opeodu)<br><small class="text-thin">Nunc posuere eleifend lobortis.</small></p>
                        </td>
                        <td class="va-middle">70%</td>
                        <td class="text-right va-middle"><em class="ion-arrow-graph-down-right text-warning"></em></td>
                      </tr>
                    </tbody>
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

  </script>
@endsection