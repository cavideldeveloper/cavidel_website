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
          <h4 class="m0 text-thin">Setup all Cavidel Limited Products</h4>
        </div>
        {{-- @include('__components.add-software') --}}
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9 col-md-12">
          <div class="card">
            <div class="card-heading">
              <div class="card-title">
                <div class="pull-right">
                  <a href="javascript:void(0);" onclick="showAddProductModal()"><em class="ion-plus-round text-soft"></em></a>
                </div> Products
              </div>
            </div>
            <div class="card-body text-center pt0">
              <div id="load-products" class="row"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12">
          <div class="card">
            <div class="card-heading">
              <div class="card-title">
                Top request
              </div>
            </div>
            <div class="card-body text-center pt0">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ADD NEW PRODUCTS -->
  <div class="modal fade" id="add-new-product-modal" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4>NEW PRODUCT</h4>
              </div>
              <div class="modal-body">
                <form method="POST" onsubmit="return addNewProduct()">
                  <div class="form-group">
                    <label for="product_name">What is the product name</label>
                    <input type="text" class="form-control" id="product_name" placeholder="Eg, Task manager software" name="">
                  </div>

                  <div class="form-group">
                    <label for="product_description">What is the product about</label>
                    <textarea class="form-control" id="product_description" placeholder="Tell us more details about the product..."></textarea>
                  </div>

                  <div class="form-group">
                    <label for="product_icon">Add Icon</label>
                    <input type="hidden" id="product_icon" name="">
                    <a href="javascript:void(0);" onclick="addProductAvatar()" class="btn btn-link">
                      <em class="ion-plus-round text-soft"></em>
                    </a>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary" type="submit">Create</button>
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

  <!-- Page footer-->
  <footer><span>{{ Date("Y") }} - {{ env("APP_NAME") }}.</span></footer>
@endsection

@section('scripts')
  <script type="text/javascript">
    loadProducts();

    // load software issues
    function loadProducts() {
      $.get('{{ url('admin/load/products') }}', function(data) {
        // console.table(data);
        $("#load-products").html("");
        $.each(data, function(index, val) {
          $("#load-products").append(`
            <div class="col-md-6">
              <div class="product-card each-products">
                <h4>${val.name}</h4>
                <p>${val.details}</p>
              </div>
            </div>
          `);
        });
      });
    }

    function showAddProductModal() {
      $("#add-new-product-modal").modal();
    }

    function addNewProduct() {
      var _token      = $("#token").val();
      var name        = $("#product_name").val();
      var description = $("#product_description").val();
      var avatar      = $("#product_avatar").val();

      var query = {_token, name, description}

      fetch(`{{url('add/new/product')}}`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(query)
      }).then(r => {
        return r.json();
      }).then(results => {
        // console.log(results);
        loadProducts();
        swal(
          results.status,
          results.message,
          results.status
        );

      }).catch(err => {
        console.log(JSON.stringify(err));
      })

      // return
      return false;
    }
  </script>
@endsection