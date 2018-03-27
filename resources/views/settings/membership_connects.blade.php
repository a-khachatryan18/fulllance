@extends('layouts.settings')

@section('content')
    <div id = "">
        <div class="tab_title">
            <h3>Membership & Connects</h3>
        </div>

        <div class="air-card m-t-40">
            <header>
                <h3 class="m-b-0 m-t-0">Summary</h3>
            </header>
            <section>
                <div class="p-l-30 p-r-30">
                    <h4>Current Plan</h4>
                    <p>Freelancer Basic</p>
                    <div class="member_plan">
                        <a href="">View or edit membership plan</a>
                    </div>
                </div>
                {{----}}
                <hr>
                <div class="p-l-30 p-r-30">
                    <h4>Available Connects</h4>
                    <p>60</p>
                    <div class="connects_history">
                        <a href="">View Connects History</a>
                    </div>
                </div>
                {{----}}
                <hr>
                <div class="p-l-30 p-r-30">
                    <h4>Membership Connects</h4>
                    <p>60</p>
                    <div class="member_connects">
                        <p><a href="">Learn more</a> about rolling-over Connects.</p>
                    </div>
                </div>
                {{----}}
                <hr>
                <div class="p-l-30 p-r-30">
                    <h4>Membership Fee</h4>
                    <p>Free</p>
                </div>
                {{----}}
                <hr>
                <div class="p-l-30 p-r-30">
                    <h4>Current Billing Cycle</h4>
                    <p>Mar 26, 2018 — Apr 25, 2018</p>
                    <div class="cycle_info">
                        <a href="">More Info</a>
                    </div>
                </div>
            </section>
        </div>

    </div>
@endsection