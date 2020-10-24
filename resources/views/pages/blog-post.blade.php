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
                {{-- {{ dd($post_id) }} --}}
                <input type="hidden" id="post" value="{{ $post_id }}"/>
                <div class="post-container">
                    {{-- <div class="featured-image"  style="text-align: center;">
                        <p id="featured_image"><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid rounded"></p>
                    </div>
                    <div>
                        <p style="text-align: left;"><span class="post-category" id="post_category">Accounting</span> / <span class="post-author" id="post_auth0r">Damilola Olaribigbe</span> / <span class="post-date">June 6, 2020</span></p>
                        <p class="post-title" id="post_title">10 Ways To Check For Cash Leak In Your Business</p>
                        <p class="post-body text-justify" id="post_body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam id iste consectetur aut commodi, vitae rem in laboriosam maiores error atque a facere voluptate tempora recusandae saepe repellendus nisi debitis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque fugit repellendus voluptas, qui ducimus numquam repudiandae velit error iste laborum quibusdam commodi excepturi blanditiis deleniti quae repellat quia eos fugiat! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio non tenetur vitae, eaque, error vero qui nulla itaque doloribus ducimus temporibus inventore odit cum. Obcaecati fuga et soluta rem sequi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi doloremque, ipsa id fugit fugiat sint? Cumque accusantium laborum esse, commodi sunt iure, consequatur ducimus dolores eum cum, quas harum nulla. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum soluta, dolores eveniet cumque iure quidem. Dolorem veritatis pariatur maiores fugiat repellat perferendis, quasi quae corrupti ad dolorum assumenda magnam praesentium!</p>
                    </div> --}}
                    <div class="featured-image"  style="text-align: center;">
                        <p id="featured_image"><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid rounded"></p>
                    </div>
                    <div>
                        <p style="text-align: left;">
                            <span class="post-category" id="post_category"></span> / <span class="post-author" id="post_author"></span> / <span class="post-date" id="post_date"></span>
                        </p>
                        <p class="post-title" id="post_title"></p>
                        <p class="post-body text-justify" id="post_body"></p>
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
                        <div id="load-all-posts-by-views">

                        </div>
                        {{-- <div>
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
                        </div> --}}
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
	<script type="text/javascript">
		// load modules
        // loadGlobalNews();
        fetchPost();
        updateViews();
        fetchAllPostsByViews();


        //load post
        function fetchPost() {
            var post_id  = $("#post").val();
            console.log(post_id);
            fetch(`{{ url('/fetch/post') }}/${post_id}`).then(r => r.json()).then(result => {
                // $("#edit_postId").val(result.id);
                $("#post_category").html(result.category.category);
                // $("#editFeaturedImage").val(result.featuredImage);
                $("#post_author").html(result.author);
                $("#post_date").html(moment(result.created_at).format('LL'));
                $("#post_title").html(result.title);
                $("#post_body").html(result.postBody);
                // $("#myEditModal").modal();
                // $("#editPost_category").trigger('change');
                // document.getElementById("sendNoteButton").disabled = true;
                // $("#spinner").hide();
                }).catch(err => {
                console.log(err);
           });
        }

        //update views
        function updateViews() {
            var post_id = $('#post').val();
            // console.log("views for "+post_id)
            var _token = '{{ csrf_token() }}';

            // console.log(_token);

            var query = {post_id, _token}
            fetch(`{{ url('/update/post/views') }}/${post_id}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(query)
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results);
                // swal({
                //     title: "Good Job!",
                //     text: "Goals approved and sent to HR successfully!",
                //     icon: "success",
                //     button: "OK!",
                // });
            }).catch(err => {
                console.log(err);
            });
            // $('#fetch_goal').modal('hide');
            return false;
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

        //load posts by views
        function fetchAllPostsByViews() {
            fetch(`{{ url('/get/all/posts/by/views') }}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                },
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results);
                $("#load-all-posts-by-views").html("");
                $.each(results, function(index, val) {
                    $("#load-all-posts-by-views").append(`
                        <div>
                            <div class="col-xs-4">
                                <p><img src="http://127.0.0.1:8334/${val.featuredImage}" alt="" class="img-fluid img-thumbnail"></p>
                            </div>
                            <div class="col-xs-6">
                                <a href="/blog/${val.id}"><span class="sidebar-title-2">${val.title}</span></a>
                                <p><span class="post-author">${val.author}</span> - <span class="post-category">${val.category}</span></p>
                            </div>
                        </div>
                    `);
                });
            }).catch(err => {
                console.log(err);
            });
        }
	</script>
@endsection
