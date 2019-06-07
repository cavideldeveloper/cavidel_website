@extends('layouts.web-skin')

{{--  title --}}
@section('title')
	{{ env("APP_NAME") }} | Our Products
@endsection

{{--  contents --}}
@section('contents')
	@include('__includes.header')
    @include('__includes.parallax-process-tims')

    <!-- Plan -->
    <section id="product-2"></section>
    <div class="g-bg-color--sky-light">
        <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="g-margin-b-60--xs">
                <p class="text-uppercase g-text-center--xs g-font-size-28--xs g-font-weight--700 g-color--primary g-margin-b-30--xs g-margin-l-20--xs">
                    <img src="{{asset('img/products/tims-2.png')}}" style="border-radius: 2px;" width="auto" height="80">
                </p>
            </div>
            <div class="row g-row-col--5">
                <!-- Plan -->
                <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                        <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-briefcase"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs"> LOANS & INVESTMENT</h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-40--xs">
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Customer onboarding & KYC
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Personalised marketing
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Multi-currency setup
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    System rate setup
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Multi-branch setup
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Photo & signature capture
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    General ledger accounting
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Management report
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Request and approval workflow
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Alerts & notification
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Payment gateway integration
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Automated End of Day
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Loan origination
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Loan disbursement
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Credit rating
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Fixed interest calculation
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Floating interest calculation
                                </li>
                                
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Recalculation of interest accruals
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Investment booking
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Partial liquidation with increment/decrement
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Termination
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Automated investment advice
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Loan payment schedule
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Account statement
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Interest accrual statement
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Document mgt
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Collateral mgt
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Matured and running loans & investments tracking
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Maturity alerts & notification
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Automated investment advice
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Auto creation of loans & investment account
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
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-exchange-vertical"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">
                                FOREIGN EXCHANGE
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-40--xs">
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    FX trade booking (spot, forward...)
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Multi-branch setup
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trade duplication check
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Request and approval workflow
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Profitability based on weighted average cost
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Realised and unrealised profit calculation
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Auto entries generation and posting
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Alerts & Notifications
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Email approval/rejection
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Payment gateway integration
                                </li>
                                
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Customer request processing
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Multiple transaction settlement
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Receivables and payables tracking
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Position tracking and revaluation
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    FX trade history
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Instant messaging FX trading
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Transaction document management
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Loan advance for customer FX trade
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Bank reconciliation and integration with SWIFT MT940
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trade analysis by currency, volume and profitability
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Daily price list upload and analysis
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Dealer trading limit monitoring
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Counterparty trading limit
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Parameterised accounting entries setup
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    FX limit threshold approval setup
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
                            <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-bar-chart"></i>
                            <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">
                                FIXED INCOME
                            </h3>
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs g-text-left--xs g-margin-l-40--xs">
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trade booking
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trade simulation
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Price-discount conversion
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Price-yield conversion
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Yield-discount conversion
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Counterparty setup
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Settlement bank setup
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Mark-to-market valuation
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Daily, monthly and yearly interest accrual
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Daily, monthly and yearly capital gains calculations
                                </li>
                                
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Bond duration analysis
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Daily price list upload
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio dashboard by security type and maturities
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Settlement volume analysis by inflows and outflows
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Request and approval workflows
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Back office integration
                                </li>
                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Automated leap year interest calculation for Treasury bills (T.bills)
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Integration with general ledger accounting
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio allocation to clients
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Portfolio classification by Held-For-Trading, Available-For-Sale, Held-To-Maturity
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Bond amortisation schedule
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Trading profitability based on weighted average cost
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Integration with payment gateway to view real-time bank balances
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Bank reconciliation
                                </li>

                                <li class="g-font-weight--500"><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i>
                                    Retail trading using mobile and web solutions
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