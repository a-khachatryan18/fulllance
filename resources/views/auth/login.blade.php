@extends('layouts.app')

@section('content')
<div id = "signin_page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default login_wrapper">
                    <div class="panel-body login_content">
                        @if(Session::has('verified'))
                            <div class="alert alert-success">
                                {!!Session::get('verified')!!}
                            </div>
                        @endif
                        <form class="form-horizontal" id="login_form" role="form" method="POST" action="{{ url('/login_user') }}">
                            {{ csrf_field() }}
                            <div class="text-center panel_title">
                                <h2>Log In and get to work</h2>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <i class="fa fa-user"></i>
                                        <input id="username" type="text" placeholder="Username or Email" class="form-control" name="username" value="{{ old('username') }}">
                                        <span class="error_message"></span>
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <i class="fa fa-lock"></i>
                                    <input id="password" type="password"  placeholder="Password" class="form-control" name="password">
                                    <span class="error_message"></span>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Keep me signed in
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkbox pull-right">
                                        <a href="">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <h4>Log In as:</h4>
                                <span class="user_type btn btn-default" data-type = "client">Hire for a project</span>
                                <span class="user_type btn btn-default" data-type = "freelancer">Work as a freelancer</span>
                                <input type="hidden" name = 'user_type' id = "user_type">
                                <span class="error_message" id = "usertype_error"></span>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" id = "signin_user" class="btn btn-success">
                                        Log In
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
