@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Contact Us
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')

    <!--========== PROMO BLOCK ==========-->
    <div class="js__parallax-window" style="background: url(img/1920x1080/02.jpg) 5% 0 no-repeat fixed; height: 100px;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            
        </div>
    </div>
    
	@include('__includes.news')

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
	<script type="text/javascript">
		// load modules
        loadGlobalNews();

        // load global news
        function loadGlobalNews() {
            $.get('{{ url('load/global/news') }}', function(data) {
                $(".display-news").html("");
                var sn = 0;
                $.each(data, function(index, val) {
                    sn++;
                    $(".display-news").append(`
                        <div class="col-sm-12 g-margin-b-30--xs g-margin-b-10--md">
                            <!-- News -->
                            <article>
                                <img width="90%" height="260" style="box-shadow:0px 0px 4px 0px #CCC;border-radius:4px;" src="${val.urlToImage}" alt="Image">
                                <div class="g-bg-color--white g-box-shadow__dark-lightest-v2">
                                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">${val.title}</p>
                                    <h3 class="g-font-size-22--xs g-letter-spacing--1"><h3>
                                    <p>${val.description}</p>
                                </div>
                            </article>
                            <!-- End News -->
                        </div>
                    `);

                    if(sn > 4){
                        // void loop
                        return false;
                    }
                });
            });
        }
	</script>
@endsection