@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | CATSS
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')
    @include('__includes.parallax-process-catss')

    <!-- Plan -->
    <section id="product-3"></section>
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="g-margin-b-60--xs">
                <p class="text-uppercase g-text-center--xs g-font-size-28--xs g-font-weight--700 g-color--primary g-margin-b-30--xs g-margin-l-20--xs">
                    <img src="{{asset('img/products/catss.png')}}" width="auto" height="80">
                </p>
            </div>
            <div class="row g-row-col--5">
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-user"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"> Starter Pack</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-40--xs">
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Multi-instrument trading – Equities, fixed income, foreign exchange and derivatives
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Mark-to-market valuation
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trading position tracking
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Online real-time trade profitability
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Multi-trading style – Matching, anonymous firm orders, request for quote and click to trade
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Counterparty limit setting
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Market closing price display
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio dashboard
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Discussion forum
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Broker-client trading
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Proprietary trading
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Real-time trading profitability
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio valuation
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Winners board
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Market summary showing market price average, no. of trades and volume
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Tracking of active dealers
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Live price streaming from exchanges
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Watch-list setup
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Order book mgt
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Order processing based on price limits
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Cash deposit 
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Cash withdrawal
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Client profile update
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Auctions
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Customer bids
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Trade activity log
                                </li>
                            </ul>

                            <button type="submit" onclick="showOrderModal()" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Request a Demo</button>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->

                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-cloud"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">
                                Premium
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-40--xs">
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Multi-instrument trading – Equities, fixed income, foreign exchange and derivatives
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Mark-to-market valuation
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trading position tracking
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Online real-time trade profitability
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Multi-trading style – Matching, anonymous firm orders, request for quote and click to trade
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Counterparty limit setting
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Market closing price display
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio dashboard
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Discussion forum
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Broker-client trading
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Proprietary trading
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Real-time trading profitability
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio valuation
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Winners board
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Market summary showing market price average, no. of trades and volume
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Tracking of active dealers
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Live price streaming from exchanges
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Watch-list setup
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Order book mgt
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Order processing based on price limits
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Cash deposit 
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Cash withdrawal
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Client profile update
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Auctions
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Customer bids
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-minus"></i>
                                    Trade activity log
                                </li>
                            </ul>

                            <button type="submit" onclick="showOrderModal()" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Request a Demo</button>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
                
                <!-- Plan -->
                <div class="col-md-4">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-cloud-up"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">
                                Enterprise
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-40--xs">
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Multi-instrument trading – Equities, fixed income, foreign exchange and derivatives
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Mark-to-market valuation
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trading position tracking
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Online real-time trade profitability
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Multi-trading style – Matching, anonymous firm orders, request for quote and click to trade
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Counterparty limit setting
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Market closing price display
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio dashboard
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Discussion forum
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Broker-client trading
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Proprietary trading
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Real-time trading profitability
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio valuation
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Winners board
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Market summary showing market price average, no. of trades and volume
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Tracking of active dealers
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Live price streaming from exchanges
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Watch-list setup
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Order book mgt
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Order processing based on price limits
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Cash deposit 
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Cash withdrawal
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Client profile update
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Auctions
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Customer bids
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trade activity log
                                </li>
                            </ul>

                            <button type="submit" onclick="showOrderModal()" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Request a Demo</button>
                        </div>
                    </div>
                </div>
                <!-- End Plan -->
            </div>
        </div>
    </div>
    <!-- End Plan -->

    <!-- Show request software form -->
    <div class="modal fade" id="show-request-form" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Send a request, We are always available to take your order.</h4>
          </div>
          <div class="modal-body">
            <form method="POST" onsubmit="return sendNewRequest()">
                {{ @csrf_field() }}
                <div class="form-group">
                    <label for="names">Enter Name</label>
                    <input type="text" id="names" name="names" class="form-control" placeholder="Enter names here" required="">
                </div>
                <div class="form-group">
                    <label for="software">Select Software Category</label>
                    <select class="form-control select-2" style="width: 100%;" name="software[]" id="software" multiple="multiple"></select>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input class="form-control" name="email" id="email" placeholder="Enter a contact email">
                </div>
                <div class="form-group">
                    <label for="email">Type a message</label>
                    <textarea class="form-control" name="message" id="message" placeholder="Type a message..." rows="2" cols="8"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-info">Send Request</button>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <div class="pull-right">
              <button class="btn btn-flat" type="button" data-dismiss="modal">
                close
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('__includes.footer')
@endsection

{{--  scripts --}}
@section('scripts')
	<script type="text/javascript">
		// display products
        fetchProducts();

        // place new order
        function showOrderModal() {
            // modal
            $("#show-request-form").modal();
        }

        // load products
        function fetchProducts() {
            fetch("{{url('/fetch/all/products')}}", {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                }
            }).then(r => {
                return r.json();
            }).then(data => {
                $("#software").html("");
                $.each(data, function(index, val) {
                    // console.log(val);
                    $("#software").append(`
                        <option value="${val.id}"> ${val.name} </option>
                    `);
                });

                // init select 2
                $(".select-2").select2();
            }).catch(err => {
                console.log(JSON.stringify(err));
            })
        }

        // send contact message
        function sendNewRequest() {
            var _token      = $("input[name=_token]").val();
            var names       = $("#names").val();
            var software    = $("#software").val();
            var email       = $("#email").val();
            var message     = $("#message").val();

            fetch("{{url('send/order/request')}}", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({_token, names, software, email, message})
            }).then(r => {
                return r.json();
            }).then(val => {
                if(val.status == "success"){
                    swal(
                        "Ok",
                        val.message,
                        val.status
                    );
                    $("#show-request-form").modal("hide");
                }
            }).catch(err => {
                console.log(JSON.stringify(err));
            })

            // void form
            return false;
        }
	</script>
@endsection