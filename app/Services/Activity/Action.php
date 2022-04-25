<?php

namespace App\Services\Activity;

class Action
{
    public $name;
    public $title;
    public function __construct($action)
    {
        $this->name = $action['name'];
        $this->title = $action['title'];
    }
}
