@extends('layouts.settings')

@section('content')

    <div class="air-card">
        <header>
            <h3 class="m-b-0 m-t-0">Account</h3>
            <button class="btn btn-default pull-right edit_setting">
                <span class="fa fa-pencil"></span>Edit
            </button>
        </header>
        <section>
            <div class="display_settings p-l-40">
                <div class="row">
                    <div class="col-md-3">
                        <p><strong>User ID</strong></p>
                        <p><strong>Name</strong></p>
                        <p><strong>Email</strong></p>
                    </div>
                    <div class="col-md-9">
                        <p>{{ Auth::user()->username }}</p>
                        <p>{{ Auth::user()->first_name." ". Auth::user()->last_name }}</p>
                        <p>{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
            <div class="edit_settings p-l-40 hidden">
                <form action="">
                    <div class="row">
                        <div class="col-md-3">
                            <p><strong>User ID</strong></p>
                        </div>
                        <div class="col-md-9">
                            <p>{{ Auth::user()->username }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" class="form-control">
                                <a href="">
                                    Please read Fulllance's policy on name changes
                                </a>
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Save</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    {{-- Location --}}
    <div class="air-card m-t-20">
        <header>
            <h3 class="m-b-0 m-t-0">Location</h3>
        </header>
        <section>
            <form action="">
                <div class="row">
                    <div class="col-md-3 p-l-40">
                        <p><strong>Time Zone</strong></p>
                        <p><strong>Address</strong></p>
                        <p><strong>Phone</strong></p>
                    </div>
                    <div class="col-md-9">
                        <p>{{ Auth::user()->timezone }}</p>
                        <p>{{ Auth::user()->country }}</p>
                        <p>{{ Auth::user()->phone }}</p>
                    </div>
                </div>
            </form>
        </section>
    </div>
    {{-- Invoice --}}
    <div class="air-card m-t-20">
        <header>
            <h3 class="m-b-0 m-t-0">Invoice Address (Optional)</h3>
        </header>
        <section>
            <form action="">
                <div class="row">
                    <p class="p-l-40">This address will be displayed on the invoice sent to clients.</p>
                    <div class="col-md-3 p-l-40">
                        <p><strong>Address</strong></p>
                    </div>
                    <div class="col-md-9">
                        <p>--</p>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection