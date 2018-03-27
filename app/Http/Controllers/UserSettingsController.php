<?php
/**
 * Created by PhpStorm.
 * User: arevik
 * Date: 3/14/18
 * Time: 10:42 PM
 */

namespace App\Http\Controllers;


class UserSettingsController extends Controller
{

    public function settings(){

        $data['title'] = 'Freelancer Settings - Fulllance';
        return view('settings.contact_info', ['data' => $data]);
    }
    public function client_settings(){

        $data['title'] = 'Client Settings - Fulllance';
        return view('settings.client_info', ['data' => $data]);
    }

    public function profile_info(){

        $data['title'] = 'Profile Settings';
        return view('settings.profile_info', ['data' => $data]);
    }

    public function notification_settings(){

        $data['title'] = 'Notification Settings';
        return view('settings.notifications', ['data' => $data]);
    }
    public function app_authorizations(){

        $data['title'] = 'App Authorizations';
        return view('settings.app_authorization', ['data' => $data]);
    }
    public function membership_connects(){

        $data['title'] = 'Membership & Connects';
        return view('settings.membership_connects', ['data' => $data]);
    }
    public function myteams(){

        $data['title'] = 'My Teams';
        return view('settings.myteams', ['data' => $data]);
    }

    public function tax_info(){

        $data['title'] = 'Tax Information';
        return view('freelancer.tax-info', ['data' => $data]);
    }
    public function get_paid(){

        $data['title'] = 'Get Paid';
        return view('freelancer.get_paid', ['data' => $data]);
    }

    public function billing_methods(){

        $data['title'] = 'Billing Methods';
        return view('settings.billing', ['data' => $data]);
    }
    public function password_security(){

        $data['title'] = 'Password & Security';
        return view('settings.account_security', ['data' => $data]);
    }


}