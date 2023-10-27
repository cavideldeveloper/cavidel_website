{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Main content -->
<div class="content-wrapper">
    <div class="container">
        <div class="card p-4 m-4">
            <form method="POST" action="{{ route('store_screening_questionaire')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="applicant_name">Full Name</label>
                            <input type="text" placeholder="Enter Full Name" name="full_name" class="form-control" required="">
                        </div>
                    </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
    </div>
</div> --}}
