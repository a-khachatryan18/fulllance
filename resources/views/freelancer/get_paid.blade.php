@extends('layouts.settings')

@section('content')

    <div class="tab_title">
        <h3>Get Paid</h3>
    </div>
    <div class="air-card m-t-40">
        <header>
            <h3 class="m-b-0 m-t-0">Balance</h3>
            <button class="btn btn-success pull-right">
                Get Paid Now
            </button>
        </header>
        <section>
            <div class="p-l-30">
                <div class="row">
                    <div class="col-md-12">
                        <p>Your balance is $0.00</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="air-card m-t-40">
        <header>
            <h3 class="m-b-0 m-t-0">Payment Details</h3>
        </header>
        <section>
            <div class="p-l-30">
                <div class="row">
                    <div class="col-md-12 p-r-50 paid_detail">
                        <div class="">
                            <h5 class="m-t-20 m-b-20">Last Payment</h5>
                            <button class="btn btn-success pull-right">
                                View Payments
                            </button>
                        </div>
                        <p>You have not made any withdrawals yet.</p>
                    </div>
                    <div class="col-md-12 m-t-20 p-r-50 paid_detail">
                        <div class="">
                            <h5 class="m-t-20 m-b-20">Schedule</h5>
                            <button class="btn btn-success pull-right" data-toggle = "modal" data-target="#schedule_modal">
                                Edit Schedule
                            </button>
                        </div>
                        <p>Weekly (next on 03/21/2018) to PayPal - {{ Auth::user()->email }}.</p>
                        <p>Only when balance is $100.00 or more. <a href="">View payment calendar</a></p>
                    </div>
                    <div class="col-md-12 m-t-20 p-r-50">
                        <div class="">
                            <h5 class="m-t-20 m-b-20">Payment Methods</h5>
                            <button class="btn btn-success pull-right" data-toggle="modal" data-target="#payment_modal">
                                Add Method
                            </button>
                        </div>
                        <p>PayPal - {{ Auth::user()->email }}
                            <a href=""><i class="fa fa-pencil"></i>Edit</a>
                        </p>
                    </div>
                </div>

            </div>
        </section>
    </div>


    <div id = "payment_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Choose your payment method</h4>
                </div>
                <div class="modal-body p-0 m-t-20">
                    <div class="row paypal">
                        <div class="col-md-3">
                            <img src="{{ asset('images/paypal-small.png') }}" alt="" class="p-l-30">
                        </div>
                        <div class="col-md-6">
                            <h5>PayPal</h5>
                            <ul class="payment_method_info">
                                <li>$1 USD per withdrawal</li>
                                <li>PayPal may charge <a href="">additional fees</a> to send or withdraw funds.</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-default m-t-20" href="">Set Up</a>
                        </div>
                    </div>
                    <div class="row payoneer m-t-20">
                        <div class="col-md-3">
                            <img src="{{ asset('images/credit_cards.png') }}" alt="" class="p-l-30 payment_card">
                        </div>
                        <div class="col-md-6">
                            <h5>Credit or Debit Card</h5>
                            <ul class="payment_method_info">
                                <li>$1 USD per withdrawal</li>
                                <li>Payoneer charges <a href="">additional fees</a> to withdraw funds. Don't have a <a href="">Payoneer account?</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-default m-t-40" href="">Set Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Schedule modal --}}

    <div id = "schedule_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit your payment schedule</h4>
                </div>
                <div class="modal-body p-0 m-t-20">
                    <div class="row">
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <div class="p-l-20">
                                <form action="">
                                    <div class="form-group">
                                        <label for="">Payment method</label>
                                        <select name = "payment_method" id="payment_method" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Paypal(paypal_emal)</option>
                                        </select>
                                    </div>
                                    <div class="fee_info m-t-30">
                                        <h5>Fulllance Fee</h5>
                                        <p>$1.00 per payment</p>
                                        <p>Additional PayPal fees may apply.</p>
                                    </div>
                                    <div class="form-group m-t-40">
                                        <h5>Preferred payment schedule</h5>
                                        <label for="">Earnings will be released upon your request. <a href="">Learn more</a></label>
                                        <div class="radio_box">
                                            <input type="radio" name = "payment_schedule">
                                            <span>Quarterly(date)</span>
                                        </div>
                                        <div class="radio_box">
                                            <input type="radio" name = "payment_schedule">
                                            <span>Monthly(last Wednesday of each month)</span>
                                        </div>
                                        <div class="radio_box">
                                            <input type="radio" name = "payment_schedule">
                                            <span>Twice per month(1st and 3th Wednesday of each month)</span>
                                        </div>
                                        <div class="radio_box">
                                            <input type="radio" name = "payment_schedule">
                                            <span>Weekly(every Wednesday)</span>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-20">
                                        <label for="">Only when balance is</label>
                                        <select name="balance_size" id="balance_size" class = "form-control">
                                            <option value="100">$100 or more</option>
                                            <option value="200">$200 or more</option>
                                            <option value="300">$300 or more</option>
                                            <option value="400">$400 or more</option>
                                            <option value="500">$500 or more</option>
                                            <option value="600">$600 or more</option>
                                            <option value="700">$700 or more</option>
                                            <option value="800">$800 or more</option>
                                            <option value="900">$900 or more</option>
                                            <option value="1000">$1000 or more</option>
                                        </select>
                                        <p>Minimize withdrawal fees by choosing larger amounts. <a href="">Learn more</a></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Next payment (based on your schedule above)</label>
                                        <p>date</p>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success">Save Changes</button>
                                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection