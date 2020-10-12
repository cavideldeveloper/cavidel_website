@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Blog
@endsection

@push('styles')
    <style>
        .blog-btn-container {
            padding: 10px;
            width: auto;
            display:flex;
            justify-content: center;
        }

        .controls-item {
            display: inline-block;
        }

        .btn {
            margin: 1px;
        }

    </style>
@endpush
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
        {{-- <div class="row">
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
        </div> --}}
        <div class="row post-holder">
            <div class="col-md-8">
                <div class="row category-container">
                    <div class="col-sm-3"><a href="javascript:void(0);" onclick="fetchAllPosts()"><span class="categories-list">All Categories</span></a></div>
                    <div class="col-sm-2"><a href="javascript:void(0);" onclick="fetchAllCategoryPosts(1)"><span class="categories-list">Technology</span></a></div>
                    <div class="col-sm-2"><a href="javascript:void(0);" onclick="fetchAllCategoryPosts(2)"><span class="categories-list">Accounting</span></a></div>
                    <div class="col-sm-2"><a href="javascript:void(0);" onclick="fetchAllCategoryPosts(3)"><span class="categories-list">Business</span></a></div>
                    <div class="col-sm-3"><a href="javascript:void(0);" onclick="fetchAllCategoryPosts(4)"><span class="categories-list">Product News</span></a></div>
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
                <div class="blog-btn-container ">
                    <div id="pagination">
                        {{-- <a href="javascript:void(0);">&laquo;</a>
                        <a href="javascript:void(0);">1</a>
                        <a class="active" href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="javascript:void(0);">&raquo;</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <p class="sidebar-caption">Trending Posts</p>
                    <div id="load-all-posts-by-views">

                    </div>
                    {{-- <div class="recommended-posts">
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
                    </div> --}}
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
        //load module
        fetchAllPosts();
        fetchAllPostsByViews();

        //trim post content
        function truncateString(str, num) {
            if (str.length <= num) {
                return str
            }
            return str.slice(0, num) + '...'
        }



        //load posts from a category
        function fetchAllCategoryPosts(category_id) {
            fetch(`{{ url('/get/all/category/posts') }}/${category_id}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                },
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results);
                state.querySet = results;
                displayResult();
                // $("#load-all-posts").html("");
                // $.each(results, function(index, val) {
                //     $("#load-all-posts").append(`
                //         <div class="post-container">
                //             <div class="featured-image">
                //                 <p><img src="http://127.0.0.1:8334/${val.featuredImage}" alt="" class="img-fluid rounded" style="width:720px; height:400px;"></p>
                //             </div>
                //             <div>
                //                 <p><span class="post-category">${val.category}</span></p>
                //                 <p class="post-title">${val.title}</p>
                //                 <p><span class="post-author">${val.author}</span> - <span class="post-date">${moment(val.created_at).format('LL')}</span></p>
                //                 <p class="post-body">${truncateString(val.postBody, 500)}<a href="">Read More</a></p>
                //             </div>
                //         </div>
                //     `);
                // });
            }).catch(err => {
                console.log(err);
            });
        }

        const state = {
            querySet: [],
            page: 1,
            rows: 3,
            window: 5,
        };

        function fetchAllPosts() {
            console.log("listening");
            fetch(`{{ url('/get/all/posts') }}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                },
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results);
            state.querySet = results;
            displayResult();
            }).catch(err => {
                console.log(err);
            });
        }

        function displayResult() {
            $("#load-all-posts").html("");
            const data = pagination(state.querySet, state.page, state.rows);
            const myList = data.querySet;
            console.log(myList);
            $.each(myList, function(index, val) {
                $("#load-all-posts").append(`
                    <div class="post-container">
                        <div class="featured-image">
                            <p><img src="http://127.0.0.1:8334/${val.featuredImage}" alt="" class="img-fluid rounded" style="width:720px; height:400px;"></p>
                        </div>
                        <div>
                            <p><span class="post-category">${val.category}</span></p>
                            <a href="/${val.id}"><p class="post-title">${val.title}</p></a>
                            <p><span class="post-author">${val.author}</span> - <span class="post-date">${moment(val.created_at).format('LL')}</span></p>
                            <p class="post-body">${truncateString(val.postBody, 500)}<a href="/${val.id}">Read More</a></p>
                        </div>
                    </div>
                `);
            });
            pageButtons(data.pages);
        }

        function pagination(querySet, page, rows) {

            const trimStart = (page - 1) * rows;
            const trimEnd = trimStart + rows;

            const trimmedData = querySet.slice(trimStart, trimEnd);

            const pages = Math.round(querySet.length / rows);

            return {
                'querySet': trimmedData,
                'pages': pages,
            }
        }

        function pageButtons(pages) {
            console.log('im here');
            const wrapper = document.getElementById('pagination');

            wrapper.innerHTML = ``;
            console.log('Pages:', pages);

            let maxLeft = (state.page - Math.floor(state.window / 2));
            let maxRight = (state.page + Math.floor(state.window / 2));

            if (maxLeft < 1) {
                maxLeft = 1;
                maxRight = state.window;
            }

            if (maxRight > pages) {
                maxLeft = pages - (state.window - 1);

                if (maxLeft < 1){
                    maxLeft = 1;
                }
                maxRight = pages;
            }



            for (let page = maxLeft; page <= maxRight; page++) {
                wrapper.innerHTML += `<button value=${page} class="page btn btn-sm btn-outline-info" style="margin:1px;padding:10px;">${page}</button>`
            }

            if (state.page != 1) {
                wrapper.innerHTML = `<button value=${1} class="page btn btn-sm btn-outline-info" style="margin:1px;padding:10px;">&laquo;</button>` + wrapper.innerHTML
            }

            if (state.page != pages) {
                wrapper.innerHTML += `<button value=${pages} class="page btn btn-sm btn-outline-info" style="margin:1px;padding:10px;">&raquo;</button>`
            }

            $('.page').on('click', function() {
                // $('.loyalty-body').empty();
                $("#load-all-posts").empty();

                state.page = Number($(this).val());
                console.log(state.page);

                displayResult();

                $("[value="+ state.page+"]").removeClass("btn-outline-info");
                $("[value="+ state.page+"]").addClass("btn-info");
            })

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
                        <div class="recommended-posts">
                            <div class="featured-image">
                                <p><img src="http://127.0.0.1:8334/${val.featuredImage}" alt="" class="img-fluid rounded" style="width:720px; height:auto;"></p>
                            </div>
                            <div>
                                <span class="post-category">${val.category}</span>
                                <a href="/${val.id}"><p class="sidebar-title">${val.title}</p></a>
                                <p><span class="post-author">${val.author}</span> - <span class="post-date">${moment(val.created_at).format('LL')}</span></p>
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
