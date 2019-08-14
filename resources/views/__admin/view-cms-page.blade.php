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
            <i class="ion-ios-arrow-left"></i> Back
          </a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      @if(strtolower($page) === 'team')
        <div class="row">
          @include('__components.team-setting')
        </div>
        <div class="row load-team-members">
        </div>
      @endif
    </div>
  </section>

  <!-- Page footer-->
  <footer><span>{{ Date("Y") }} - {{ env("APP_NAME") }}.</span></footer>
@endsection

@section('scripts')
  {{-- scripts here --}}
  <script src="//widget.cloudinary.com/global/all.js" type="text/javascript"></script>  
  <script type="text/javascript">  
    document.getElementById("upload_widget_opener").addEventListener("click", function() {
      cloudinary.openUploadWidget({ 
        cloud_name: 'delino12', 
        upload_preset: 'znwx0uee',
        cropping: true, 
        folder: 'cavidel-team'
      }, 
      function(error, result) { 
        if(error){
          swal(
            "oops",
            "Error trying to upload image, select image and try again",
            "error"
          );
        }else{
          $("#avatar").val(result[0].url);
          $("#preview-avatar").html(`
            <img src="${result[0].url}" width="120" height="120" style="border-radius: 5px;" />
          `);
        }
      });
    }, false);

    document.getElementById("edit_upload_widget_opener").addEventListener("click", function() {
      cloudinary.openUploadWidget({ 
        cloud_name: 'delino12', 
        upload_preset: 'znwx0uee',
        cropping: true, 
        folder: 'cavidel-team'
      }, 
      function(error, result) { 
        if(error){
          swal(
            "oops",
            "Error trying to upload image, select image and try again",
            "error"
          );
        }else{
          $("#edit_avatar").val(result[0].url);
          $("#edit-preview-avatar").html(`
            <img src="${result[0].url}" width="120" height="120" style="border-radius: 5px;" />
          `);
        }
      });
    }, false);

    // load module
    // loadAllPagesComponent();
    getTeamMembers();
    loadAllDesignation();

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

    $("#add-team-btn").click(function (){
      $("#show-add-team-modal").modal();
    });

    // add new team member
    function addTeamMemeber() {
      var token       = $("#token").val();
      var first_name  = $("#first_name").val();
      var last_name   = $("#last_name").val();
      var email       = $("#email").val();
      var job_role    = $("#job_role").val();
      var description = $("#bio_description").val();
      var avatar      = $("#avatar").val();

      var params = {
        _token: token,
        first_name: first_name,
        last_name: last_name,
        email: email,
        job_role: job_role,
        description: description,
        avatar: avatar
      };

      $.post('{{ url('admin/create/member') }}', params, function(data, textStatus, xhr) {
        if(data.status == "success"){
          getTeamMembers();
          swal(
            "success",
            data.message,
            data.status
          );
          $("#show-add-team-modal").modal('hide');
          $("#add-team-form")[0].reset();
        }else{
          swal(
            "error",
            data.message,
            data.status
          );
        }
      });

      // return 
      return false;
    }

    // get all team member
    function getTeamMembers() {
      $.get('{{ url('admin/get/team/members') }}', function(data) {
        $(".load-team-members").html("");
        $.each(data, function(index, val) {
          $(".load-team-members").append(`
            <div class="col-lg-4 col-xs-12">
                <div class="card">
                  <div class="card-item"><img class="fw img-responsive" src="${val.avatar}" alt="MaterialImg">
                    <div class="card-item-text bg-transparent">
                      <h4 class="text-center">${val.position}</h4>
                    </div>
                  </div>
                  <div class="card-offset">
                    <div class="card-offset-item text-right">
                      <button class="btn-raised btn btn-danger btn-circle btn-lg" onclick="showEditModal(${val.id})" type="button">
                        <em class="ion-compose icon-lg"></em>
                      </button>
                    </div>
                  </div>
                  <div class="mda-list">
                    <div class="mda-list-item">
                      <div class="mda-list-item-icon"><em class="ion-android-person icon-2x text-primary"></em></div>
                      <div class="mda-list-item-text mda-2-line">
                        <h3>${val.firstname} ${val.lastname}</h3>
                        <h4 class="text-muted">${val.position}</h4>
                      </div>
                    </div>
                    <div class="mda-list-item">
                      <div class="mda-list-item-icon"><em class="ion-android-mail icon-2x text-primary"></em></div>
                      <div class="mda-list-item-text mda-2-line">
                        <h3>${val.email}</h3>
                        <h4 class="text-muted">Personal</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          `);
        });
      });
    }

    // show edit modal
    function showEditModal(member_id) {
      $.get('{{ url('admin/get/one/member') }}', {member_id: member_id}, function(data) {
        $("#edit_first_name").val(data.firstname);
        $("#edit_last_name").val(data.lastname);
        $("#edit_email").val(data.email);
        $("#edit_job_role").val(data.position);
        $("#edit_bio_description").val(data.description);
        $("#edit_avatar").val(data.avatar);
        $("#member_id").val(member_id);
      });

      $("#show-edit-team-modal").modal();
    }

    // update team member info
    function updateTeamMemeber() {
      var token       = $("#token").val();
      var member_id   = $("#member_id").val();
      var first_name  = $("#edit_first_name").val();
      var last_name   = $("#edit_last_name").val();
      var email       = $("#edit_email").val();
      var job_role    = $("#edit_job_role").val();
      var description = $("#edit_bio_description").val();
      var avatar      = $("#edit_avatar").val();

      var params = {
        _token: token,
        first_name: first_name,
        last_name: last_name,
        email: email,
        job_role: job_role,
        description: description,
        avatar: avatar,
        member_id: member_id
      };

      $.post('{{ url('admin/update/member') }}', params, function(data, textStatus, xhr) {
        if(data.status == "success"){
          getTeamMembers();
          swal(
            "success",
            data.message,
            data.status
          );
          $("#show-edit-team-modal").modal('hide');
          $("#edit-team-form")[0].reset();
        }else{
          swal(
            "error",
            data.message,
            data.status
          );
        }
      });

      // void form
      return false;
    }

    // delete member
    function deleteMember() {
      var member_id = $("#member_id").val();
      var token     = $("#token").val();

      var params = {
        _token: token,
        member_id: member_id
      };

      $.post('{{ url('admin/delete/team/member') }}', params, function(data, textStatus, xhr) {
        /*optional stuff to do after success */
        if(data.status == "success"){
          swal(
            "success",
            data.message,
            data.status
          );

          getTeamMembers();
          $("#show-edit-team-modal").modal('hide');
        }else{
          swal(
            "error",
            data.message,
            data.status
          );
        }
      });
    }

    // get all job role
    function loadAllDesignation() {
      fetch(`{{url('admin/get/designation')}}`).then(r => {
        return r.json();
      }).then(results => {
        // console.log(results)
        $("#job_role").html('');
        $("#edit_job_role").html('');
        $.each(results, function(index, val) {
          $("#job_role").append(`
            <option value="${val.id}">${val.designation}</option>
          `);

          $("#edit_job_role").append(`
            <option value="${val.id}">${val.designation}</option>
          `);
        });
      }).catch(err => {
        console.log(JSON.stringify(err));
      })
    }
  </script>
@endsection