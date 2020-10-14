@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Blog
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')

    <!--========== PROMO BLOCK ==========-->
    <div class="js__parallax-window" style="background: url({{ asset('img/1920x1080/02.jpg') }}) 5% 0 no-repeat fixed; height: 100px;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aliquid ullam debitis excepturi, non cupiditate eum porro doloribus adipisci perspiciatis. Ab odio quisquam veniam similique, aliquam et esse libero quos. --}}
        </div>
    </div>

    <div class="container blog-container">
        <div class="row post-holder">
            <div class="col-md-7">
                <div class="post-container">
                    <div class="featured-image"  style="text-align: center;">
                        <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid rounded"></p>
                    </div>
                    <div>
                        <p style="text-align: left;"><span class="post-category">Accounting</span> / <span class="post-author">Damilola Olaribigbe</span> / <span class="post-date">June 6, 2020</span></p>
                        <p class="post-title">10 Ways To Check For Cash Leak In Your Business</p>
                        {{-- <p> - </p> --}}
                        <p class="post-body text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam id iste consectetur aut commodi, vitae rem in laboriosam maiores error atque a facere voluptate tempora recusandae saepe repellendus nisi debitis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque fugit repellendus voluptas, qui ducimus numquam repudiandae velit error iste laborum quibusdam commodi excepturi blanditiis deleniti quae repellat quia eos fugiat! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio non tenetur vitae, eaque, error vero qui nulla itaque doloribus ducimus temporibus inventore odit cum. Obcaecati fuga et soluta rem sequi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi doloremque, ipsa id fugit fugiat sint? Cumque accusantium laborum esse, commodi sunt iure, consequatur ducimus dolores eum cum, quas harum nulla. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum soluta, dolores eveniet cumque iure quidem. Dolorem veritatis pariatur maiores fugiat repellat perferendis, quasi quae corrupti ad dolorum assumenda magnam praesentium!</p>
                    </div>
                </div>
                <div class="comment-container">
                    <p class="sidebar-caption">Leave a comment</p>
                    <p style="color: red; font-style: italic; font-size: 12px;">**All fields are required.</p>
                    <div>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Name" id="fullname" style="height:50px;">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter Email" id="email" style="height:50px;">
                                <span style="color: red; font-style: italic; font-size: 12px;">*Your email will not be published.</span>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" id="comment"  placeholder="Enter Comment"></textarea>
                              </div>
                            <button type="submit" class="btn btn-dark" style="height:50px;width:100%;">Send Comment</button>
                        </form>
                    </div>
                    <div class="all-comments-container">
                        <p class="sidebar-caption">All Comments</p>
                        <div class="row">
                            <div class="col-xs-3">
                                <img src="{{asset('img/user-avatar.svg')}}" alt="" width="auto" height="100">
                            </div>
                            <div class="col-xs-9">
                                <p style="font-weight: bold;">Bernard Liberty</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vitae veniam, perferendis iste sunt a id nesciunt aut dolore unde architecto quod commodi, quibusdam maxime. Praesentium impedit facilis eius exercitationem.</p>
                            </div>
                            <div class="col-xs-3">
                                <img src="{{asset('img/user-avatar.svg')}}" alt="" width="auto" height="100">
                            </div>
                            <div class="col-xs-9">
                                <p style="font-weight: bold;">Bernard Liberty</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vitae veniam, perferendis iste sunt a id nesciunt aut dolore unde architecto quod commodi, quibusdam maxime. Praesentium impedit facilis eius exercitationem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div>
                    <p class="sidebar-caption">Recommended Posts</p>
                    <div class="recommended-posts">
                        <div>
                            <div class="col-xs-4">
                                <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid img-thumbnail"></p>
                            </div>
                            <div class="col-xs-8">
                                <span class="sidebar-title-2">10 Ways To Check For Cash Leak In Your Business</span>
                                <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-category">Accounting</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="col-xs-4">
                                <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid img-thumbnail"></p>
                            </div>
                            <div class="col-xs-8">
                                <span class="sidebar-title-2">10 Ways To Check For Cash Leak In Your Business</span>
                                <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-category">Accounting</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="col-xs-4">
                                <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid img-thumbnail"></p>
                            </div>
                            <div class="col-xs-8">
                                <span class="sidebar-title-2">10 Ways To Check For Cash Leak In Your Business</span>
                                <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-category">Accounting</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="col-xs-4">
                                <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid img-thumbnail"></p>
                            </div>
                            <div class="col-xs-8">
                                <span class="sidebar-title-2">10 Ways To Check For Cash Leak In Your Business</span>
                                <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-category">Accounting</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="newsletter-section">
                    <p class="sidebar-caption">Email Newsletter</p>
                    <p>Sign up to receive email updates and to hear what's going on.</p>
                    <div>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Name" id="fullname" style="height:50px;">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter Email" id="email" style="height:50px;">
                            </div>
                            <button type="submit" class="btn btn-dark" style="height:50px;width:100%;">Subscribe to newsletter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	{{-- @include('__includes.news') --}}

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
	<script type="text/javascript">
		// load modules
        // loadGlobalNews();
        fetchPost(id);


        //load post
        function fetchPost(id) {
            console.log(id);
        }
        // load global news
        // function loadGlobalNews() {
        //     $.get('{{ url('load/global/news') }}', function(data) {
        //         $(".display-news").html("");
        //         var sn = 0;
        //         $.each(data, function(index, val) {
        //             sn++;
        //             $(".display-news").append(`
        //                 <div class="col-sm-12 g-margin-b-30--xs g-margin-b-10--md">
        //                     <!-- News -->
        //                     <article>
        //                         <img width="90%" height="260" style="box-shadow:0px 0px 4px 0px #CCC;border-radius:4px;" src="${val.urlToImage}" alt="Image">
        //                         <div class="g-bg-color--white g-box-shadow__dark-lightest-v2">
        //                             <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">${val.title}</p>
        //                             <h3 class="g-font-size-22--xs g-letter-spacing--1"><h3>
        //                             <p>${val.description}</p>
        //                         </div>
        //                     </article>
        //                     <!-- End News -->
        //                 </div>
        //             `);

        //             if(sn > 4){
        //                 // void loop
        //                 return false;
        //             }
        //         });
        //     });
        // }
	</script>
@endsection
