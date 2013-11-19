<?php
class CreateController extends Controller
{
    public function get()
    {
        $this->render(); 
    }

    public function post()
    {
        $this->img->create();
    }
}
