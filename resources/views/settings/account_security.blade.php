@extends('layouts.settings')

@section('content')

    <div class="tab_title">
        <h3>Password & Security</h3>
    </div>

    <div class="air-card m-t-40">
        <header>
            <h3 class="m-b-0 m-t-0">Password</h3>
        </header>
        <section>
            <div class="p-l-30 p-r-30">
                <div class="row">
                    <div class="col-md-9">
                        <div class="hasPassword">
                            <div class="pull-left text-success mid-icon">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="p-l-20">
                                <p><strong class="p-l-10">Password has been set</strong></p>
                                <p class="p-l-10">Choose a strong, unique password that’s at least 8 characters long.</p>
                            </div>
                        </div>
                        <div class="editPassword hidden">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Old password</label>
                                    <input type="password" class="form-control" name = "old_password">
                                </div>
                                <div class="form-group">
                                    <label for="">New password</label>
                                    <input type="password" class="form-control" name = "new_password">
                                </div>
                                <div class="form-group">
                                    <label for="">Confirm new password</label>
                                    <input type="password" class="form-control" name = "confirm_password">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name = "change_password" checked>
                                    <span>Require that all devices sign in with new password</span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-success pull-right m-t-20" id = "edit_password">
                            Edit
                        </button>
                        <button class="btn btn-success btn-full hidden m-t-20" id = "save_password">Save</button>
                        <button class="btn btn-link btn-full hidden m-t-10" id = "cancel_password">Cancel</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="air-card m-t-40">
        <header>
            <h3 class="m-b-0 m-t-0">Two-Step Verification</h3>
            <p class="p-t-10">Help protect your account by enabling extra layers of security.</p>
        </header>
        <section>
            <div class="p-l-30 p-r-30">
                <div class="row">
                    <div class="col-md-9">
                        <h4>Security Question</h4>
                        <div class="hasSecurity m-t-20">
                            <div class="pull-left text-success mid-icon">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="p-l-20">
                                <p><strong class="p-l-10">Security question has been enabled</strong></p>
                                <p class="p-l-10">Confirm your identity with a question only you know the answer to.</p>
                            </div>
                        </div>
                        <div class="editSecurity hidden">
                            <p>
                                Before you can set a new security question, you’ll have to answer your current one correctly.
                            </p>
                            <form action="">
                                <div class="existingQuestion m-t-30">
                                    <h4>Existing question</h4>
                                    <p>Your best friend's nickname</p>
                                    <div class="form-group m-t-20">
                                        <label for="">Answer</label>
                                        <input type="text" class="form-control" name = "existing_answer">
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="">New question</label>
                                        <select name="question" id="question" class="form-control">
                                            <option value="" selected>Please select...</option>
                                            <option value="Your mother's maiden name">Your mother's maiden name</option>
                                            <option value="Your first pet's name">Your first pet's name</option>
                                            <option value="The name of your elementary school">The name of your elementary school</option>
                                            <option value="Your elementary school mascot">Your elementary school mascot</option>
                                            <option value="Your best friend's nickname">Your best friend's nickname</option>
                                            <option value="Your favorite sports team">Your favorite sports team</option>
                                            <option value="Your favorite writer">Your favorite writer</option>
                                            <option value="Your favorite actor">Your favorite actor</option>
                                            <option value="Your favorite singer">Your favorite singer</option>
                                            <option value="Your favorite song">Your favorite song</option>
                                            <option value="The name of the street you grew up on">The name of the street you grew up on</option>
                                            <option value="Make and model of your first car">Make and model of your first car</option>
                                            <option value="The city where you first met your spouse">The city where you first met your spouse</option>
                                            <option value="other">Other...</option>
                                        </select>
                                    </div>
                                    <div class="form-group hidden" id = "custom_question">
                                        <label for="">Custom Question</label>
                                        <input type="text" name = "custom_question" class="form-control">
                                    </div>
                                    <div class="form-group m-t-20">
                                        <label for="">Answer</label>
                                        <input type="text" name = "answer" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name = "locking_notice">
                                        <span>I understand my account will be locked if I am unable to answer this question</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name = "remember_device">
                                        <span>Remember this device</span>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-success pull-right m-t-20" id = "edit_security">
                            Edit
                        </button>
                        <button class="btn btn-success btn-full hidden m-t-30" id = "save_security">Save</button>
                        <button class="btn btn-link btn-full hidden m-t-10" id = "cancel_security">Cancel</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection