<?php

class GalleryController extends Controller
{

    /**
     * Dodaje zdjecie do galerii i przekierowoje na ostatniego linka
     * @return mixed
     */
    public function add()
    {
        $file = Input::file('photo');
        $title = Input::get('title');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();

        $image = new Gallery();

        $image->setName($title)
              ->setPhoto($filename, $file)
              ->setMenuId(Input::get('menu'))
              ->save();

        return Redirect::to($_SERVER['HTTP_REFERER']);

    }

    /**
     * Usuwa zdjecie z galerii na podstawie id (ajax based)
     * @return string
     */
    public function remove()
    {
       $id = Input::get('id');
       unlink('files' . DIRECTORY_SEPARATOR . 'gallery' . DIRECTORY_SEPARATOR . Gallery::find($id)->photo);
       Gallery::destroy($id);
       return '{success:true}';
    }

}