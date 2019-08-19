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
          <h4 class="m0 text-thin">Notifications</h4>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9 col-md-12">
          <div class="card">
            <div class="card-heading">
              <div class="card-title">
                <div class="pull-right"><a href="#"><em class="ion-plus-round text-soft"></em></a></div>Messages
              </div>
            </div>
            <div class="card-body pt0">
              <table class="table">
                <thead>
                  <tr>
                    <th>Visitor</th>
                    <th>message</th>
                    <th>date</th>
                    <th>option</th>
                  </tr>
                </thead>
                <tbody id="load-messages"></tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12">
          <div class="card">
            <div class="card-heading">
              <div class="card-title">
                Notifications
              </div>
            </div>
            <div class="card-body text-center pt0">
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9 col-md-12">
          <div class="card">
            <div class="card-heading">
              <div class="card-title">
                <div class="pull-right"><a href="#"><em class="ion-plus-round text-soft"></em></a></div>Order Request
              </div>
            </div>
            <div class="card-body pt0">
              <table class="table">
                <thead>
                  <tr>
                    <th>Software Name</th>
                    <th>Client Name</th>
                    <th>Email</th>
                    <th>option</th>
                  </tr>
                </thead>
                <tbody id="load-orders"></tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12">
          <div class="card">
            <div class="card-heading">
              <div class="card-title">
                Notifications
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
    getMessages();
    getOrders();


    function getMessages() {
      fetch(`{{url('get/contact/messages')}}`).then(r => {
        return r.json();
      }).then(results => {
        console.log(results);
        $("#load-messages").html("");
        $.each(results, function(index, val) {
          $("#load-messages").append(`
            <tr>
              <td>${val.name} (${val.email})</td>
              <td>${val.body}</td>
              <td>${val.created_at}</td>
              <td>
                <a href="javascript:void(0);" onclick="viewMoreInfo(${val.id})" class="btn btn-link">
                  View More
                </a>
              </td>
            </tr>
          `);
        });
      }).catch(err => {
        console.log(JSON.stringify(err));
      })
    }

    function getOrders() {
      fetch(`{{url('get/orders/request')}}`).then(r => {
        return r.json();
      }).then(results => {
        console.log(results);
        $("#load-orders").html("");
        var sn = 0;
        $.each(results, function(index, val) {
          sn++;
          $("#load-orders").append(`
            <tr>
              <td>
                <ul id="software-${sn}"></ul>
              </td>
              <td>${val.name}</td>
              <td>${val.email}</td>
              <td>
                <a href="javascript:void(0);" onclick="viewMoreInfo(${val.id})" class="btn btn-link">
                  View More
                </a>
              </td>
            </tr>
          `);

          $.each(val.software_lists, function(key, el) {
            $(`#software-${sn}`).append(`
              <li>${el.mail_name}</li>
            `);
          });
        });
      }).catch(err => {
        console.log(JSON.stringify(err));
      })
    }
  </script>
@endsection