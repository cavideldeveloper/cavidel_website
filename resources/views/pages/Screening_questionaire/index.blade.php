@extends('layouts.web-skinned')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Recruitment
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')

    <!--========== PROMO BLOCK ==========-->
    <div class="js__parallax-window" style="background: url(img/1920x1080/09.jpg) 50% 0 no-repeat fixed; height: 350px;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <div class="g-margin-b-60--xs">
                <h1 class="g-font-size-30--xs g-font-size-40--sm g-font-size-55--md g-color--white g-letter-spacing--1 g-margin-b-30--xs g-font-weight--700"> Recruitment Screening Questionaire</h1>
            </div>
           
        </div>
    </div>


	<!--========== PAGE CONTENT ==========-->
	<!-- About -->
	{{-- <div class="container g-padding-y-80--sm g-padding-y-20--md" id="how-we-work">
	    <div class="row g-hor-centered-row--md g-row-col--5">
	        <div class="col-md-12 g-padding-y-60--sm g-padding-y-80--md s-plan-v1">
                <p class="text-uppercase g-text-center--xs g-font-size-28--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs g-color--primary">
                    Screening Questionaire
                </p>

	        </div>
	    </div>
	</div> --}}
	<!-- End About -->
    <div class="card-box m-5">
        <diV class="table-responsive">
            <table class="table table-scrollable text-nowrap table-hover table-bordered table-striped" id="screening_data">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Salary Expectation</th>
                            <th>Job Type</th>
                            <th>Stack Option</th>
                            <th>Post-School Obligation</th>
                            <th>Work Engagement</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($screening as $questionaire )
                        <tr>
                            <td>{{$questionaire->id}}</td>
                            <td>{{$questionaire->applicant_name}}</td>
                            <td>{{$questionaire->email}}</td>
                            <td>{{$questionaire->phone}}</td>
                            <td>{{$questionaire->location}}</td>
                            <td>{{$questionaire->salary_expectation}}</td>
                            <td>{{$questionaire->job_type}}</td>
                            <td>{{$questionaire->stack_option}}</td>
                            <td>{{$questionaire->post_school_obligation}}</td>
                            <td>{{$questionaire->work_engagement}}</td>
                            {{-- <td>
                                <a href="{{ URL::route('edit_company', $company->CompanyRef) }}" class="btn btn-xs btn-primary px-3 py-1">Edit</a>
                                <a href="{{ URL::route('delete_company', $company->CompanyRef) }}" class="btn btn-xs btn-danger px-3 py-1">Delete</a>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </diV>
    </div>
@endsection



@push('scripts')
    <script>
        var table = $('#screening_data').DataTable();

        var settings = {

        sDom: 'rB<"pull-right">tip',
        buttons: [
        'copy', 'excel', 'pdf', 'print', {
            extend: 'colvis',
            columns: ':gt(0)',
            text: 'Columns'
        }
        ],
        "sPaginationType": "bootstrap",
        "destroy": true,
        "scrollCollapse": true,
        "oLanguage": {
        "sLengthMenu": "_MENU_ ",
        "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
        },

        "iDisplayLength": 20,

        fnDrawCallback: function(oSettings) {
        $('.export-options-container').append($('.exportOptions'));
        }
        };

        var table = $('#listed-cv').DataTable(settings);
        $('#screening_data tfoot th').each(function(key, val) {
        var title = $(this).text();
        if (key === $('#company_data tfoot th')) {
            return false
        }
        $(this).html('<input type="text" class="form-control" placeholder="' + $.trim(title) + '" />');
        });
        table.columns().every(function() {
        var that = this;
        $('input', this.footer()).on('keyup change', function() {
            if (that.search() !== this.value) {
                that.search(this.value).draw();
            }
        });
        });
    </script>

@endpush
