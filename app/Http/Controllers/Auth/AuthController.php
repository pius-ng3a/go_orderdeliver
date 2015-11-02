<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Hash;

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
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'authenticate']);
    }
    protected $redirectPath = '/home';

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
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

    /*authenticate users */
    public function authenticate(Request $request)
    {
        $this->validate($request,
            ['email'=>'required','password'=>'required']
        );
        $email = $request->input('email');
        $password =$request->input('password');

        if ((Auth::attempt(['email' => $email, 'password' => $password],true)))
        {
            \Session::flash('logged_in',trans('pagination.loginSuccess'));
            $users = User::all(['email','user_type'])->where('email',$email);
            foreach($users as $user){
                if($user->user_type == 'P'){
                    $rules = \App\Rule::all(['rule_name','controller']);
                    //dd($rules[0]->rule_name);
                    return view('/admin/admindashboard',compact('rules'));//->withMessage($rules);//,compact('rules'));

                }
                elseif($user->user_type =='C'){
                    return redirect()->intended($this->redirectPath());
                }
                else{
                    return redirect('/testauth');
                }

            }

            return redirect()->intended('dashboard');
        }
        return redirect('/account/login')
            ->withInput($request->only('email'))
            ->withErrors(['email'=>"Credentials provided are incorrect!your pass is {$request->input('password')}, $password while youremail is $email"])
            ;
    }
}
