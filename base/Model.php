<?php

namespace mcore\base;



class Model
{
    public $errors;
    public $db;


    function __construct()
    {
        $this->db = new DB();
    }

}