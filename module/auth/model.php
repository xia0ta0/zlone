<?php
class AuthModel extends Model
{

    function isLogon()
    {
        return false;
    }

    function identify($account, $password)
    {
        if(!$account or !$password) return false;

        $user = $this->db->fetchRow("SELECT * FROM user", array('account' => $account)); 
        if(!$user) return false;

        $password = md5($password . $user->join);
        if($password != $user->password) return false;

        return $user;
    }
}
