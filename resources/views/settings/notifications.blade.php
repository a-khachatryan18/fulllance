@extends('layouts.settings')

@section('content')

    <div id = "notification_settings">
        <div class="tab_title">
            <h3>Notification Settings</h3>
        </div>
        <div class="air-card m-t-40">
            <header>
                <h3 class="m-b-0 m-t-0">Messages</h3>
            </header>
            <section>
                <div class="p-l-30 p-r-30">
                    <h4>Desktop</h4>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="notificationDesktop">
                                <p>Show notifications for:</p>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="notificationDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        All activity
                                        <span aria-hidden="true" class="arrow_down fa fa-chevron-down"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="notificationDesktop">
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "all">All activity</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "important">Important Activity Only
                                                <br><small class="text-muted">(1:1 messages, Interview rooms, @mentions)</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "nothing">Nothing</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="counterDesktop">
                                <p>Show notifications for:</p>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="counterDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        All activity
                                        <span aria-hidden="true" class="arrow_down fa fa-chevron-down"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="counterDesktop">
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "all">All activity</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "important">Important Activity Only
                                                <br><small class="text-muted">(1:1 messages, Interview rooms, @mentions)</small>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-7">
                            <div class="checkBox m-t-30">
                                <label>
                                    <input type="checkbox" name="desktopSound" class="">
                                    <span class="checkbox-replacement">
                                        <i class="fa fa-check"></i>
                                    </span>
                                    <span class="checkbox-value">Also play a sound</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                {{--Mobile--}}
                <div class="p-l-30 p-r-30">
                    <h4>Mobile</h4>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="notificationMobile">
                                <p>Send push notifications for:</p>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="notificationMobile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        All activity
                                        <span aria-hidden="true" class="arrow_down fa fa-chevron-down"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="notificationMobile">
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "all">All activity</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "important">Important Activity Only
                                                <br><small class="text-muted">(1:1 messages, Interview rooms, @mentions)</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "nothing">Nothing</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="counterDesktop">
                                <p>Increment message counter for:</p>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="counterDesktop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        All activity
                                        <span aria-hidden="true" class="arrow_down fa fa-chevron-down"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="counterDesktop">
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "all">All activity</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "important">Important Activity Only
                                                <br><small class="text-muted">(1:1 messages, Interview rooms, @mentions)</small>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-7">
                            <div class="checkBox m-t-30">
                                <label>
                                    <input type = "checkbox" name="mobileSound" class="">
                                    <span class="checkbox-replacement">
                                        <i class="fa fa-check"></i>
                                    </span>
                                    <span class="checkbox-value">Also play a sound</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                {{--Email--}}
                <div class="p-l-30 p-r-30">
                    <h4>Email (sending to {{ Auth::user()->email }})</h4>
                    <p>Send an email with unread activity for:</p>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="notificationEmail">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="notificationEmail" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        All activity
                                        <span aria-hidden="true" class="arrow_down fa fa-chevron-down"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="notificationEmail">
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "all">All activity</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "important">Important Activity Only
                                                <br><small class="text-muted">(1:1 messages, Interview rooms, @mentions)</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "nothing">Nothing</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="notificationEmailTime">
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="notificationEmailTime" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Every 15 Minutes
                                        <span aria-hidden="true" class="arrow_down fa fa-chevron-down"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="notificationEmailTime">
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "immediate">Immediate</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "fifteen_min">Every 15 Minutes</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "once_hour">Once an hour</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "once_day">Once a day</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checkBox m-t-30">
                        <label>
                            <input type="checkbox" name="dashEmailPresence" class="">
                            <span class="checkbox-replacement">
                                <i class="fa fa-check"></i>
                            </span>
                            <span class="checkbox-value">Only send when offline or idle</span>
                        </label>
                    </div>
                </div>
            </section>
        </div>

        {{----}}
        <div class="air-card m-t-40">
            <header>
                <h3 class="m-b-0 m-t-0">Other Fulllance Email Updates</h3>
            </header>
            <section>
                <div class="p-l-30 p-r-30">
                    Send email notification to {{ Auth::user()->email }} when...
                    <h4>Recruiting</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="recruitingEmail">
                                <p>Receive recruiting emails for:</p>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="recruitingEmail" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Only Jobs I Posted
                                        <span aria-hidden="true" class="arrow_down fa fa-chevron-down"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="recruitingEmail">
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "my_posts">Only Jobs I Posted</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" data-value = "team_posts">Jobs My Team Posted</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="option_list m-t-20">
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="rec_job_posted" class="" checked>
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">A job is posted or modified</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="rec_prop_rcvd" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">A proposal is received</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="req_intv_acc" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">An interview is accepted or offer terms are modified</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="req_intv_decl" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">An interview or offer is declined or withdrawn</span>
                            </label>
                        </div><div class="checkBox">
                            <label>
                                <input type="checkbox" name="req_offer_acc" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">An offer is accepted</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="job_will_expire" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">A job posting will expire soon</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="req_job_exp" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">A job posting expired</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="req_no_intrv" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">No interviews have been initiated</span>
                            </label>
                        </div>
                    </div>
                </div>
                {{-- Freelancer and Agency Proposals--}}
                <hr>
                <div class="p-l-30 p-r-30">
                    <h4>Freelancer and Agency Proposals</h4>
                    <div class="option_list">
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="prop_submitted" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">A proposal is submitted</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="intv_init" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">An interview is initiated</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="offer_inv_rec" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">An offer or interview invitation is received</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="offer_declined" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">An offer or interview invitation is withdrawn</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="prop_declined" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">A Proposal is rejected</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="job_change" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">A job I applied to is modified or canceled</span>
                            </label>
                        </div>
                    </div>
                </div>
                {{-- Contracts --}}
                <hr>
                <div class="p-l-30 p-r-30">
                    <h4>Contracts</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contractEmail">
                                <p>Receive contract emails for:</p>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="recruitingEmail" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Only Freelancers I Hired
                                        <span aria-hidden="true" class="arrow_down fa fa-chevron-down"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="recruitingEmail">
                                        <li>
                                            <a class="dropdown-item" href="#">Only Freelancers I Hired</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Freelancers My Team Hired</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="option_list m-t-20">
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="cntr_hire" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">A hire is made or a contract begins</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="logging_begin" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Time logging begins</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="ctrt_term_change" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Contract terms are modified</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="contract_end" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">A contract ends</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="cntr_timelog" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">A timelog is ready for review</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="cntr_fb_change" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Feedback changes are made</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="cntr_offline_summary" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Daily snapshot of time recorded by your freelancers</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="cntr_wkbl_change" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Weekly billing digest</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="cntr_pause" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">A contract is going to be automatically paused</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="cntr_misc" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Other contract related messages</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="cntr_bpa" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Payment receipts and other financial related emails</span>
                            </label>
                        </div>
                    </div>
                </div>
                {{-- Groups & Invitations --}}
                <hr>
                <div class="p-l-30 p-r-30">
                    <h4>Groups & Invitations</h4>
                    <div class="option_list">
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="grp_mem" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Group membership events occur</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="ref_profile" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Someone forwards me a freelancer's profile</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="ref_invite" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Someone sends me an invitation</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="cntr_revoke" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Team access is revoked</span>
                            </label>
                        </div>
                    </div>
                </div>
                {{-- Miscellaneous --}}
                <hr>
                <div class="p-l-30 p-r-30">
                    <h4>Miscellaneous</h4>
                    <div class="option_list">
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="on_board_msg" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Fulllance has a tip to help me start</span>
                            </label>
                        </div>
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="misc_local" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Notify me of Fulllance events happening in my local area</span>
                            </label>
                        </div>
                    </div>
                </div>
                {{-- Job Recommendations --}}
                <hr>
                <div class="p-l-30 p-r-30">
                    <h4>Job Recommendations</h4>
                    <div class="option_list">
                        <div class="checkBox">
                            <label>
                                <input type="checkbox" name="job_recommendations" class="">
                                <span class="checkbox-replacement">
                                    <i class="fa fa-check"></i>
                                </span>
                                <span class="checkbox-value">Fulllance has job recommendations for me</span>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-md-5 m-l-30 m-t-10">
                                <div class="recommendationsTime">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="recommendationsTime" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Daily
                                            <span aria-hidden="true" class="arrow_down fa fa-chevron-down"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="recommendationsTime">
                                            <li>
                                                <a class="dropdown-item" href="#">Daily</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>


    </div>
@endsection