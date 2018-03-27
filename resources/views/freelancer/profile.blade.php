@extends('layouts.app')

@section('content')

    <section id = "profile_wrapper" class="logged_wrapper p-t-30">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div id = "profile_header" class="air-card">
                        <div class="row">
                            <div class="col-md-9 col-sm-8 col-xs-12">
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="{{ (!empty($freelancer->profile_img)) ? asset('uploads/avatars/').$freelancer->profile_img : asset('images/avatar.png')  }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-12">

                </div>
            </div>

        </div>
    </section>

@endsection