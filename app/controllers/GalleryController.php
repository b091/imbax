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
              ->setPhoto($filename)
              ->setMenuId(Input::get('menu'));

        $file->move('files' . DIRECTORY_SEPARATOR . 'gallery', $filename);

        $image->save();

        return Redirect::to($_SERVER['HTTP_REFERER']);

    }

    /**
     * Usuwa zdjecie z galerii na podstawie id (ajax based)
     * @return string
     */
    public function remove()
    {
       $id = Input::get('id');
       $filename = Gallery::find($id)->photo;
       Gallery::destroy($id);
       unlink('files' . DIRECTORY_SEPARATOR . 'gallery' . DIRECTORY_SEPARATOR . $filename);
       //@todo usuwanie pliku
       return '{success:true}';
    }

}