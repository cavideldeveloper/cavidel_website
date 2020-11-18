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
        </div>
    </div>

    <div class="container blog-container">
        <div class="row post-holder">
            <div class="col-md-7">
                <input type="hidden" id="post" value="{{ $post_id }}"/>
                <div class="post-container">
                    <div class="featured-image"  style="text-align: center;">
                        <p id="featured_image">

                        </p>
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
                        <form method="POST" onsubmit="return postComments()" >
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Name" id="fullname" style="height:50px;" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter Email" id="email" style="height:50px;" required>
                                <span style="color: red; font-style: italic; font-size: 12px;">*Your email will not be published.</span>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" id="comment"  placeholder="Enter Comment" required></textarea>
                              </div>
                            <button type="submit" class="btn btn-dark" style="height:50px;width:100%;">Send Comment</button>
                            <p><span id="result"></span></p>
                        </form>
                    </div>
                    <div class="all-comments-container">
                        <p class="sidebar-caption">All Comments</p>
                        <div class="row" id="load-post-comments">

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

                    </div>
                </div>
                {{-- <div class="newsletter-section">
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
                </div> --}}
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
        fetchPost();
        updateViews();
        fetchAllPostsByViews();
        fetchAllPostComments();


        //load post
        function fetchPost() {
            var post_id  = $("#post").val();
            console.log(post_id);
            fetch(`{{ url('/fetch/post') }}/${post_id}`).then(r => r.json()).then(result => {
                // $("#edit_postId").val(result.id);
                $("#post_category").html(result.category.category);
                $("#featured_image").append(`<img src="https://cavidel.officemate.ng/${result.featuredImage}" alt="" class="img-fluid rounded" style="width:720px;height:400px;">`);
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
                method: 'POST',
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
                        <div class="row">
                            <div class="col-xs-4">
                                <p><img src="https://cavidel.officemate.ng/${val.featuredImage}" alt="" class="img-fluid img-thumbnail"></p>
                            </div>
                            <div class="col-xs-8">
                                <a href="/blog/${val.id}/post"><span class="sidebar-title-2">${val.title}</span></a>
                                <p><span class="post-author">${val.author}</span> - <span class="post-category">${val.category}</span></p>
                            </div>
                        </div>
                    `);
                });
            }).catch(err => {
                console.log(err);
            });
        }

        //load comments by post
        function fetchAllPostComments() {
            var post_id  = $("#post").val();
            fetch(`{{ url('/get/post/comments') }}/${post_id}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                },
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results.length);
                if (results.length == 0) {
                    $("#load-post-comments").html("");
                    $("#load-post-comments").html("<h6> No comments yet. Be the first to send a comment.</h6>");
                } else {
                    $("#load-post-comments").html("");
                    $.each(results, function(index, val) {
                        $("#load-post-comments").append(`
                            <div class="col-xs-3">
                                <img src="{{asset('img/user-avatar.svg')}}" alt="" width="auto" height="100">
                            </div>
                            <div class="col-xs-9">
                                <p style="font-weight: bold;">${val.fullName}</p>
                                <p>${val.comment}</p>
                            </div>
                        `);
                    });
                }
            }).catch(err => {
                console.log(err);
            })
        }

        //post comments /save/comment
        function postComments() {
            var postId       = $('#post').val();
            var fullName       = $('#fullname').val();
            var emailAddress       = $('#email').val();
            var comment       = $('#comment').val();

            $.ajax({
                url: "/save/comment",
                type: "POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    postId:postId,
                    fullName:fullName,
                    emailAddress:emailAddress,
                    comment:comment,
                },
                success:function(response){
                    console.log(response);
                    $('#result').html('<div class="alert alert-success"><p>Comment sent successfully!</p></div>');
                },
            });
            fetchAllPostComments();
            // return stop the form from loading
            return false;
        }
	</script>
@endsection
