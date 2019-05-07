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
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/favicon.png">

        <!-- Slick slider-->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> 

        {{-- Material Icon Fonts  --}}
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
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

            .chat-messages {
                height: 200px;
                border-radius: 0px;
                padding: 0.3em;
                border: 1px solid #ccc;
                background-color: #fff;
                width: 100%;
                overflow: auto;
            }
            .js__trigger {
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

            .js__trigger {
                display: inline-block;
            }
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

        {{-- Modals --}}
        <!-- Chat template-->
        <div id="query-chat" class="modal modal-center fade" tabindex="-1" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="pull-right">
                      <a href="javascript:void(0);" class="btn btn-flat" type="button" data-dismiss="modal">hide</a>
                    </div>
                    <div class="pull-left">
                      Connect Live with Cavidel's Team
                    </div>
                </div>
                <div class="modal-body">
                    <div class="chat-messages"></div>
                    <form class="cavi-chat-form" onsubmit="return sendCaviChatMessage()">
                        <div class="form-group">
                            <textarea id="input-chat-message" cols="1" rows="3" placeholder="Type a message..." class="form-control cavi-area"></textarea>
                        </div>
                        <div class="form-group">
                            {{-- <i class="material-icons">attach_file</i> --}}
                            <button type="submit" class="cavi-btn">
                                Send
                            </button>
                        </div>
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
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkrja0K9YTRtwpiI61uMaWxyNuE9By8qQ"></script> --}}
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/counter.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        {{-- <script type="text/javascript" src="js/components/google-map.min.js"></script> --}}
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.all.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="{{asset('js/preloader.js')}}"></script>
        <script src="{{asset('js/particles.min.js')}}"></script>
        
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

                        // reset form
                        $(".contact-form")[0].reset();

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
                $.get('http://gd.geobytes.com/GetCityDetails', function(data) {
                    siteVisitor(browserInfo, data)
                }).fail(function (err){
                    siteVisitor(browserInfo, {geobytesipaddress: "0.0.0.0"})
                });
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
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
              $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
            });

            // send cavi chat message
            function sendCaviChatMessage() {
                // get user name
                var g_name      = $("#visitor_name").val();
                var g_email     = $("#visitor_email").val();
                var g_subject   = $("#visitor_subject").val();

                // body...
                var message = $("#input-chat-message").val();
                var token   = $("#token").val();

                var params = {
                    _token: token,
                    g_name: g_name,
                    g_email: g_email,
                    g_subject: g_subject,
                    g_message: message
                }

                $.ajax({
                    url: '{{ url("send-chat/message") }}',
                    type: 'POST',
                    dataType: 'json',
                    data: params,
                }).done(function() {
                    // console.log("success");
                    $('.chat-messages').append(`
                        <div class="small alert alert-info" style="text-align: right;">
                            <h5>${g_name}</h5>
                            <p>${message}</p>
                        </div>
                    `);

                    $(".cavi-chat-form")[0].reset();
                    console.log("success");
                }).fail(function() {
                    console.log("error");
                }).always(function() {
                    console.log("complete");
                });

                // return
                return false;
            }

            // start direct chat
            function startLiveChat(){
                var g_name = $("#visitor_name").val();

                if(g_name == ""){
                    // get user email
                    Swal.mixin({
                      input: 'text',
                      confirmButtonText: 'Next &rarr;',
                      showCancelButton: true,
                      progressSteps: ['1', '2', '3']
                    }).queue([
                      {
                        title: 'Hi',
                        text: 'Cavidel will like to know your name'
                      },
                      {
                        title: 'We can talk more',
                        text: 'Cavidel will to have your email address'
                      },
                      {
                        title: 'How can we help?',
                        text: 'Help us find your solution'
                      }
                    ]).then((result) => {
                      if (result.value) {
                        // console.log(result.value);
                        var g_name      = result.value[0];
                        var g_email     = result.value[1];
                        var g_subject   = result.value[2];

                        $("#visitor_name").val(g_name);
                        $("#visitor_email").val(g_email);
                        $("#visitor_subject").val(g_subject);

                        // body...
                        var message = $("#input-chat-message").val();
                        var token   = $("#token").val();
                        var params = {
                            _token: token,
                            g_name: g_name,
                            g_email: g_email,
                            g_subject: g_subject,
                            g_message: g_name + ' wants to chat with Cavidel Support Team'
                        };

                        $.ajax({
                            url: '{{ url("send-chat/request") }}',
                            type: 'POST',
                            dataType: 'json',
                            data: params,
                        }).done(function() {
                            // console.log("success");
                            $('.chat-messages').append(`
                                <div class="small alert alert-info" style="text-align: right;">
                                    <h5>${g_name}</h5>
                                    <p>${g_subject}</p>
                                </div>
                            `);
                            $('.chat-messages').append(`
                                <div class="small alert alert-success">
                                    <h5>Cavidel</h5>
                                    <p>Our Support Team will be with you shortly...</p>
                                </div>
                            `);
                        }).fail(function() {
                            console.log("error");
                        }).always(function() {
                            console.log("complete");
                        });

                        // fire event
                        $("#query-chat").modal({
                            backdrop: true
                        });
                      }
                    });
                }else{
                    // fire event
                    $("#query-chat").modal({
                        backdrop: true
                    });
                }
            }

            // tell a friend
            function shareCaviLink() {
                // fire event
                $("#tell-a-friend").modal({
                    backdrop: true
                });
            }

            // Scroll function courtesy of Scott Dowding; http://stackoverflow.com/questions/487073/check-if-element-is-visible-after-scrolling
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

        @yield('scripts')
    </body>
    <!-- End Body -->
</html>
