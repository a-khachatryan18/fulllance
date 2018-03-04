<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Models\Clients;
use App\Models\Freelancers;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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
//        print($email);
        $validator = Validator::make($request->all(), [
            'email' => 'email|unique:freelancers,email|unique:clients,email'
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
    public function signup_user(Request $request){
        $data = $request->all();
        $user_type = $request->user_type;
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $location = $request->location;
        $password = $request->password;
        $notify = $request->notify_me;
        if($user_type === 'client'){
            $model = new Clients();
            $model->first_name = $first_name;
            $model->last_name = $last_name;
            $model->email = $email;
            $model->country = $location;
            $model->password = bcrypt($password);
            $model->notify = $notify;
            $model->save();
        }
        else{
            $model = new Freelancers();
            $model->first_name = $first_name;
            $model->last_name = $last_name;
            $model->email = $email;
            $model->password = bcrypt($password);
            $model->country = $location;
            $model->notify = $notify;
            $model->save();
        }

        dd($data);
    }
    public function showSignin()
    {

        $data['title'] = 'Log In - Fulllance';
        return view('auth.login', ['data' => $data]);
    }

    public function get_captcha(){
        $string = '';
        for ($i = 0; $i < 6; $i++) {
            $string .= chr(rand(97, 122));
        }
        session(['captcha' => $string]);
        $image = imagecreatetruecolor(200, 80);
        $font_path = public_path("/css/fonts/PlAGuEdEaTH.ttf");
        $color = imagecolorallocate($image, 51, 51, 51);
        $white = imagecolorallocate($image, 211, 211, 211);
        imagefilledrectangle($image,0,0,399,99,$white);
        imagettftext ($image, 30, 0, 60, 50, $color, $font_path, session('captcha'));
        header("Content-type: image/png");
        imagepng($image);
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
