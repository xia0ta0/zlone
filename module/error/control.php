<?php
class NotFoundController extends Controller
{
    public function get()
    {
		header('HTTP/1.0 404 Page Not Found');
        $this->render();
    }
}
