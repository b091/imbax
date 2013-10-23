<?php

class AdminController extends Controller
{

    public function __construct()
    {
//        $this->beforeFilter('auth', array('except' => 'login'));
    }

    /**
     * @param string $lang
     * @param string $pagelink
     * @param null $param
     * @return mixed
     */
    public function index($lang = 'pl', $pagelink = 'login', $param = null)
    {

        App::setLocale($lang);

        if (!Auth::check())
        {
            $pagelink = 'login';
        }

        if ($pagelink == 'index')
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

    public function configuration()
    {
        return View::make('admin.modules.configuration')->with('configurationform', Configuration::whereRaw('lang_code = ?', array(App::getLocale()))->get() );
    }

    /**
     * @return mixed
     */
    public function dashboard()
    {
        return  View::make("admin.modules.dashboard");
    }

    /**
     * @return mixed
     */
    public function login()
    {
        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))) || Auth::check())
        {
            return Redirect::to('/admin/' . App::getLocale() .'/dashboard.html');
        }

        return View::make('admin.login');
    }

    /**
     * @return mixed
     */
    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function menu($id)
    {
        $menuelement = Menu::find($id);
        $view = View::make("admin.modules.{$menuelement->layout}")->with('menuelement', $menuelement);

        switch ($menuelement->layout)
        {
            case 'products' :
                $view->with('products', Product::whereRaw('menu_id = ?', array($id))->get())
                     ->with('productsoptions', ProductsOptions::all());
                break;
            case 'gallery' :
                $view->with('gallery', Gallery::whereRaw('menu_id = ?', array($id))->get());
                break;
        }

        return $view;
    }

}