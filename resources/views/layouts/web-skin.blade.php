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
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>
        @yield('contents')

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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkrja0K9YTRtwpiI61uMaWxyNuE9By8qQ"></script>
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
        <script type="text/javascript" src="js/components/google-map.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.all.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        
        
        <!--========== END JAVASCRIPTS ==========-->

        <script type="text/javascript">
            // load global news
            function loadGlobalNews() {
                $.get('{{ url('load/global/news') }}', function(data) {
                    $(".display-news").html("");
                    var sn = 0;
                    $.each(data, function(index, val) {
                        sn++;
                        $(".display-news").append(`
                            <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                                <!-- News -->
                                <article>
                                    <img class="img-responsive" src="${val.urlToImage}" alt="Image">
                                    <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">${val.title}</p>
                                        <h3 class="g-font-size-22--xs g-letter-spacing--1"><h3>
                                        <p>${val.description}</p>
                                    </div>
                                </article>
                                <!-- End News -->
                            </div>

                        `);

                        if(sn > 2){
                            // void loop
                            return false;
                        }
                    });
                });
            }

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

            // display global news
            loadGlobalNews();
            getGeolocation(browserInfo());
        </script>

        @yield('scripts')
    </body>
    <!-- End Body -->
</html>
