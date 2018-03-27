<?php
/**
 * Created by PhpStorm.
 * User: arevik
 * Date: 3/9/18
 * Time: 11:23 PM
 */

namespace App\Http\Controllers;
use Auth;
use App\User;

class FreelancerController extends Controller
{

    public function find_work(){

        $data['title'] = 'My job feed - Fulllance';
        $user = Auth::user();
//        dd($user);
        return view('freelancer.find-work', ['data' => $data]);

    }

    public function showProfile($profile_id){

        $freelancer = User::where('profile_id', $profile_id)->first();
//        dd($freelancer);
        if(count($freelancer) > 0){
            $title = $freelancer->first_name." ". str_limit($freelancer->last_name,1,'.')." - ". "Fulllance freelancer";
            $data['title'] = $title;
            $data['freelancer'] = $freelancer;
            return view('freelancer.profile',['data' => $data]);
        }
        else{
            abort(404);
        }

    }

}