<?php
class Model
{
    public $dao;

    function __construct()
    {
        $this->dao = new DAO('localhost', 'root', 'zentao', 'term');
    }
}
