<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use SocialiteProviders\Manager\Config;

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
    protected $redirectTo = '/posts';

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
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        /*
         * $user User
         */
        $user = Socialite::driver('github')->user();
        (new User())->registerFromGithub($user);

        return redirect( route('posts.index'));
    }

    public function twitter()
    {
        $data =
            [
             'client_id' => env('TWITTER_KEY'),
            'client_secret' => env('TWITTER_SECRET'),
            'redirect' => env('TWITTER_REDIRECT_URI'),
             ];

        $config = new Config($data['client_id'],$data['client_secret'],$data['redirect']);
        return Socialite::with('twitter')->setConfig($config)->redirect();

    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function twittercallback()
    {
        /*
         * $user User
         */
        $user = Socialite::driver('twitter')->user();
        dd($user);
    }

    public function google()
    {
        return Socialite::with('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function googlecallback()
    {
        /*
         * $user User
         */
        $user = Socialite::driver('google')->user();
        (new User())->registerFromGoogle($user);

        return redirect( route('posts.index'));
    }

}
