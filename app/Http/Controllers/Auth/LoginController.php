<?php

namespace app\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Session\Store;
use VMN\Contracts\Auth\Authenticator;

class LoginController extends Controller
{
    protected $auth;

    protected $session;

    public function __construct(Authenticator $auth, Store $session)
    {
        $this->auth = $auth;
        $this->session = $session;
    }

    /**
     * Login
     *
     *
     */
    public function showLogin()
    {
        return view('login');
    }

    public function doLogin()
    {
        $credential = $this->auth->byPassword(\Request::input('username'), \Request::input('password'));
        if ( ! $credential)
        {
            return response()->redirectTo('login');
        }
        request()->session()->put('credential', $credential);
        return response()->redirectToRoute('home');
    }

    public function doLogout()
    {
        request()->session()->pull('credential');
        return response()->redirectToRoute('home');
    }

    public function showManagementLogin()
    {
        return view('managementLogin');
    }

    public function doManagementLogin()
    {
        $credential = $this->auth->byPassword(\Request::input('username'), \Request::input('password'));
        if ( ! $credential)
        {
            return '';
        }
        if ($credential->getRole() == 'admin')
        {
            $redirectName = 'adminHome';
        }
        if ($credential->getRole() == 'mod')
        {
            $redirectName = 'modHome';
        }
        request()->session()->put('managementCredential', $credential);
        return response()->redirectToRoute($redirectName);
    }

}