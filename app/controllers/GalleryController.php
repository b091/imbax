<?php

class GalleryController extends Controller
{

    public function add()
    {
        $file = Input::file('photo');
        $title = Input::get('title');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();

        $image = new Gallery();

        $image->name = $title;
        $image->photo = $filename;
        $image->menu_id = Input::get('menu');

        $file->move('files' . DIRECTORY_SEPARATOR . 'gallery', $filename);

        $image->save();

        return Redirect::to($_SERVER['HTTP_REFERER']);

    }

}