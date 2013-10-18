<?php

class AdminController extends Controller
{

    public function __construct()
    {
//        $this->beforeFilter('auth', array('except' => 'login'));
    }

    public function index($lang = 'pl', $pagelink = 'login', $param = null)
    {

        App::setLocale($lang);

        if (!Auth::check())
        {
            $pagelink = 'login';
        }

        if($pagelink == 'index')
        {
            $pagelink = 'dashboard';
        }

        if ($pagelink)
        {
            $pagelink = str_replace('.html', '', $pagelink);

            try
            {
                return $this->$pagelink($param)
                    ->with('lang', $lang)
                    ->with('langs', Langs::all())
                    ->with('menu', Menu::whereRaw('lang = ?', array($lang))->get());
            }
            catch (Exception $e)
            {
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


    public function menu($id)
    {
        $menuelement = Menu::find($id);
        $view = View::make("admin.modules.{$menuelement->layout}")->with('menuelement',  $menuelement);

        switch($menuelement->layout){
            case 'products' :
                      $view->with('products', Product::all());
                break;
        }

        return $view;
    }


}