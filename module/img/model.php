<?php
class ImgModel extends Model
{
    public function create()
    {
        if (empty($_FILES['image'])) return '';

        $upload = new Upload('/home/z/term/static/img/upload');
        dump($_FILES);
        $upload->file($_FILES['image']);

        $results = $upload->upload();

        var_dump($results);
    }
}
