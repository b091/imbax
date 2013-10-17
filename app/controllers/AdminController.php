<?php

class AdminController extends Controller
{

    public function __construct()
    {
//        $this->beforeFilter('auth', array('except' => 'login'));
    }

    public function index($lang = 'pl', $pagelink = 'login')
    {

        App::setLocale($lang);

        if (!Auth::check()) {
            $pagelink = 'login';
        }

        if($pagelink == 'index')
        {
            $pagelink = 'dashboard';
        }

        if ($pagelink) {
            $pagelink = str_replace('.html', '', $pagelink);

            try {
                return $this->$pagelink();
            } catch (Exception $e) {
                return View::make('admin.404');
            }
        }
    }


    public function login($lang ='pl')
    {
        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))) || Auth::check())
        {
            return Redirect::to("/admin/{$lang}/dashboard.html");
        }

        return View::make('admin.login');
    }

    public function dashboard(){
        return View::make('admin.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }



}