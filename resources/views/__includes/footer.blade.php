<!--========== FOOTER ==========-->
<footer class="g-bg-color--dark">
    <!-- Links -->
    <div class="g-hor-divider__dashed--white-opacity-lightest">
        <div class="container g-padding-y-80--xs">
            <div class="row">
                <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                    <p class="g-font-weight--500 g-color--primary g-font-size-18--xs">Quick Links</p>
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{ url('/') }}">Home</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{ url('/team') }}">About</a></li>
                        {{-- <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{ url('/faq') }}">FAQ</a></li> --}}
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                    <p class="g-font-weight--500 g-color--primary g-font-size-18--xs">Community</p>
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        {{-- <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{ url('/') }}">Twitter</a></li> --}}
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{ url('/') }}">Facebook</a></li>
                        {{-- <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{ url('/') }}">Instagram</a></li> --}}
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://www.linkedin.com/company/cavidel-limited-nigeria" target="_blank">Linkedin</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                    <p class="g-font-weight--500 g-color--primary g-font-size-18--xs">Information</p>
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{ url('/') }}">Subscribe to Our Newsletter</a></li>
                        {{-- <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{ url('/') }}">Privacy Policy</a></li> --}}
                        {{-- <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{ url('/') }}">Terms &amp; Conditions</a></li> --}}
                    </ul>
                </div>
                <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                    <h3 class="g-font-size-18--xs g-color--white">{{ env("APP_NAME") }}</h3>
                    <p class="g-color--white-opacity"> Cavidel Limited is a leading technology and consulting company that specializes in developing business solutions across industries.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="container g-padding-y-50--xs">
        <div class="row">
            <div class="col-xs-6">
                {{-- <a href="{{ url('/') }}">
                    <img src="img/cavidel-logo-white.png" width="120" height="auto" alt="Cavidel Logo">
                </a> --}}
            </div>
            <div class="col-xs-6 g-text-right--xs">
                <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light">Cavidel &copy;  {{ Date("Y") }}
                </p>
            </div>
        </div>
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->

<!-- Back To Top -->
<a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>