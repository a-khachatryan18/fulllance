<?php
/**
 * Created by PhpStorm.
 * User: arevik
 * Date: 2/15/18
 * Time: 9:59 PM
 */

namespace App\Http\Controllers;


class ClientPagesController extends Controller
{
    public function home()
    {
        return view('client.home');
    }
}