<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Models\Clients;
use App\Models\Freelancers;
use Validator;
use Session;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function showSignup()
    {

        $data['title'] = 'Create an account - Fulllance';
        return view('auth.register', ['data' => $data]);
    }

    public function checkEmail(Request $request){
        $email = $request->email;
        $validator = Validator::make($request->all(), [
            'email' => 'email|unique:freelancers,email|unique:clients'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $errors =  json_decode($errors);

            return response()->json([
                'success' => false,
                'message' => $errors
            ]);
        }
    }
    public function checkUsername(Request $request){
        $username = $request->username;

        $validator = Validator::make($request->all(), [
            'username' => 'unique:freelancers'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $errors =  json_decode($errors);

            return response()->json([
                'success' => false,
                'message' => $errors
            ]);
        }
    }

    public function checkCaptcha(Request $request){
        $rules = ['captcha' => 'required|captcha'];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        {
            return response()->json([
                'success' => false,
                'message' => 'Incorrect captcha, try again'
            ]);
        }
        else
        {
            return response()->json([
                'success' => true,
                'message' => 'Valid'
            ]);
        }
    }
    public function login_user(Request $request){

        $username = $request->username;
        $password = $request->password;
        $user_type = (isset($request->user_type) && !empty($request->user_type)) ? $request->user_type : 'freelancer';
        $remember = (isset($request->remember) && !empty($request->remember)) ? true : false;

        if($remember){
            if (Auth::guard($user_type)->attempt(['username'=> $username, 'password' => $password], $remember)) {
                if($user_type === 'freelancer'){
                    $this->redirectTo = '/find-work';
                }
                else{
                    $this->redirectTo = '/jobs-home';
                }
                return redirect()->intended($this->redirectTo);
            }
            elseif (Auth::guard($user_type)->attempt(['email'=> $username, 'password' => $password], $remember)) {
                if($user_type === 'freelancer'){
                    $this->redirectTo = '/find-work';
                }
                else{
                    $this->redirectTo = '/jobs-home';
                }
                return redirect()->intended($this->redirectTo);
            }
            else {
                echo "fail!";
            }
        }
        else{
            if (Auth::guard($user_type)->attempt(['username'=> $username, 'password' => $password])) {
                if($user_type === 'freelancer'){
                    $this->redirectTo = '/find-work';
                }
                else{
                    $this->redirectTo = '/jobs-home';
                }
                return redirect()->intended($this->redirectTo);
            }
            elseif (Auth::guard($user_type)->attempt(['email'=> $username, 'password' => $password])) {
                if($user_type === 'freelancer'){
                    $this->redirectTo = '/find-work';
                }
                else{
                    $this->redirectTo = '/jobs-home';
                }
                return redirect()->intended($this->redirectTo);
            }
            else {
                echo "fail!";
            }
        }


    }
    public function signup_user(Request $request){
        $user_type = $request->user_type;
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $location = $request->location;
        $password = $request->password;
        $username = $request->username;
        $notify = $request->notify_me;
        $confirmation_code = str_random(30);
        if($user_type === 'client'){
            $model = new Clients();
            $model->first_name = $first_name;
            $model->last_name = $last_name;
            $model->email = $email;
            $model->country = $location;
            $model->password = bcrypt($password);
            $model->notify = $notify;
            $model->confirmation_code = $confirmation_code;
            $model->save();
        }
        else{
            $model = new Freelancers();
            $model->first_name = $first_name;
            $model->last_name = $last_name;
            $model->email = $email;
            $model->password = bcrypt($password);
            $model->country = $location;
            $model->username = $username;
            $model->confirmation_code = $confirmation_code;
            $model->notify = $notify;

            $model->save();
        }
        $data = array(
            'confirmation_code' => $confirmation_code,
            'type' => $user_type,
            'name' => $first_name
        );
        Mail::send('emails.signup', array('data' => $data), function($message)
        {
            $message->from('necastacompany@gmail.com', 'Fulllance');
//            $message->to('arevikkhachatryan068@gmail.com')->subject('Welcome to Fulllance!');
            $message->to($email)->subject('Welcome to Fulllance!');
        });

        return redirect('/signin');
    }

    public function verify($type, $confirmation_code){
        if( !isset($confirmation_code) || !isset($type))
        {
            return redirect('signin');
        }
        if($type === 'client'){
            $user = Clients::where('confirmation_code',$confirmation_code)->first();
        }
        elseif($type === 'freelancer'){
            $user = Freelancers::where('confirmation_code',$confirmation_code)->first();
        }
        else{
            return redirect('signin');
        }

//        dd($user,$type);

        if ( ! $user)
        {
            return redirect('signin');
        }

        $user->active = 1;
        $user->confirmation_code = null;
        $user->save();

        Session::flash('You have successfully verified your account.');

        return Redirect::route('signin');
    }
    public function showSignin()
    {

        $data['title'] = 'Log In - Fulllance';
        return view('auth.login', ['data' => $data]);
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
