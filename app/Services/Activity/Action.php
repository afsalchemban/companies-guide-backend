<?php

namespace App\Services\Activity;

class Action
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}
