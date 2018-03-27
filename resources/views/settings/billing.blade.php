@extends('layouts.settings')

@section('content')
    <div class="tab_title">
        <h3>Billing Methods</h3>
    </div>
    <div class="air-card m-t-40">
        <header>
            <h3 class="m-b-0 m-t-0">Billing Methods</h3>
            <button class="btn btn-success pull-right edit_setting" data-toggle="modal" data-target="#billing_modal">
                Add Billing Method
            </button>
        </header>
        <section>
            <div class="no_method p-l-30">
                <div class="row">
                    <div class="col-md-12">
                        <p><strong>You have not set up any billing methods yet.</strong></p>
                        <p>Your billing method will be charged only when your available balance from Fulllance earnings is not sufficient to pay for your monthly membership and/or Connects.</p>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <div id = "billing_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add a billing method</h4>
                </div>
                <div class="protected_note text-center">
                    <img src="{{ asset('images/protection-small.png') }}" alt="">
                    <span>With <strong>Fulllance Payment Protection</strong>, only pay for work delivered.</span>
                </div>
                <div class="modal-body p-0">
                    <div class="credit_wrapper active">
                        <div class="method_type p-l-30 p-r-30">
                            <input type="radio" name = "method" value = "card">
                            <span>Credit or Debit Card</span>
                        </div>
                        <div class="method_content m-t-10 p-l-30 p-r-30">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Card number
                                            </label>
                                            <span class="cards_img pull-right"><img src="{{ asset('images/credit_cards.png') }}" alt=""></span>
                                            <input type="text" name="last_name" class="form-control m-t-10">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">First Name</label>
                                            <input type="text" name="last_name" class="form-control" value = "{{ Auth::user()->first_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Last Name</label>
                                            <input type="text" name="last_name" class="form-control" value = "{{ Auth::user()->last_name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Expires on</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <select name="card_expire_month" class="form-control" id="card_expire_month">
                                                        <option value="" selected>MM</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="card_expire_year" class="form-control" id="card_expire_year">
                                                        <option value="" selected>YY</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Security code / CVV</label>
                                            <input type="text" name="secure_code" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-success">Continue</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="paypal_wrapper">
                        <div class="method_type p-l-30 p-r-30">
                            <input type="radio" name = "method" value = "paypal">
                            <span>Paypal</span>
                        </div>
                        <div class="method_content m-t-20 p-l-30 p-r-30 hidden">
                            <button class="btn btn-primary">Pay with Paypal</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection