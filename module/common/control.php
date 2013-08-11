<?php
class Controller
{
    public $view = array();
    public $module;
    public $action;
    public $method;

    public function __construct($method, $module, $action)
    {
        $this->method = $method;
        $this->module = $module;
        $this->action = $action;
        $this->checkPriv();
    }

    public function checkPriv()
    {
        if($this->module != 'auth') $this->redirect('/login');
    }

    public function redirect($path, $code = 302) 
    {
        @header("Location: {$path}", true, $code);
        exit;
    }

    public function render($view = '')
    {
        if(!$view) $view = $this->action . '.html.php';
        extract($this->view, EXTR_SKIP);

        ob_start();
        require(SP . 'module/' . $this->module . '/view/' . $view);
        echo trim(ob_get_clean());
    }
}
