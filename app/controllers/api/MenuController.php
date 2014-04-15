<?php

namespace Api;

use Response;
use Menu;

class MenuController extends \BaseController
{

    /**
     * @param Menu $menu
     * @return mixed
     */
    private function validateAndUpdate(Menu $menu)
    {
        $validator = Validator::make(
            Input::all(),
            array(
                'module' => 'required',
                'title' => array('required', 'min:5'),
                'content' => 'required',
                'pagelink' => array('required', 'min:6'),
                'mainpage' => 'required'
            )
        );

        if (!$validator->fails()) {
            $menu->setTitle(Input::get('title'))
                ->setContent(Input::get('content', ''))
                ->setPagelink(Input::get('pagelink'))
                ->setMainpage(Input::get('mainpage', false))
                ->save();
        }

        return Response::json(
            array(
                'error' => $validator->failed(),
                'message' => ''
            ),
            200
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Response::json(
            array(
                'error' => false,
                'response' => Menu::All()->toArray()
            ),
            200
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        return $this->validateAndUpdate(
            (new Menu())->setLayout(Input::get('module'))
                        ->setLang(App::getLocale())
        );
    }

    /**
     * Aktualizajca elmentu menu i przekierowanie na ostatni link
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        return $this->validateAndUpdate(Menu::find($id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        return Response::json(
            array(
                'error' => false,
                'response' => Menu::find($id)->toArray()
            ),
            200
        );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        return Response::json(
            array(
                'error' => false,
                'response' => 'Form for editing the specified resource :' . $id
            ),
            200
        );
    }

    /**
     * Usuwa element menu
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //        $asd = Product::where('menu_id', '=', $id);
        //        foreach ($asd as $product){
        //            $product->options()->detach();
        //            $product->delete();
        //        }
        Menu::destroy(Input::get('id'));
        return '/admin';
    }


    /**
     *
     * @return string
     */
    public function remove()
    {

    }

}