<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the Google authentication page.
     * 
     * @return \Illuminate\Htpp\Response
     * 
     */
    public function redirectToProvider($service)
    {
        return Socialite::driver($service)->redirect();
    }

    /**
     * Obtain the user information from Google.
     * 
     * @return \Illuminate\Htpp\Response
     * 
     */
    public function handlePRoviderCallback($service)
    {
        try {
            $googleUser = Socialite::driver($service)->user();
            $existUser = User::where('email', $googleUser->email)->first();

            if($existUser) {
                Auth::loginUsingId($existUser->id);
            }
            else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                $user->password = md5(rand(1,10000));
                $user->avatar = $googleUser->avatar;
                $user->avatar_original = $googleUser->avatar_original;
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/home');
        }
        catch (Exception $e) {
            return 'error';
        }
        // try {
        //     $user = Socialite::driver($service)->stateless()->user();
        //     // return $user->token;
        //     dd($user);
        //     // return view('home')->withDetails($user)->withService($service);
        // } catch (\Exception $e) {
        //     return redirect('/login');
        // }

        // // only allow people with @company.com to login
        // if(explode("@", $user->email) [1] !== 'company.com') {
        //     return redirect()->to('/');
        // }

        // // check if they're an existing user
        // $existingUser = User::where('email', $user->email)->first();

        // if($existingUser) {
        //     // log them in
        //     auth()->login($existingUser, true);
        // } else {
        //     // create a new user
        //     $newUser                        = new User;
        //     $newUser->name                  = $user->name;
        //     $newUser->email                 = $user->email;
        //     $newUser->google_id             = $user->id;
        //     $newUser->avatar                = $user->avatar;
        //     $newUser->avatar_original       = $user->avatar_original;
        //     $newUser->save();

        //     auth()->login($newUser, true);
        // }
        // return redirect()->to('/home');
    }

    /**
     * 
     *  Logout
     */

     public function logout(Request $request)
     {
         Auth::logout();
         return redirect('/login');
     }
}
