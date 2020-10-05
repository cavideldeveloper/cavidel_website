@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Blog
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')

    <!--========== PROMO BLOCK ==========-->
    <div class="js__parallax-window" style="background: url(img/1920x1080/02.jpg) 5% 0 no-repeat fixed; height: 100px;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aliquid ullam debitis excepturi, non cupiditate eum porro doloribus adipisci perspiciatis. Ab odio quisquam veniam similique, aliquam et esse libero quos. --}}
        </div>
    </div>
    
    <div class="container blog-container">
        <div class="row">
            <div>
                <p class="sidebar-caption">Trending Posts</p>
                <div class="col-md-6">
                    <div>
                        <div class="col-xs-8">
                            <p class="sidebar-title">10 Ways To Check For Cash Leak In Your Business</p>
                            <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-category">Accounting</span></p>
                        </div>
                        <div class="col-xs-4">
                            <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid img-thumbnail"></p>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-8">
                            <p class="sidebar-title">10 Ways To Check For Cash Leak In Your Business</p>
                            <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-category">Accounting</span></p>
                        </div>
                        <div class="col-xs-4">
                            <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid img-thumbnail"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <div class="col-xs-8">
                            <p class="sidebar-title">10 Ways To Check For Cash Leak In Your Business</p>
                            <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-category">Accounting</span></p>
                        </div>
                        <div class="col-xs-4">
                            <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid img-thumbnail"></p>
                        </div>
                    </div>
                    <div>
                        <div class="col-xs-8">
                            <p class="sidebar-title">10 Ways To Check For Cash Leak In Your Business</p>
                            <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-category">Accounting</span></p>
                        </div>
                        <div class="col-xs-4">
                            <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid img-thumbnail"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row post-holder">
            <div class="col-md-8">
                <div class="row category-container">
                    <div class="col-sm-3"><a href=""><span class="categories-list">All Categories</span></a></div>
                    <div class="col-sm-2"><a href=""><span class="categories-list">Technology</span></a></div>
                    <div class="col-sm-2"><a href=""><span class="categories-list">Accounting</span></a></div>
                    <div class="col-sm-2"><a href=""><span class="categories-list">Business</span></a></div>
                    <div class="col-sm-3"><a href=""><span class="categories-list">Product News</span></a></div>
                </div>
                <div id="load-all-posts">
                    {{-- <div class="post-container">
                        <div class="featured-image">
                            <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid rounded"></p>
                        </div>
                        <div>
                            <p><span class="post-category">Accounting</span></p>
                            <p class="post-title">10 Ways To Check For Cash Leak In Your Business</p>
                            <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-date">June 6, 2020</span></p>
                            <p class="post-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam id iste consectetur aut commodi, vitae rem in laboriosam maiores error atque a facere voluptate tempora recusandae saepe repellendus nisi debitis? <a href="">Read More</a></p>
                        </div>  
                    </div>
                    
                    <tr>
                        <td>${val.id}</td>
                        <td>${val.title}</td>
                        <td>${val.author}</td>
                        <td>${val.category}</td>
                        <td>${val.no_of_comments}</td>
                        <td>${moment(val.created_at).format('LL')}</td>
                        <td><a href="javascript:void(0);" onclick="fetchOnePost(${val.id})"><span class="fa fa-pencil-square-o"  style="color: orange; font-size:16px;"></span></a> | <a href="javascript:void(0);" onclick="deletePost(${val.id})"><span class="fa fa-trash"  style="color: red; font-size:16px;"></span></a></td>
                    </tr>
                    <div class="post-container">
                        <div class="featured-image">
                            <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid rounded"></p>
                        </div>
                        <div class="post-info">
                            <p><span class="post-category">Accounting</span></p>
                            <p class="post-title">10 Ways To Check For Cash Leak In Your Business</p>
                            <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-date">June 6, 2020</span></p>
                            <p class="post-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam id iste consectetur aut commodi, vitae rem in laboriosam maiores error atque a facere voluptate tempora recusandae saepe repellendus nisi debitis? <a href="">Read More</a></p>
                        </div>  
                    </div>
                    <div class="post-container">
                        <div class="featured-image">
                            <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid rounded"></p>
                        </div>
                        <div>
                            <p><span class="post-category">Accounting</span></p>
                            <p class="post-title">10 Ways To Check For Cash Leak In Your Business</p>
                            <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-date">June 6, 2020</span></p>
                            <p class="post-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam id iste consectetur aut commodi, vitae rem in laboriosam maiores error atque a facere voluptate tempora recusandae saepe repellendus nisi debitis? <a href="">Read More</a></p>
                        </div>  
                    </div> --}}
                </div>

                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a class="active" href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <p class="sidebar-caption">Recommended Posts</p>
                    <div class="recommended-posts">
                        <div class="featured-image">
                            <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid rounded"></p>
                        </div>
                        <div>
                            <span class="post-category">Accounting</span>
                            <p class="sidebar-title">10 Ways To Check For Cash Leak In Your Business</p>
                            <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-date">June 6, 2020</span></p>
                        </div>
                    </div>
                    <div class="recommended-posts">
                        <div class="featured-image">
                            <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid rounded"></p>
                        </div>
                        <div>
                            <span class="post-category">Accounting</span>
                            <p class="sidebar-title">10 Ways To Check For Cash Leak In Your Business</p>
                            <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-date">June 6, 2020</span></p>
                        </div>
                    </div>
                    <div class="recommended-posts">
                        <div class="featured-image">
                            <p><img src="https://via.placeholder.com/720x400.png" alt="" class="img-fluid rounded"></p>
                        </div>
                        <div>
                            <span class="post-category">Accounting</span>
                            <p class="sidebar-title">10 Ways To Check For Cash Leak In Your Business</p>
                            <p><span class="post-author">Damilola Olaribigbe</span> - <span class="post-date">June 6, 2020</span></p>
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
        //load module
        fetchAllPosts();

        //trim post content
        function truncateString(str, num) {
            if (str.length <= num) {
                return str
            }
            return str.slice(0, num) + '...'
        }

        //load all posts
        function fetchAllPosts() {
            // console.log("listening");{{ url('127.0.0.1:80/api/blog/posts') }}
            fetch(`{{ url('/get/all/posts') }}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                },
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results);
                $("#load-all-posts").html("");
                $.each(results, function(index, val) {
                    $("#load-all-posts").append(`
                        <div class="post-container">
                            <div class="featured-image">
                                <p><img src="https://cavidel.officemate.ng/${val.featuredImage}" alt="" class="img-fluid rounded"></p>
                            </div>
                            <div>
                                <p><span class="post-category">${val.category}</span></p>
                                <p class="post-title">${val.title}</p>
                                <p><span class="post-author">${val.author}</span> - <span class="post-date">${moment(val.created_at).format('LL')}</span></p>
                                <p class="post-body">${truncateString(val.postBody, 100)}<a href="">Read More</a></p>
                            </div>  
                        </div>
                    `);
                });
            }).catch(err => {
                console.log(err);
            }); 
        }
		// load modules
        // loadGlobalNews();

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