<?php

namespace App\Models;


class MyUser
{
    public $name;
    public $password;
    public $description;
    
    public function __construct($name, $password, $description)
    {
        $this->name = $name;
        $this->password = $password;
        $this->description = $description;
    }
}