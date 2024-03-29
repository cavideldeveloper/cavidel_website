<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="keywords" content="Cavidel Technology" />
        <meta name="description" content="Cavidel Limited">
        <meta name="author" content="cavidel.com">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Google+Sans:400,700" rel="stylesheet">

        {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> --}}

        <!-- Vendor Styles -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('vendor/themify/themify.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('vendor/scrollbar/scrollbar.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('vendor/swiper/swiper.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('vendor/cubeportfolio/css/cubeportfolio.min.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Theme Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/global/global.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{ asset('img/favicon.png') }}">

        <!-- Slick slider-->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

        {{-- Material Icon Fonts  --}}
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

        {{-- cookie-policy --}}
        <link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/>

        {{-- selectize --}}
        <link rel="stylesheet" type="text/css" href="{{asset('css/selectize.css')}}">



        {{-- Google Tracking --}}
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144060456-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-144060456-1');
        </script>
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>
        {{-- <div class="preloader-wrapper">
            <div class="preloader">
                <img src="{{asset('img/loader.gif')}}" alt="loading...">
            </div>
        </div> --}}
        <style type="text/css">
            .cavi-area {
                resize: none;
                border-radius: 0px;
            }

            .cavi-btn {
                border-radius: 0px;
                padding: 0.3em;
                border: 1px solid #ccc;
                background-color: #fff;
                width: 100%;
                text-align: center;
            }



            .js__trigger {
                display: none;
            }

            #officemate-demo-div {
                display: none;
                position: fixed;
                bottom: 0;
                left: 0;
                margin: 20px;
                z-index: 999;
                padding: 1rem;
                background-color: rgba(255,255,255,0.90);
                border:1px thin rgba(1, 118, 255);
                border-radius: 10px;
                box-shadow: 0px 0px 0.5px 0px rgba(0,0,0,0.50);
            }

            #mobile-version-slider {
                display: none;
            }

            #tims-mobile-view {
                display: none;
            }

            #catss-mobile-view {
                display: none;
            }

            @media screen and (max-width: 768px) {
                .client-list img {
                    width: 40px;
                    height: 40px;
                    float: left;
                }

                .new-menu-bar {
                    display: none;
                }

                .all-clients-list {
                    display: none;
                }

                .client-list {
                    display: none;
                }

                .js__trigger {
                    display: inline-block;
                }

                #tims-mobile-view {
                    display: inline-block;
                }

                #tims-web-view {
                    display: none;
                }

                #catss-mobile-view {
                    display: inline-block;
                }

                #catss-web-view {
                    display: none;
                }
            }

            @media screen and (max-width: 768px) {
                #mobile-menu {
                    height: 450px;
                }

                #mobile-version-slider {
                    display: block;
                }
            }

            #animie-container {
              display: flex;
              align-items: center;
              justify-content: center;
              overflow: hidden;
              position: relative;
            }

            .animie-circle {
              border-radius: 50%;
              background-color: deepskyblue;
              width: 45px;
              height: 45px;
              position: absolute;
              opacity: 0;
            }

            .animie-item {
              z-index: 100;
            }

            .animie-circle {
              border-radius: 50%;
              background-color: #212f3cc7;
              width: 60px;
              height: 60px;
              position: absolute;
              opacity: 0;
              animation: scaleIn 4s infinite cubic-bezier(.36, .11, .89, .32);
            }

            @keyframes scaleIn {
              from {
                transform: scale(.5, .5);
                opacity: .5;
              }
              to {
                transform: scale(2.5, 2.5);
                opacity: 0;
              }
            }

            .blog-btn-container {
                padding: 10px;
                width: auto;
                display:flex;
                justify-content: center;
            }
        </style>
        @yield('contents')

        <!-- Share template-->
        <div id="tell-a-friend" class="modal modal-center fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="pull-right">
                      <a href="javascript:void(0);" class="btn btn-flat" type="button" data-dismiss="modal">close</a>
                    </div>
                    <div class="pull-left">
                      Tell your friends about cavidel
                    </div>
                </div>
                <div class="modal-body text-center p-4">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="javascript:void(0);">
                                <i class="fa fa-facebook">facebook</i> <br /> Share on Facebook
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="javascript:void(0);">
                                <i class="fa fa-google">google</i> <br /> Share on Google
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="javascript:void(0);">
                                <i class="fa fa-twitter">twitter</i> <br /> Share on Twitter
                            </a>
                        </div>
                    </div>
                    <br />
                </div>
            </div>
          </div>
        </div>



        {{-- Request modal --}}
        <div id="requestModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-xl">

              <!-- Modal content-->
                <div class="modal-content" style="background-color: #222324; color: #ffffff; border: solid;">
                    {{-- <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        {{-- <h4 class="modal-title text-left">Modal Header</h4> -
                    </div> --}}
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" style="color:  #ffffff">&times;</button>
                        <h4 style="padding-bottom: 20px; color: #ffffff">Make a request</h4>
                        <div class="row" style="padding-left: 30px; padding-right: 30px;">
                            <form method="post" id="dynamic_form">
                                @csrf
                                <h6 style="color: #ffffff">Personal Information</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fullname" style="color:  #ffffff">Full Name:</label>
                                            <input type="text" class="form-control" name="fullname" id="fullname" style="height:40px;" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email" style="color:  #ffffff">Email Address:</label>
                                            <input type="email" class="form-control" name="email" id="email" style="height:40px;" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="phone" style="color:  #ffffff">Phone Number:</label>
                                            <input type="tel" class="form-control" name="phone" id="phone" style="height:40px;" required>
                                        </div>
                                    </div>
                                </div>
                                <h6 style="color:  #ffffff">Business Information</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="businessname" style="color:  #ffffff">Business Name:</label>
                                            <input type="text" class="form-control" name="businessname" id="businessname" style="height:40px;" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="businessnature" style="color:  #ffffff">Nature of Business:</label>
                                            <input type="text" class="form-control" name="businessnature" id="businessnature" style="height:40px;" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="staffnum" style="color:  #ffffff">No. of Staff:</label>
                                            <input type="number" class="form-control" name="staffnum" id="staffnum" style="height:40px;" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="clientnum" style="color:  #ffffff">No. of Customers:</label>
                                            <input type="number" class="form-control" name="clientnum" id="clientnum" style="height:40px;" required>
                                        </div>
                                    </div>
                                </div>
                                <h6 style="color:  #ffffff">Expected Features: (Kindly click on the 'plus' sign to add more feature requests)</h6>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th width="90%"></th>
                                                    <th width="10%"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="expected-features">

                                            </tbody>
                                            {{-- <tfoot>
                                                <tr>
                                                    <td colspan="1" align="right">&nbsp;</td>
                                                    <td>
                                                        <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                                                    </td>
                                                </tr>
                                            </tfoot> --}}
                                        </table>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="border-top: 1px solid #222324;">
                                <span id="result"></span>
                                <button type="submit" name="save" id="save" class="btn btn-info">Submit</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </form>
                    </div>
                </div>

            </div>
        </div>

        <input type="hidden" id="visitor_name" name="">
        <input type="hidden" id="visitor_email" name="">
        <input type="hidden" id="visitor_subject" name="">
        <!-- End Search template-->

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.migrate.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.back-to-top.min.js') }}"></script>
        <script src="{{ asset('vendor/scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('vendor/swiper/swiper.jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/waypoint.min.js') }}"></script>
        <script src="{{ asset('vendor/counterup.min.js') }}"></script>
        <script src="{{ asset('vendor/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.parallax.min.js') }}"></script>
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkrja0K9YTRtwpiI61uMaWxyNuE9By8qQ"></script> --}}
        <script type="text/javascript" src="{{ asset('vendor/jquery.wow.min.js') }}"></script>

        <!-- General Components and Settings -->
        <script src="{{ asset('js/global.min.js') }}"></script>
        <script src="{{ asset('js/components/header-sticky.min.js') }}"></script>
        <script src="{{ asset('js/components/scrollbar.min.js') }}"></script>
        <script src="{{ asset('js/components/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/components/swiper.min.js') }}"></script>
        <script src="{{ asset('js/components/counter.min.js') }}"></script>
        <script src="{{ asset('js/components/portfolio-3-col.min.js') }}"></script>
        <script src="{{ asset('js/components/parallax.min.js') }}"></script>
        {{-- <script type="text/javascript" src="js/components/google-map.min.js"></script> --}}
        <script src="{{ asset('js/components/wow.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.all.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="{{asset('js/preloader.js')}}"></script>
        <script src="{{asset('js/particles.min.js')}}"></script>
        <script src="{{asset('js/select2.min.js')}}"></script>
        <script src="{{asset('js/xmas.js')}}"></script>

        <!-- JS CDN -->
        <!-- jQuery library -->
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            function requestModal() {
                $("#requestModal").modal();
            }

            $(document).ready(function(){

                var count = 1;

                dynamic_field(count);


                // let today = new Date().toISOString().substr(0, 10);
                // document.querySelector("#todoDueDateField").value = today;

                function dynamic_field(number)
                {
                    html = '<tr>';
                    html += '<td style="border-top: 1px solid #222324;"><textarea class="form-control" rows="3" name="feature[]" placeholder="- enter feature -"></textarea></td>';
                    if(number > 1)
                    {
                        html += '<td style="border-top: 1px solid #222324;"><button type="button" name="remove" id="" class="btn btn-link remove"><i class="fa fa-times-circle-o text-danger" style="font-size:20px;"></i></button></td></tr>';
                        $("#expected-features").append(html);
                    }
                    else
                    {
                        html += '<td style="border-top: 1px solid #222324;"><button type="button" name="add" id="add" class="btn btn-link"><i class="fa fa-plus-square-o text-info" style="font-size:20px;"></i></button></td></tr>';
                        $("#expected-features").html(html);
                    }
                }

                $(document).on('click', '#add', function(){
                    count++;
                console.log(count);
                    dynamic_field(count);


                });

                $(document).on('click', '.remove', function(){
                    count--;
                    $(this).closest("tr").remove();
                });

                $('#dynamic_form').on('submit', function(event){
                    event.preventDefault();
                    $.ajax({
                        url:'/make/request',
                        method:'post',
                        data:$(this).serialize(),
                        dataType:'json',
                        beforeSend:function(){
                            $('#save').attr('disabled','disabled');
                        },
                        success:function(data)
                        {
                            // console.log(data);
                            if(data.error)
                            {
                                var error_html = 'An Error Occured. Try Again.';

                                $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                            }
                            else
                            {
                                dynamic_field(1);
                                console.log(data);
                                $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                                document.getElementById("dynamic_form").reset();
                    // location.reload(true);
                            }
                            $('#save').attr('disabled', false);
                        }
                    })

                    return false;
                });

                return false;
            });
          

        </script>

        <!--========== END JAVASCRIPTS ==========-->
        <script type="text/javascript">
            // subscribe client
            function subscribeClient() {
                var token = $("#token").val();
                var email = $("#s-email").val();

                var params = {
                    _token: token,
                    email: email,
                    client_ip: "none",
                    client_browser: "none",
                    client_device: "none"
                };

                $.post('{{ url('client/subscribe/email') }}', params, function(data, textStatus, xhr) {
                    if(data.status == "success"){
                        swal(
                            "subscribed",
                            data.message,
                            data.status
                        );

                        // reset form
                        $(".subscribe-form")[0].reset();
                    }else{
                        swal(
                            "oops",
                            data.message,
                            data.status
                        );
                    }
                });

                // return
                return false;
            }

            // contact site
            function contactSupport() {
                document.getElementById("submit_contact_form").disabled = true;

                var token   = $("#token").val();
                var name    = $("#c-name").val();
                var email   = $("#c-email").val();
                var phone   = $("#c-phone").val();
                var message = $("#c-message").val();

                var params = {
                    _token: token,
                    email: email,
                    name: name,
                    phone: phone,
                    message: message,
                    client_ip: "none",
                    client_browser: "none",
                    client_device: "none"
                };

                $.post('{{ url('client/contact/support') }}', params, function(data, textStatus, xhr) {
                    if(data.status == "success"){
                        swal(
                            "Sent!",
                            data.message,
                            data.status
                        );
                        // $('#submit_contact_form').attr('disabled', false);
                        document.getElementById("submit_contact_form").disabled = false;

                        // reset form
                        $(".contact-form")[0].reset();

                        fetch(`{{url('clear/contact/mail/queue')}}`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({_token: token})
                        }).then(r => {
                            return r.json();
                        }).then(results => {
                            console.log(results)
                        }).catch(err => {
                            console.log(JSON.stringify(err));
                        })

                    }else{
                        swal(
                            "oops",
                            data.message,
                            data.status
                        );
                    }
                });

                // return
                return false;
            }

            // get geolocation
            function getGeolocation(browserInfo) {
                fetch('http://gd.geobytes.com/GetCityDetails', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        'Access-Control-Allow-Origin': '*'
                    },
                    mode: 'no-cors'
                }).then(r => {
                    return r.json();
                }).then(results => {
                    console.log(results)
                    siteVisitor(browserInfo, results)
                }).catch(err => {
                    console.log(JSON.stringify(err));
                    siteVisitor(browserInfo, {geobytesipaddress: "0.0.0.0"})
                })
            }

            // site visitor
            function siteVisitor(browserInfo, data) {
                var token           = $("#token").val();
                var visitor_ip      = data.geobytesipaddress;
                var visitor_browser = browserInfo.name+' '+browserInfo.version;
                var visitor_device  = browserInfo.os;
                var status          = "active";

                var params = {
                    _token: token,
                    visitor_ip: visitor_ip,
                    visitor_browser: visitor_browser,
                    visitor_device: visitor_device,
                    status: status,
                };

                $.post('{{ url('new/site/visitor') }}', params, function(data, textStatus, xhr) {
                    // console log value
                    console.log(data);
                });
            }

            // get geolocation info
            getGeolocation(browserInfo());

            $('.new-menu-bar .new-menu-link.dropdown').hover(function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(100);
            }, function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(100);
            });



            /
            // tell a friend
            function shareCaviLink() {
                // fire event
                $("#tell-a-friend").modal({
                    backdrop: true
                });
            }

            // scoll animate
            $(document).ready(function() {
                // Check if element is scrolled into view
                function isScrolledIntoView(elem) {
                    var docViewTop = $(window).scrollTop();
                    var docViewBottom = docViewTop + $(window).height();

                    var elemTop = $(elem).offset().top;
                    var elemBottom = elemTop + $(elem).height();

                    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
                }

                // If element is scrolled into view, fade it in
                $(window).scroll(function() {
                    $('.animated').each(function() {
                      if (isScrolledIntoView(this) === true) {
                        $(this).addClass('fadeInLeft');
                      }
                    });
                });
            });
        </script>
        <script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"colors":{"popup":{"background":"#f0edff","text":"#000000","border":"#5e65c2"},"button":{"background":"#5e65c2","text":"#ffffff"}}, "transparency":"25","content":{"href":"cavidel.com/cookie-policy"}})});
        </script>
        <script type="text/javascript">
            $(document).ready(function(e){
                $("#officemate-demo-div").show().fadeIn();
                // $("#officemate-demo-div").animate();
            })
        </script>
        <script src="{{asset('js/selectize.js')}}"></script>
        @yield('scripts')
    </body>
    <!-- End Body -->
</html>
