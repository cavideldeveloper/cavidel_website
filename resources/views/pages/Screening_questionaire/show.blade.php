@extends('layouts.master')

@section('content')
    <!-- Main content -->
		<div class="content-wrapper">

					<!-- Page header -->
                    <div class="page-header">
                        <div class="page-header-content header-elements-md-inline">
                            <div class="page-title d-flex">
                                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
                                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                            </div>

                            <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                                <div class="btn-group">
                                    <button type="button" class="btn bg-indigo-400 text-white"><i class="C mr-2"></i> <a href="{{ URL::route('create_company') }}">New Company</a></button>
                                    <button type="button" class="btn bg-indigo-400 dropdown-toggle" data-toggle="dropdown"></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-header">Actions</div>

                                        <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit Company</a>
                                        <div class="dropdown-header">Export</div>
                                        <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to PDF</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to CSV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /page header -->

                    <div class="container mt-5">
                        <h2 class="mb-4">Company Record</h2>
                        <table class="table table-bordered datatable" id="company_data">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Company</th>
                                    <th>ShortName</th>
                                    <th>Slug</th>
                                    <th>Website</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Logo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$company->CompanyRef}}</td>
                                    <td>{{$company->Company}}</td>
                                    <td>{{$company->ShortName}}</td>
                                    <td>{{$company->Slug}}</td>
                                    <td>{{$company->Website}}</td>
                                    <td>{{$company->Address}}</td>
                                    <td>{{$company->Email}}</td>
                                    <td>{{$company->Phone}}</td>
                                    <td>{{$company->Logo}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
        </div>
@endsection



@push('scripts')
    <script>
        $(document).ready(function(){

            $("#company_data").DataTable();

        })
    </script>
@endpush
