@extends('layouts.default')
@section('content')
    <section id="home_bg">
        <div id = "hero_container" class="container">
            <div class="hero_content row">
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <h1>
                        Get it done with a Freelancer
                    </h1>
                    <p>
                        Millions of small businesses use Freelancer to turn their ideas into reality.
                    </p>
                    <div class="actions_wrapper">
                        <a href="#" class="btn btn-success">Post a Job</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="categories_section">
        <div class="container">
            <h2 class="text-center section_title">Get your project started now...</h2>
            <div class="categories_wrapper row">
                <div class="col-md-4 col-sm-8 col-xs-12 category_item text-center">
                    <a href="">
                        <div class="rounded">
                            <i class="fa fa-code"></i>
                        </div>
                        <h4 class="category_name">Web Development</h4>
                    </a>
                </div>
                <div class="col-md-4 col-sm-8 col-xs-12 category_item text-center">
                    <a href="">
                        <div class="rounded">
                            <i class="fa fa-eyedropper"></i>
                        </div>
                        <h4 class="category_name">Design & Creative</h4>
                    </a>
                </div>
                <div class="col-md-4 col-sm-8 col-xs-12 category_item text-center">
                    <a href="">
                        <div class="rounded">
                            <i class="fa fa-support"></i>
                        </div>
                        <h4 class="category_name">Admin Support</h4>
                    </a>
                </div>
                <div class="col-md-4 col-sm-8 col-xs-12 category_item text-center">
                    <a href="">
                        <div class="rounded">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <h4 class="category_name">IT & Networking</h4>
                    </a>
                </div>
                <div class="col-md-4 col-sm-8 col-xs-12 category_item text-center">
                    <a href="">
                        <div class="rounded">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <h4 class="category_name">Writing</h4>
                    </a>
                </div>
                <div class="col-md-4 col-sm-8 col-xs-12 category_item text-center">
                    <a href="">
                        <div class="rounded">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <h4 class="category_name">Customer Service</h4>
                    </a>
                </div>
                <div class="text-center">
                    <a href="#" class="see_more btn bg-white">See More</a>
                </div>
            </div>
        </div>
    </section>
    {{----- End Categories -----}}
    <section id = "work_process" class="t-b-space">
        <div class="container">
            <h2 class="text-center section_title">How it works</h2>
            <div class="row working_container">
                <div class="col-md-3 col-sm-6 col-xs-12 working_step text-center">
                    <div class="step_image">
                        <img src="{{ asset('/images/icons/work_icon.svg') }}" alt="">
                    </div>
                    <div class="sm-line"></div>
                    <h3 class="step_name text-gray">
                        Find
                    </h3>
                    <p class="step_desc text-gray">
                        Post a job to tell us about your project. We'll quickly match you with the right freelancers.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 working_step text-center">
                    <div class="step_image">
                        <img src="{{ asset('/images/icons/work_icon.svg') }}" alt="">
                    </div>
                    <div class="sm-line"></div>
                    <h3 class="step_name text-gray">
                        Hire
                    </h3>
                    <p class="step_desc text-gray">
                        Browse profiles, reviews, and proposals then interview top candidates. Hire a favorite and begin your project.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 working_step text-center">
                    <div class="step_image">
                        <img src="{{ asset('/images/icons/work_icon.svg') }}" alt="">
                    </div>
                    <div class="sm-line"></div>
                    <h3 class="step_name text-gray">
                        Work
                    </h3>
                    <p class="step_desc text-gray">
                        Use the Fulllance platform to chat, share files, and collaborate from your desktop or on the go.
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 working_step text-center">
                    <div class="step_image">
                        <img src="{{ asset('/images/icons/work_icon.svg') }}" alt="">
                    </div>
                    <div class="sm-line"></div>
                    <h3 class="step_name text-gray">
                        Pay
                    </h3>
                    <p class="step_desc text-gray">
                        Invoicing and payments happen through Fulllance. With Fulllance Protection, only pay for work you authorize.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{---- End Work Section -----}}
    <div class="gray_line"></div>
    <section id = "browse_skills" class="t-b-space">
        <div class="container">
            <h2 class="section_title">Browse Top Skills</h2>
            <hr>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 skills_item">
                    <a href="#" class="skill_name">Android Developer</a>
                    <a href="#" class="skill_name">Front-End Developer</a>
                    <a href="#" class="skill_name">iOS Developer</a>
                    <a href="#" class="skill_name">PHP Developer</a>
                    <a href="#" class="skill_name">Python Developer</a>
                    <a href="#" class="skill_name">SEO Expert</a>
                    <a href="#" class="skill_name">Technical Writer</a>
                    <a href="#" class="skill_name">Web Designer</a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 skills_item">
                    <a href="#" class="skill_name">Database Administrator</a>
                    <a href="#" class="skill_name">Game Developer</a>
                    <a href="#" class="skill_name">Java Developer</a>
                    <a href="#" class="skill_name">C++ Developer</a>
                    <a href="#" class="skill_name">Social Media Manager</a>
                    <a href="#" class="skill_name">UI Designerr</a>
                    <a href="#" class="skill_name">Wordpress Developer</a>
                    <a href="#" class="skill_name">Bookkeeper</a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 skills_item">
                    <a href="#" class="skill_name">Content Writer</a>
                    <a href="#" class="skill_name">Data Scientist</a>
                    <a href="#" class="skill_name">Graphic Designer</a>
                    <a href="#" class="skill_name">Logo Designer</a>
                    <a href="#" class="skill_name">Resume Writer</a>
                    <a href="#" class="skill_name">Software Developer</a>
                    <a href="#" class="skill_name">UX Designer</a>
                    <a href="#" class="skill_name">Writer</a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 skills_item">
                    <a href="#" class="skill_name">Copywriter</a>
                    <a href="#" class="skill_name">Facebook Developer</a>
                    <a href="#" class="skill_name">Information Security Analyst</a>
                    <a href="#" class="skill_name">Mobile App Developer</a>
                    <a href="#" class="skill_name">Sales Consultant</a>
                    <a href="#" class="skill_name">Software Engineer</a>
                    <a href="#" class="skill_name">Virtual Assistant</a>
                    <a href="#" class="skill_name text_green">See All Skills</a>
                </div>
            </div>
        </div>
    </section>
    <section id = "hero_signup" class="text-center bg-grass">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Create your online working team</h2>
                    <div class="action_wrapper">
                        <a href="#" class="action_btn btn">Get started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop