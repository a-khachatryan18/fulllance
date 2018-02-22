@extends('layouts.app')

@section('content')
    <div id = "signup_page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default signup_container">

                        <div class="panel-body register_content">
                            <div class="row">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/signup_user') }}">
                                    {{ csrf_field() }}
                                    <div id = "form_step1">
                                        <div class="text-center panel_title">
                                            <h2>Sign Up</h2>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <i class="fa fa-user"></i>
                                                <input id="first_name" type="text" class="form-control" placeholder="First name" name="first_name" value="{{ old('first_name') }}">
                                                @if ($errors->has('first_name'))
                                                    <span class="help-block ">
                                                        <strong>{{ $errors->first('first_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <i class="fa fa-user"></i>
                                                <input id="last_name" type="text" class="form-control" placeholder="Last name" name="last_name" value="{{ old('last_name') }}">
                                                @if ($errors->has('last_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <i class="fa fa-envelope"></i>
                                                <input id="email" type="email" class="form-control" placeholder="Work email address" name="email" value="{{ old('email') }}">
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="text-center">
                                                <button type="submit" id = "signup_step1" class="btn btn-success">
                                                    Get Started
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End first step --}}
                                    <div id = "form_step2">
                                        <div class="text-center panel_title">
                                            <h2>Complete your account</h2>
                                            <div id="user_email"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <i class="fa fa-globe"></i>
                                                <select class="form-control" name="location" id="location">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AL">Alabama</option>
                                                </select>
                                                @if ($errors->has('country'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('country') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <i class="fa fa-lock"></i>
                                                <input id="password" type="password" class="form-control" placeholder="Create a password" name="password" value="{{ old('password') }}">
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <h4>I want to:</h4>
                                            <span class="user_type btn btn-default">Hire for a project</span>
                                            <span class="user_type btn btn-default">Work as a freelancer</span>
                                        </div>
                                        <div class="col-md-12 m-t-20">
                                            <div class="form-group">
                                                <input id="notify_me" type="checkbox" name="notify_me" checked>
                                                <small>Yes! Send me genuinely useful emails every now and then to help me get the most out of Fulllance.</small>
                                                @if ($errors->has('notify_me'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('notify_me') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="terms" type="checkbox" name="terms">
                                                <small>
                                                    Yes, I understand and agree to the <a href="" target="_blank">Fulllance Terms of Service</a>, including the
                                                    <a href="" target="_blank">User Agreement</a> and
                                                    <a href="" target="_blank">Privacy Policy</a>.
                                                </small>
                                                @if ($errors->has('terms'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('terms') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="text-center">
                                                <button type="submit" id = "signup_step1" class="btn btn-success">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
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
