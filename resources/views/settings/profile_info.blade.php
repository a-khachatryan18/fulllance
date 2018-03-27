@extends('layouts.settings')

@section('content')
    <div class="tab_title">
        <h3>Profile Settings</h3>
    </div>
    <div class="air-card m-t-40">
        <header>
            <h3 class="m-b-0 m-t-0">My Account Summary</h3>
        </header>
        <section>
            <div class="display_settings p-l-40">
                <div class="row">
                    <div class="col-md-4">
                        <p>Personal Email</p>
                        <p>Profile Completeness</p>
                    </div>
                    <div class="col-md-8">
                        <p>{{ Auth::user()->email }} (<a href="{{ url('freelancer/settings') }}">change</a>)</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        70%
                                    </div>
                                </div>
                                <p>Go to <a href="{{ url('freelancer/settings') }}">My account</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="air-card m-t-40">
        <header>
            <h3 class="m-b-0 m-t-0">My Profile</h3>
        </header>
        <section>
            <div class="display_settings p-l-40">
                <div class="row">
                    <div class="col-md-4">
                        <p>Visibility</p>
                    </div>
                    <div class="col-md-8">
                        <p>{{ Auth::user()->visibility == 1 ? 'Public profile' : 'Locked Private'}}</p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Project Preference</p>
                    </div>
                    <div class="col-md-7">
                        <div class="project_pref">
                            <select class="form-control" name="project_pref" id="">
                                <option value="">Both long-term and one-time projects</option>
                                <option value="">Longer-term projects 3+ months long</option>
                                <option value="">Shorter-term projects < 3 months long</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Responsiveness</p>
                    </div>
                    <div class="col-md-7">
                        <p>Your responsiveness will be determined after you receive and respond to a few more job invitations. Top freelancers accept or decline all invitations within 24 hours.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Earnings Privacy</p>
                    </div>
                    <div class="col-md-8">
                        <p>Want to keep your earnings private?</p>
                    </div>
                </div>
            </div>
        </section>
    </div> <!----- End My profile ----->
    <div class="air-card m-t-40">
        <header>
            <h3 class="m-b-0 m-t-0">Experience Level</h3>
        </header>
        <section>
            <div class="display_settings p-l-20 p-r-20">
                <div class="row">
                    <div class="col-md-4">
                        <div class="eo-button-box eo-button-box-radio">
                            <h3 class="m-sm-top-bottom">Entry Level</h3>
                            <small class="text-muted">
                                Starting to build experience in my field of work
                            </small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="eo-button-box eo-button-box-radio">
                            <h3 class="m-sm-top-bottom">Intermediate</h3>
                            <small class="text-muted">
                                A few years of professional experience in my field
                            </small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="eo-button-box eo-button-box-radio">
                            <h3 class="m-sm-top-bottom">Expert</h3>
                            <small class="text-muted">
                                Many years of professional experience doing complex projects
                            </small>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <!----- End Experience ----->
    <div class="air-card m-t-40">
        <header>
            <h3 class="m-b-0 m-t-0">Categories</h3>
        </header>
        <section>
            <div class="display_settings p-l-40">
                <div class="row">


                </div>
            </div>
        </section>
    </div>

    <!----- End Categories ----->
    <div class="air-card m-t-40">
        <header>
            <h3 class="m-b-0 m-t-0">Linked Accounts</h3>
        </header>
        <section>
            <div class="display_settings p-l-40">
                <div class="row">


                </div>
            </div>
        </section>
    </div>
@endsection