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
                                        <a href="{{ URL::route('edit_company', $id) }}" class="dropdown-item"><i class="icon-file-plus"></i> Edit Company</a>
                                        <a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Delete Company</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /page header -->

                    <div class="container">
                        <div class="card p-4 m-4">
                            <form method="POST" action="{{ route('update_company', $id) }}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="row">
                                    <div class="form-group col-md-6">
                                      {{ Form::label('Company', 'Company') }}
                                      {{ Form::text('Company', $company->Company, ['id' => 'Company', 'class' => 'form-control', 'placeholder' => 'XYZ & Co']) }}
                                    </div>
                                    <div class="form-group col-md-6">
                                      {{ Form::label('ShortName', 'ShortName') }}
                                      {{ Form::text('ShortName', $company->ShortName, ['id' => 'ShortName', 'class' => 'form-control', 'placeholder' => 'XYZ']) }}
                                    </div>
                                  </div>
                                  <div class="form-row">
                                      <div class="form-group col-md-6">
                                          {{ Form::label('Slug', 'Slug') }}
                                          {{ Form::text('Slug', $company->Slug, ['id' => 'Slug', 'class' => 'form-control', 'placeholder' => 'company_slug']) }}
                                      </div>
                                      <div class="form-group col-md-6">
                                          {{ Form::label('Website', 'Website') }}
                                          {{ Form::text('Website', $company->Website, ['id' => 'Website', 'class' => 'form-control', 'placeholder' => 'www.example.com']) }}
                                      </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      {{ Form::label('Address', 'Address') }}
                                      {{ Form::text('Address', $company->Address, ['id' => 'Address', 'class' => 'form-control', 'placeholder' => '123, Wellington']) }}
                                    </div>
                                    <div class="form-group col-md-6">
                                      {{ Form::label('Email', 'Email') }}
                                      {{ Form::email('Email', $company->Email, ['id' => 'Email', 'class' => 'form-control', 'placeholder' => 'john.doe@yahoo.com']) }}
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      {{ Form::label('Phone', 'Phone Number') }}
                                      {{ Form::number('Phone', $company->Phone, ['id' => 'Phone', 'class' => 'form-control', 'placeholder' => '0813xxxxxx']) }}
                                    </div>
                                  <div class="form-group col-md-6">
                                      {{ Form::label ('Logo', 'Logo')}}
                                      {{ Form::file('Logo', null, ['id' => 'Company', 'class' => 'form-control', 'placeholder' => 'Company']) }}
                                  </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                        </div>
                    </div>
        </div>
@endsection


