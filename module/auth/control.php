<?php
class LoginController extends Controller
{
    public function get($next = '/')
    {
        if($this->auth->isLogon())
        {
            if(strpos($next, '/login') === false)
            {
                $this->redirect($next);
            }
            else
            {
                $this->redirect('/');
            }
        }
        $this->render();
    }
    
    public function post()
    {
        extract($_POST);
        $user = $this->auth->identify($account, $password);
        if($user)
        {
           die($this->redirect($next));
        }
        $this->redirect('/login');
    }
}

class LogoutController extends Controller
{
    public function get()
    {

    }

}

class RegController extends Controller
{
    public function get($code = '')
    {
        if($this->auth->isLogon()) $this->redirect('/'); if(!empty($_POST)) 
        {
            extract($_POST);
            $this->auth->createUser($account);
        }
        $this->render();
    }
}
