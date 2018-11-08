@extends('layouts.admin-skin')

@section('title')
  {{ env("APP_NAME") }} | Software Subscriptions
@endsection

@section('contents')
  <!-- Page content-->
  <section>
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
        $.each(data, function(index, val) {
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
      });
    }
  </script>
@endsection