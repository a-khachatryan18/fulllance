@extends('layouts.settings')

@section('content')
    <div class="tab_title">
        <h3>Tax information</h3>
    </div>
    <div class="air-card m-t-40">
        <section class="p-l-30">
            <div class="row">
                <div class="col-md-2">
                    <p class="w-eight">W-8BEN</p>
                    <p class="w-nine hidden">W-9</p>
                </div>
                <div class="col-md-8">
                    <div class="display_tax_info">
                        <p class="w-eight-info">Before withdrawing funds, all non-U.S. persons must provide their W-8BEN tax information.</p>
                        <p class="w-nine-info hidden">Before withdrawing funds, all U.S. persons must provide their W-9 tax information.</p>
                        <div class="row">
                            <div class="col-md-3">
                                <p>Legal Name</p>
                            </div>
                            <div class="col-md-9">
                                <p>{{ Auth::user()->first_name." ". Auth::user()->last_name }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p>Address</p>
                            </div>
                            <div class="col-md-9">
                                @if(Auth::user()->address !== '')
                                    <p>{{ Auth::user()->address }}</p>
                                @endif
                                @if(Auth::user()->city !== '')
                                    <p>{{ Auth::user()->city }}</p>
                                @endif
                                @if(Auth::user()->postal_code !== '')
                                    <p>{{ Auth::user()->postal_code }}</p>
                                @endif
                                @if(Auth::user()->country !== '')
                                    <p>{{ Auth::user()->country }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p>Federal Tax Classification</p>
                            </div>
                            <div class="col-md-9">
                                <p>N/A - Non-US</p>
                            </div>
                        </div>
                    </div>
                    <div class="edit_tax_info hidden">
                        <form action="">
                            <p>To collect the right information, indicate if you are a U.S. person:</p>
                            <div class="form-group">
                                <input type="radio" name="us_person" class="us_person" checked id = "not_us_person"> I am not a U.S. person
                            </div>
                            <div class="form-group">
                                <input type="radio" name="us_person" class="us_person" id = "us_person"> I am a U.S. person
                            </div>
                        </form>
                        <p class="w-eight-info">Before withdrawing funds, all non-U.S. persons must provide their W-8BEN tax information.</p>
                        <p class="w-nine-info hidden">Before withdrawing funds, all U.S. persons must provide their W-9 tax information.</p>
                        <div class="form-group">
                            <label for=""><strong>Legal Name of Business</strong></label>
                            <input type="text" class="form-control" name = "business_name" value = "{{ Auth::user()->first_name." ". Auth::user()->last_name }}">
                            <p>Provide the same name as shown on your tax return.</p>
                        </div>
                        <div class="address_part">
                            <p><strong>Address</strong>
                                <a href="{{ url('freelancer/settings') }}">Change</a>
                            </p>
                            <div class="p-l-20">
                                @if(Auth::user()->address !== '')
                                    <p>{{ Auth::user()->address }}</p>
                                @endif
                                @if(Auth::user()->city !== '')
                                    <p>{{ Auth::user()->city }}</p>
                                @endif
                                @if(Auth::user()->postal_code !== '')
                                    <p>{{ Auth::user()->postal_code }}</p>
                                @endif
                                @if(Auth::user()->country !== '')
                                    <p>{{ Auth::user()->country }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="w-eight-items">
                            <div class="form-group">
                                <input type="checkbox" name="certify" class=""> I certify, under penalties of perjury, that:
                                <div class="p-l-10">
                                    <ol>
                                        <li>the above information is true and correct and I will update it if it changes,</li>
                                        <li>I am the beneficial owner (or am authorized to sign for the beneficial owner) of all the income to be received under this Upwork account,</li>
                                        <li>I am not (or the beneficial owner is not) a U.S. person,</li>
                                        <li>the services performed under this Upwork account will not be performed in the U.S. and</li>
                                        <li>the income related to this Upwork account will not be effectively connected with the conduct of a U.S. trade or business.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="w-nine-items hidden">
                            <div class = "form-group">
                                <label for="">Federal Tax Classification</label>
                                <select name="federal_tax" id="federal_tax" class="form-control">
                                    <option value="0">Please select classification</option>
                                    <option value="1">Individual/sole proprietor or single-member LLC</option>
                                    <option value="2">Limited liability company</option>
                                    <option value="3">C Corporation</option>
                                    <option value="4">S Corporation</option>
                                    <option value="5">Partnership</option>
                                    <option value="6">Trust/estate</option>
                                    <option value="7">Other</option>
                                </select>
                                <input type="text" class="form-control m-t-10" name = "other_tax" disabled id = "other_tax">
                            </div>
                            <div class="form-group">
                                <label for="">Taxpayer Identification Number Type</label>
                                <div>
                                    <input type="radio" name = "taxpayer_type">
                                    <span>Social Security Number (SSN)</span>
                                </div>
                                <div>
                                    <input type="radio" name = "taxpayer_type">
                                    <span>Employer Identification Number (EIN)</span>
                                </div>
                            </div>
                            <p class="employer_info m-t-20">
                                An employer identification number (EIN) is a U.S. tax identification number (TIN) issued to businesses. For additional information, or to apply for an EIN, you may visit this website.
                            </p>
                            <div class="form-group">
                                <label for="">SSN/EIN #</label>
                                <input type="text" class="form-control" name = "ssn_ein">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="certify" class=""> I certify, under penalties of perjury, that:
                                <div class="p-l-10">
                                    <ol>
                                        <li>The number shown on this form is my correct taxpayer identification number (or I am waiting for a number to be issued to me); and</li>
                                        <li>I am not subject to backup withholding because: (a) I am exempt from backup withholding, or (b) I have not been notified by the Internal Revenue Service (IRS) that i am subject to backup withholdings as a result of a failure to report all interest or dividends, or (c) the IRS has notified me that I am no longer subject to backup withholdings; and</li>
                                        <li>I am a U.S. citizen or other U.S. person</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <p><strong>Note:</strong> Only check this certification if all of these items are true; otherwise
                            <a href="">contact Customer Support.</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-success" id = "edit_tax">Edit</button>
                    <button class="btn btn-success hidden" id = "save_tax">Save</button>
                    <button class="btn btn-link hidden m-t-10" id = "cancel_tax">Cancel</button>
                </div>
            </div>
        </section>
    </div>
@endsection