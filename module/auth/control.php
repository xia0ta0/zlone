<?php
class AuthController extends Controller
{
    public function login($next = '/')
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
        if(!empty($_POST))
        {
            extract($_POST);
            $user = $this->auth->identify($account, $password);
            if($user)
            {
               die($this->redirect($next));
            }
            $this->redirect('/login');
        }
        $this->render();
    }

    public function logout()
    {

    }

    public function reg($code = '')
    {
        if($this->auth->isLogon()) $this->redirect('/'); if(!empty($_POST)) 
        {
            extract($_POST);
            $this->auth->createUser($account);
        }
        $this->render();
    }
}
