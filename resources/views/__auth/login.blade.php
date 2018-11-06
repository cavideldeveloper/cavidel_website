@extends('layouts.auth-skin')

@section('title')
	Admin Login
@endsection

@section('contents')
	<div class="container container-xs">
        <img class="mv-lg block-center img-responsive" width="94" height="auto" src="{{ asset('/img/cavidel-logo-white.png') }}">
        <form class="card b0 form-validate" id="user-login" onsubmit="return loginAdmin()" name="loginForm" novalidate="">
          <div class="card-offset pb0">
            <div class="card-offset-item text-right hidden">
              <div class="btn btn-success btn-circle btn-lg"><em class="ion-checkmark-round"></em></div>
            </div>
          </div>
          <div class="card-heading">
            <div class="card-title text-center">Login</div>
          </div>
          <div class="card-body">
            <div class="mda-form-group float-label mda-input-group">
              <div class="mda-form-control">
                <input class="form-control" type="email" id="email" name="accountName" required="">
                <div class="mda-form-control-line"></div>
                <label>Email address</label>
              </div><span class="mda-input-group-addon"><em class="ion-ios-email-outline icon-lg"></em></span>
            </div>
            <div class="mda-form-group float-label mda-input-group">
              <div class="mda-form-control">
                <input class="form-control" type="password" id="password" name="accountPassword" required="">
                <div class="mda-form-control-line"></div>
                <label>Password</label>
              </div><span class="mda-input-group-addon"><em class="ion-ios-locked-outline icon-lg"></em></span>
            </div>
          </div>
          <button class="btn btn-primary btn-flat" type="submit">Authenticate</button>
        </form>
    </div>
@endsection

@section('scripts')
	<script type="text/javascript">
    // login admin
    function loginAdmin(){
      // body...
      var token = '{{ csrf_token() }}';
      var username = $("#email").val();
      var password = $("#password").val();

      // data to json
      var data = {
        _token:token,
        username:username,
        password:password
      }

      // ajax query
      $.ajax({
        url: '/admin/login',
        type: 'POST',
        dataType: 'json',
        data: data,
        success: function(data){
          // on success
          if(data.status == 'success'){
            window.location.href = '/admin/dashboard';
          }
          // on error
          if(data.status == 'error'){
            swal(
              "error",
              data.message,
              data.status
            );
          }
        },
        error: function(data){
          swal(
            "oops",
            "Error sending request..",
            "error"
          );
          $("#loading").hide();
        }
      });

      // prevent form action from loading 
      return false;
    }
	</script>
@endsection