@extends('layouts.admin-skin')

@section('title')
  {{ env("APP_NAME") }} | Project Overview
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
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="mt0">{{ $project->name }}</h5>
              <p class="mb-lg">{{ $project->company }}</p>
              <br /><br />
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <table class="table">
                <tr>
                  <td>Application Key</td>
                  <td>

                    @if($project->app_key == null)
                      *********** 
                      <a href="javascript:void(0);" class="pull-right link">
                        <i class="ion-eye"></i>  Show</a>
                      </td>
                    @else
                      {{ $project->app_key }}
                      <a href="javascript:void(0);" class="pull-right link">
                        <i class="ion-eye"></i>  Hide</a>
                      </td>
                    @endif
                </tr>
                <tr>
                  <td>Project Phase</td>
                  <td>{{ ucfirst($project->project_stage) }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-md-12">
          <h3 class="lead">Project Technical Documentation</h3>
          <div class="summernote">
            {!! $docs->contents !!}
          </div>
          <button class="btn btn-primary" id="save-docs">
            <i class="ion-compose" data-pack="default"></i> Save
          </button>

          <button class="btn btn-primary" id="print-docs">
            <i class="ion-printer" data-pack="default"></i> Print
          </button>

          <button class="btn btn-primary" id="send-docs">
            <i class="ion-email" data-pack="default"></i> Send Mail
          </button>

        </div>
      </div>
          
    </div>
  </section>

  <!-- Page footer-->
  <footer><span>{{ Date("Y") }} - {{ env("APP_NAME") }}.</span></footer>
@endsection

@section('scripts')
  <script type="text/javascript">
    getProjectInfo();

    // load software issues
    function getProjectInfo() {
      $.get('{{url('admin/load/single/project')}}/{{$id}}', function(data) {
        $("#project-docs").append(`
          ${data.docs.contents}
        `);
      });
    }


    // save docs
    $("#save-docs").click(function(c){
      swal(
        "Save!",
        "Document saved!",
        "success"
      );
    });

    // save docs
    $("#print-docs").click(function(c){
      swal(
        "oops!",
        "printing is not available at the moment, try again later!",
        "info"
      );
    });

    $("#send-docs").click(function(c){
      swal(
        "oops!",
        "Send docs via mail service is not available at the moment, try again later!",
        "info"
      );
    });
  </script>
@endsection