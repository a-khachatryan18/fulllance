<?php
/**
 * Created by PhpStorm.
 * User: arevik
 * Date: 3/9/18
 * Time: 11:23 PM
 */

namespace App\Http\Controllers;
use Auth;

class FreelancerController extends Controller
{

    public function find_work(){

        $data['title'] = 'Create an account - Fulllance';
        $user = Auth::user();
//        dd($user);
        return view('freelancer.find-work', ['data' => $data]);
    }
}