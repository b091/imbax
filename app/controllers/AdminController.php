<?php

class AdminController extends Controller
{

    public function index()
    {
        return View::make("admin.login");
    }

    public function login()
    {
        return Response::json(
            array(
                'error' => (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))) || Auth::check()),
                'response' => ''
            ),
            200
        );
    }

    public function logout()
    {
        Auth::logout();
        return Response::json(
            array(
                'error' => false,
                'response' => 'logged out'
            ),
            200
        );
    }
}