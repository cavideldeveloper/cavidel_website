@extends('layouts.admin-skin')

@section('title')
  {{ env("APP_NAME") }} | Software Subscriptions
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
                        <th>Software</th>
                        <th>Duration</th>
                        <th>Status</th>
                        <th>Action</th>
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
      $.get('{{ url('admin/load/software/subscription') }}', function(data) {
        $(".display-software-subscriptions").val();
        $.each(data, function(index, val) {
          $(".display-software-subscriptions").append(`
            <tr>
              <td>
                <p class="m0">${val.software_name}<br>
                  <small class="text-thin">${val.software_client}</small>
                </p>
              </td>
              <td class="va-middle">${val.software_duration}</td>
              <td><em class="ion-arrow-graph-up-right text-success"></em> ${val.software_status}</td>
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