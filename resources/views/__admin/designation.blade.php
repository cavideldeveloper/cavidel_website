@extends('layouts.admin-skin')

@section('title')
  {{ env("APP_NAME") }} | Projects
@endsection

@section('contents')
  <!-- Page content-->
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9 col-md-12">
          <div class="card">
            <div class="card-heading">
              <div class="card-title">
                <div class="pull-right"><a href="javascript:void(0);" onclick="addDesignation()"><em class="ion-plus-round text-soft"></em></a></div>Setup Designation
              </div>
            </div>
            <div class="card-body text-center pt0">
              <table class="table">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Job Description</th>
                    <th>Level</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody id="load-designation"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SHOW ADD NEW DESIGNATION -->
    <div class="modal fade" id="show-add-designation" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Add Job Role</h4>
          </div>
          <div class="modal-body">
            <form method="POST" onsubmit="return addNewDesignation()">
              <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" id="designation" class="form-control" placeholder="Enter designation..." name="">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">
                  Add
                </button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <div class="pull-right">
              <button class="btn btn-flat" type="button" data-dismiss="modal">
                close
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SHOW EDIT DESIGNATION -->
    <div class="modal fade" id="show-edit-add-designation" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Add Job Role</h4>
          </div>
          <div class="modal-body">
            <form method="POST" onsubmit="return updateDesignation()">
              <div class="form-group">
                <label for="designation">Designation</label>
                <input type="hidden" id="edit-id" value="">
                <input type="text" id="edit-designation" class="form-control" placeholder="Enter designation..." name="">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">
                  Update
                </button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <div class="pull-right">
              <button class="btn btn-flat" type="button" data-dismiss="modal">
                close
              </button>
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
    loadAllDesignation();

    function addDesignation() {
      $("#show-add-designation").modal();
    }

    function editDesignation(id) {
      fetch(`{{url('admin/get/one/designation')}}?id=${id}`).then(r => {
        return r.json();
      }).then(results => {
        console.log(results);
        $("#edit-id").val(id);
        $("#edit-designation").val(results.designation);
        $("#show-edit-add-designation").modal();
      }).catch(err => {
        console.log(JSON.stringify(err));
      })
    }

    function addNewDesignation() {
      var designation = $("#designation").val();
      var role = 1;
      var level = 1;
      var status = 0;
      var _token = $("#token").val();

      var query = {_token, designation, role, level, status}
      fetch(`{{url('admin/add/designation')}}`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(query)
      }).then(r => {
        return r.json();
      }).then(results => {
        // console.log(results)
        loadAllDesignation();
        swal(
          results.status,
          results.message,
          results.status
        );
      }).catch(err => {
        console.log(JSON.stringify(err));
      })
      return false;
    }

    function updateDesignation() {
      var id = $("#edit-id").val();
      var designation = $("#edit-designation").val();
      var role = 1;
      var level = 1;
      var status = 0;
      var _token = $("#token").val();

      var query = {_token, id, designation, role, level, status}
      fetch(`{{url('admin/update/designation')}}`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(query)
      }).then(r => {
        return r.json();
      }).then(results => {
        // console.log(results)
        loadAllDesignation();
        swal(
          results.status,
          results.message,
          results.status
        );
      }).catch(err => {
        console.log(JSON.stringify(err));
      })
      return false;
    }

    function loadAllDesignation() {
      fetch(`{{url('admin/get/designation')}}`).then(r => {
        return r.json();
      }).then(results => {
        // console.log(results)
        $("#load-designation").html('');
        var sn = 0;
        $.each(results, function(index, val) {
          sn++;
          $("#load-designation").append(`
            <tr>
              <th>${sn}</th>
              <th>${val.designation}</th>
              <th>${val.level}</th>
              <th>
                <a href="javascript:void(0);" onclick="editDesignation(${val.id})" class="btn btn-flat">Edit</a>
              </th>
            </tr>
          `);
        });
      }).catch(err => {
        console.log(JSON.stringify(err));
      })
    }
  </script>
@endsection