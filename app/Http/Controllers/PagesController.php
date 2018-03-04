<?php
/**
 * Created by PhpStorm.
 * User: arevik
 * Date: 2/25/18
 * Time: 5:33 PM
 */

namespace App\Http\Controllers;


class PagesController extends Controller
{


    public function how_it_works($user_type){
        if($user_type == 'client'){

            return view('client.howitworks');
        }
        else if($user_type == 'freelancer'){

            return view('freelancer.howitworks');
        }
        else if($user_type == 'faq'){

            return view('faq');
        }
        else{
            abort(404);
        }

    }
}