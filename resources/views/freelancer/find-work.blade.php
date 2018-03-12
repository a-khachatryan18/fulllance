@extends('layouts.app')

@section('content')
    <section id = "freelancer_home" class="logged_wrapper">
        <div class="container">
            <div class="row search_wrapper m-t-20 m-b-30">
                <div class="col-md-2 col-sm-3 hidden-xs">
                    <h4>Find work</h4>
                </div>
                <div class="col-md-7 col-xs-12 col-sm-6 search_form">
                    <form action="">
                        <input type="text" placeholder = "Search for Jobs" class="form-control">
                    </form>
                </div>
            </div>
            <div class="row main_content">
                <div class="col-md-2 left_wrapper">
                    <div>
                        <ul class="nav nav-pills nav-stacked">
                            <li>
                                <a href="">My Job Feed</a>
                            </li>
                            <li>
                                <a href="">Recommended</a>
                            </li>
                        </ul>
                    </div>
                    <div class="job_categories">
                        <h4>My Categories</h4>
                        <ul>
                            <li>
                                <a href="">Web Development</a>
                            </li>
                            <li>
                                <a href="">Mobile Development</a>
                            </li>
                            <li>
                                <a href="">Desktop Software Development</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 job-feed">
                    <div class="sub_header">
                        <h3>My Job Fead</h3>
                    </div>
                    <div class="job_list">

                    </div>
                </div>
                <div class="col-md-3 right_wrapper">
                    <div class="profile">
                        <img class="profile_img" src="{{ (!empty(Auth::user()->profile_img)) ? asset('uploads/').Auth::user()->profile_img : asset('images/avatar.png')  }}" alt="">
                        <h4>Profile</h4>
                    </div>
                    <div class="visibility_wrapper m-t-10">
                        <strong>Visibility</strong>
                        <div class="media_content">
                            @if(Auth::user()->visibility == 0)
                                <span>
                                    <i class="fa fa-lock"></i>
                                </span>
                                <span class="visible_type">Locked Private</span>
                                <span class="edit_profile" id = "edit_visibility">
                                    <i class="fa fa-pencil"></i>
                                </span>
                            @else
                                <span>
                                    <i class="fa fa-globe"></i>
                                </span>
                                <span class="visible_type">Public</span>
                                <span class="edit_profile" id = "edit_visibility">
                                    <i class="fa fa-pencil"></i>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="availability_wrapper m-t-10">
                        <strong>Availability</strong>
                        <div class="media_content">
                            @if(Auth::user()->availability == 0)
                                <span>
                                    <i class="fa fa-clock-o"></i>
                                </span>
                                <span class="available_type">Not Available</span>
                                <span class="edit_profile" id = "edit_availability">
                                    <i class="fa fa-pencil"></i>
                                </span>
                            @elseif(Auth::user()->availability == 1)
                                <span>
                                    <i class="fa fa-clock-o"></i>
                                </span>
                                <span class="available_type">More than 30 hrs/week</span>
                                <span class="edit_profile" id = "edit_availability">
                                    <i class="fa fa-pencil"></i>
                                </span>
                            @elseif(Auth::user()->availability == 2)
                                <span>
                                    <i class="fa fa-clock-o"></i>
                                </span>
                                <span class="available_type">Less than 30 hrs/week</span>
                                <span class="edit_profile" id = "edit_availability">
                                    <i class="fa fa-pencil"></i>
                                </span>
                            @else
                                <span>
                                    <i class="fa fa-clock-o"></i>
                                </span>
                                <span class="visible_type">As needed - Open to offers</span>
                                <span class="edit_profile" id = "edit_visibility">
                                    <i class="fa fa-pencil"></i>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="test m-t-10">
                        <span>
                            <i class="fa fa-plus-circle"></i>
                        </span>
                        <span>
                            <a href="">
                                Take a skill test +5%
                            </a>
                        </span>
                    </div>
                    <div class="view_profile m-t-10">
                        <span>
                            <i class="fa fa-eye"></i>
                        </span>
                        <span><a href="">View Profile</a></span>
                    </div>
                    <div class="proposals m-t-10">
                        <strong>Proposals</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection