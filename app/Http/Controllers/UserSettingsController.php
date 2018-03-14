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
        return view('freelancer.settings', ['data' => $data]);
    }
    public function client_settings(){

        $data['title'] = 'Client Settings - Fulllance';
        return view('client.settings', ['data' => $data]);
    }
}