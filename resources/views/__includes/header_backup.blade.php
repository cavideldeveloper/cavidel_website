<input type="hidden" value="{{ csrf_token() }}" id="token">
<!--========== HEADER ==========-->
<header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
    <!-- Navbar -->
    <div class="s-header__navbar">
        <div class="s-header__container">
            <div class="s-header__navbar-row">
                <div class="s-header__navbar-row-col">
                    <!-- Logo -->
                    <div class="s-header__logo">
                        <a href="{{ url('/') }}" class="s-header__logo-link">
                            <img class="s-header__logo-img s-header__logo-img-default" style="position: absolute;left: 0;top: -3rem;" width="120" height="auto" src="img/cavidel-logo-white.png" alt="{{env("APP_NAME") }} Logo">
                            <img class="s-header__logo-img s-header__logo-img-shrink" width="100" height="auto" src="img/cavidel-logo.png" alt="{{env("APP_NAME") }} Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
                <div class="s-header__navbar-row-col">
                    <ul class="new-menu-bar">
                        {{-- <li class="new-menu-link"><a href="{{ url('blog') }}">Blog</a></li> --}}
                        <li class="new-menu-link"><a href="{{ url('contact') }}" class="g-font-weight--500">CONTACT</a></li>
                        <li class="new-menu-link dropdown">
                            <a href="javascript:void(0);" class="g-font-weight--500">
                                OUR BUSINESS
                                <div class="container dropdown-menu">
                                    <div class="row">
                                        <!-- Plan -->
                                        <div class="col-md-12">
                                            <div class="row g-margin-l-5--sm  g-margin-b-10--sm">
                                                <div class="col-sm-6">
                                                    <h5 class="g-font-size-16--xs g-font-weight--700 g-margin-t-10--sm">
                                                        SERVICES
                                                    </h5>
                                                    <ul class="list-unstyled g-margin-l-0--sm">
                                                        <li class="g-margin-b-20--sm">
                                                            <a href="{{ url('services') }}">Business Analysis</a></li>
                                                        <li class="g-margin-b-20--sm">
                                                            <a href="{{ url('services') }}">Software Development</a></li>
                                                        <li class="g-margin-b-20--sm">
                                                            <a href="{{ url('services') }}">Software Customization</a></li>
                                                        <li class="g-margin-b-20--sm">
                                                            <a href="{{ url('services') }}">Process Engineering</a></li> 
                                                        
                                                        <li class="g-margin-b-20--sm">
                                                            <a href="{{ url('services') }}">Consultancy & Training</a></li>
                                                        <li class="g-margin-b-20--sm">
                                                            <a href="{{ url('services') }}">Support Services</a></li> 
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5 class="g-font-size-16--xs g-font-weight--700 g-margin-t-10--sm">
                                                        PRODUCTS
                                                    </h5> 
                                                    <ul class="list-unstyled g-margin-l-0--sm">
                                                        <li class="g-margin-b-20--sm"><a href="{{ url('officemate') }}">OfficeMate (ERP)</a></li>
                                                        <li class="g-margin-b-20--sm"><a href="{{ url('tims') }}">TIMS</a></li>
                                                        <li class="g-margin-b-20--sm"><a href="{{ url('catss') }}">CATSS</a></li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="new-menu-link dropdown">
                            <a href="javascript:void(0);" class="g-font-weight--500">
                                ABOUT US
                                <div class="container dropdown-menu">
                                    <div class="row">
                                        <!-- Plan -->
                                        <div class="col-md-12">
                                            <div class="row g-margin-l-5--sm  g-margin-b-10--sm">
                                                <div class="col-sm-6">
                                                    <h5 class="g-font-size-16--xs g-font-weight--700 g-margin-t-10--sm">
                                                        ABOUT CAVIDEL
                                                    </h5>
                                                    <ul class="list-unstyled g-margin-l-0--sm">
                                                        <li class="g-margin-b-20--sm"><a href="{{ url('about') }}">Our Company</a></li>
                                                        <li class="g-margin-b-20--sm"><a href="{{ url('team') }}">Our Team</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5 class="g-font-size-16--xs g-font-weight--700 g-margin-t-10--sm">
                                                        OUR SOLUTIONS
                                                    </h5>
                                                    <ul class="list-unstyled g-margin-l-0--sm">
                                                        <li><a href="{{ url('products') }}"></a></li>
                                                        <li class="g-margin-b-20--sm"><a href="{{ url('officemate-automation') }}">Office Automation</a></li>
                                                        <li class="g-margin-b-20--sm"><a href="{{ url('web-development') }}">Web Development</a></li>
                                                        <li class="g-margin-b-20--sm"><a href="{{ url('mobile-development') }}">Mobile Development</a></li>
                                                        <li class="g-margin-b-20--sm"><a href="{{ url('payment-integration') }}">Payment Integration</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="new-menu-link"><a href="{{ url('/') }}" class="g-font-weight--500">HOME</a></li>
                    </ul>

                    <!-- Trigger -->
                    <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                        <span class="s-header__trigger-icon"></span>
                        <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                            <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                        </svg>
                    </a>
                    <!-- End Trigger -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->


    <!-- Overlay -->
    <div class="s-header-bg-overlay js__bg-overlay">
        <!-- Nav -->
        <nav class="s-header__nav js__scrollbar">
            <div class="container-fluid" id="mobile-menu">
                <!-- Menu List -->                                
                <ul class="list-unstyled s-header__nav-menu">
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{ url('/') }}">Home</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{ url('team') }}">Our Team</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{ url('about') }}">Our Company</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{ url('services') }}">Our Services</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{ url('products') }}">Our Products</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{ url('contact') }}">Contact Us</a></li>


                </ul>
                <!-- End Menu List -->
{{-- 
                <!-- Menu List -->                                
                <ul class="list-unstyled s-header__nav-menu">
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider -is-active" href="{{ url('services') }}">Our Services</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_app_landing.html">Our Products</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_portfolio.html">Portfolio</a></li>
                </ul>
                <!-- End Menu List --> --}}
            </div>
        </nav>
        <!-- End Nav -->
        
        <!-- Action -->
        <ul class="list-inline s-header__action s-header__action--lb">
            <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a></li>
            <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li>
        </ul>
        <!-- End Action -->

        <!-- Action -->
        <ul class="list-inline s-header__action s-header__action--rb">
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="#">
                    <i class="g-padding-r-5--xs ti-facebook"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                </a>
            </li>
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="#">
                    <i class="g-padding-r-5--xs ti-twitter"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                </a>
            </li>
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="#">
                    <i class="g-padding-r-5--xs ti-instagram"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                </a>
            </li>
        </ul>
        <!-- End Action -->
    </div>
    <!-- End Overlay -->


</header>
<!--========== END HEADER ==========-->