@extends('layouts.default')
@section('content')
    <main id = "work_client">
        <div class="jumbotron howitworks_wrapper">
            <div class="container">
                <div class="text-center">
                    <h1>How It Works</h1>
                    <p>An overview of hiring and freelancing on Fulllance.</p>
                    <div class="jumbo_btn">
                        <a href="/signup" class="btn btn-primary">Become a Freelancer</a>
                    </div>
                </div>
            </div>
            <div class="nav-holder">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                            <ul class="nav nav-tabs nav-justified">
                                <li id = "faq-1">
                                    <a href="/how-it-works/client">If you're hiring</a>
                                </li>
                                <li id = "faq-2" class="active">
                                    <a href="/how-it-works/freelancer">If you're freelancing</a>
                                </li>
                                <li id = "faq-3">
                                    <a href="/how-it-works/faq">FAQs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="subnav_conatiner">
            <div>
                <nav class="nav nav-subnav sub-nav-menu text-center hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class=" col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                                <div class="inner-wrapper">
                                    <ul class="hiw_menu nav-links sub-nav-links list-inline">
                                        <li class="active">
                                            <a href="#find">Find</a>
                                        </li>
                                        <li><a href="#get-hired">Get Hired</a></li>
                                        <li><a href="#work">Work</a></li>
                                        <li><a href="#get-paid">Get Paid</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
        <section id = "find" class="text-with-image text-with-faq body-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-0 text-center col-md-push-7">
                        <img src="/images/find-FL.svg" alt="">
                    </div>
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-5 col-md-pull-5  m-b-120">
                        <h2 class="m-b-30 m-t-70">Find rewarding projects</h2>
                        <p>
                            On Fulllance you’ll find a range of top talent, from programmers to designers, writers, customer support reps, and more.
                        </p>
                        <ul>
                            <li>
                                <strong>Start by posting a job.</strong>
                                Tell us about your project and the specific skills required.
                                <a href="" target="_blank">Learn how.</a>
                            </li>
                            <li>
                                <strong>Fulllance analyzes your needs</strong>
                                Tell us about your project and the specific skills required.
                            </li>
                            <li>
                                <strong>We send you a shortlist of likely candidates.</strong>
                                You can also search our site for talent, and freelancers can view your job and submit proposals too.
                            </li>
                        </ul>
                        {{----}}
                        <ul class="accordion m-t-20">
                            <li class="item" id = "faq-1">
                                <h4 class="title">
                                    <a href="javascript:void(0)" class="text-short">
                                        <span>What projects can I find on Upwork?</span>
                                    </a>
                                </h4>
                                <div class="content">
                                    <p>
                                        We have several measures in place to ensure Fulllance is a fair and reliable marketplace. We use multiple means to verify that freelancers are who they say they are. Information is also displayed that gives you a sense of each person’s skill level.
                                    </p>
                                    <p>
                                        Ultimately, it’s your responsibility to screen prospective freelancers to make sure their skills and experience meet the needs of your project. Custom screening questions can be included in your job post, and Fulllance Messages provides chat and video conference tools for interviewing finalists.
                                    </p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>
        {{-- End find section--}}
        <section class="text-with-image text-with-faq m-t-110" id = "get-hired" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-0 text-center">
                        <img src="/images/work_img.svg" alt="">
                    </div>
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-5 col-md-offset-1 col-lg-offset-2">
                        <h2 class="m-b-30 m-t-70">Get hired quickly</h2>
                        <p>
                            On Fulllance you’ll find a range of top talent, from programmers to designers, writers, customer support reps, and more.
                        </p>
                        <ul>
                            <li>
                                <strong>Start by posting a job.</strong>
                                Tell us about your project and the specific skills required.
                                <a href="" target="_blank">Learn how.</a>
                            </li>
                            <li>
                                <strong>Fulllance analyzes your needs</strong>
                                Tell us about your project and the specific skills required.
                            </li>
                            <li>
                                <strong>We send you a shortlist of likely candidates.</strong>
                                You can also search our site for talent, and freelancers can view your job and submit proposals too.
                            </li>
                        </ul>
                        <ul class="accordion m-t-20">
                            <li class="item" id = "faq-1">
                                <h4 class="title">
                                    <a href="javascript:void(0)" class="text-short">
                                        <span>Does Fulllance screen freelancers?</span>
                                    </a>
                                </h4>
                                <div class="content">
                                    <p>
                                        We have several measures in place to ensure Fulllance is a fair and reliable marketplace. We use multiple means to verify that freelancers are who they say they are. Information is also displayed that gives you a sense of each person’s skill level.
                                    </p>
                                    <p>
                                        Ultimately, it’s your responsibility to screen prospective freelancers to make sure their skills and experience meet the needs of your project. Custom screening questions can be included in your job post, and Fulllance Messages provides chat and video conference tools for interviewing finalists.
                                    </p>
                                </div>
                            </li>
                            <li class="item" id = "faq-1">
                                <h4 class="title">
                                    <a href="javascript:void(0)" class="text-short">
                                        <span>Does Fulllance screen freelancers?</span>
                                    </a>
                                </h4>
                                <div class="content">
                                    <p>
                                        We have several measures in place to ensure Fulllance is a fair and reliable marketplace. We use multiple means to verify that freelancers are who they say they are. Information is also displayed that gives you a sense of each person’s skill level.
                                    </p>
                                    <p>
                                        Ultimately, it’s your responsibility to screen prospective freelancers to make sure their skills and experience meet the needs of your project. Custom screening questions can be included in your job post, and Fulllance Messages provides chat and video conference tools for interviewing finalists.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        {{--End Hire section--}}
        <section id = "work" class="text-with-image text-with-faq body-content m-t-110">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-0 text-center col-md-push-7">
                        <img src="/images/work.svg" alt="">
                    </div>
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-5 col-md-pull-5  m-b-120">
                        <h2 class="m-b-30 m-t-70">Work efficiently, effectively.</h2>
                        <p>
                            On Fulllance you’ll find a range of top talent, from programmers to designers, writers, customer support reps, and more.
                        </p>
                        <ul>
                            <li>
                                <strong>Start by posting a job.</strong>
                                Tell us about your project and the specific skills required.
                                <a href="" target="_blank">Learn how.</a>
                            </li>
                            <li>
                                <strong>Fulllance analyzes your needs</strong>
                                Tell us about your project and the specific skills required.
                            </li>
                            <li>
                                <strong>We send you a shortlist of likely candidates.</strong>
                                You can also search our site for talent, and freelancers can view your job and submit proposals too.
                            </li>
                        </ul>
                        {{----}}
                        <ul class="accordion m-t-20">
                            <li class="item" id = "faq-1">
                                <h4 class="title">
                                    <a href="javascript:void(0)" class="text-short">
                                        <span>Does Fulllance screen freelancers?</span>
                                    </a>
                                </h4>
                                <div class="content">
                                    <p>
                                        We have several measures in place to ensure Fulllance is a fair and reliable marketplace. We use multiple means to verify that freelancers are who they say they are. Information is also displayed that gives you a sense of each person’s skill level.
                                    </p>
                                    <p>
                                        Ultimately, it’s your responsibility to screen prospective freelancers to make sure their skills and experience meet the needs of your project. Custom screening questions can be included in your job post, and Fulllance Messages provides chat and video conference tools for interviewing finalists.
                                    </p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>
        {{--End Work section--}}
        <section class="text-with-image text-with-faq m-t-110" id = "get-paid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-0 text-center">
                        <img src="/images/payment.svg" alt="">
                    </div>
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-5 col-md-offset-1 col-lg-offset-2">
                        <h2 class="m-b-30 m-t-70">Get paid on time</h2>
                        <p>
                            On Fulllance you’ll find a range of top talent, from programmers to designers, writers, customer support reps, and more.
                        </p>
                        <ul>
                            <li>
                                <strong>Start by posting a job.</strong>
                                Tell us about your project and the specific skills required.
                                <a href="" target="_blank">Learn how.</a>
                            </li>
                            <li>
                                <strong>Fulllance analyzes your needs</strong>
                                Tell us about your project and the specific skills required.
                            </li>
                            <li>
                                <strong>We send you a shortlist of likely candidates.</strong>
                                You can also search our site for talent, and freelancers can view your job and submit proposals too.
                            </li>
                        </ul>
                        <ul class="accordion m-t-20">
                            <li class="item" id = "faq-1">
                                <h4 class="title">
                                    <a href="javascript:void(0)" class="text-short">
                                        <span>Does Fulllance screen freelancers?</span>
                                    </a>
                                </h4>
                                <div class="content">
                                    <p>
                                        We have several measures in place to ensure Fulllance is a fair and reliable marketplace. We use multiple means to verify that freelancers are who they say they are. Information is also displayed that gives you a sense of each person’s skill level.
                                    </p>
                                    <p>
                                        Ultimately, it’s your responsibility to screen prospective freelancers to make sure their skills and experience meet the needs of your project. Custom screening questions can be included in your job post, and Fulllance Messages provides chat and video conference tools for interviewing finalists.
                                    </p>
                                </div>
                            </li>
                            <li class="item" id = "faq-1">
                                <h4 class="title">
                                    <a href="javascript:void(0)" class="text-short">
                                        <span>Does Fulllance screen freelancers?</span>
                                    </a>
                                </h4>
                                <div class="content">
                                    <p>
                                        We have several measures in place to ensure Fulllance is a fair and reliable marketplace. We use multiple means to verify that freelancers are who they say they are. Information is also displayed that gives you a sense of each person’s skill level.
                                    </p>
                                    <p>
                                        Ultimately, it’s your responsibility to screen prospective freelancers to make sure their skills and experience meet the needs of your project. Custom screening questions can be included in your job post, and Fulllance Messages provides chat and video conference tools for interviewing finalists.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        {{-- End get paid--}}
        <section class="text-with-image text-with-faq body-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-0 text-center col-md-push-7">
                        <img src="/images/pricing-chart.svg" alt="">
                    </div>
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0 col-lg-5 col-md-pull-5  m-b-120">
                        <h2 class="m-b-30 m-t-70">Service fees for freelancers</h2>
                        <p>
                            Fulllance charges freelancers a sliding fee based on the freelancer's lifetime billings with a specific client. In other words, the more business a freelancer has done with a client, the more they’ll earn.
                        </p>
                        <ul>
                            <li>
                                <strong>Start by posting a job.</strong>
                                Tell us about your project and the specific skills required.
                                <a href="" target="_blank">Learn how.</a>
                            </li>
                            <li>
                                <strong>Fulllance analyzes your needs</strong>
                                Tell us about your project and the specific skills required.
                            </li>
                            <li>
                                <strong>We send you a shortlist of likely candidates.</strong>
                                You can also search our site for talent, and freelancers can view your job and submit proposals too.
                            </li>
                        </ul>
                        <p>
                            When a freelancer bills $500 or $10,000 with a client, the freelancer automatically earns a lower fee going forward with that client. The freelancer will therefore see an increase in take-home earnings.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="hero_signup" class="text-center bg-grass m-t-20" style="border-top:6px solid #999;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Ready to get hired?</h2>
                        <div class="action_wrapper">
                            <a href="/signup" class="action_btn btn">Become a Freelancer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
