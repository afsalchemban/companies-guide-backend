<?php

namespace App\Services\Activity;

class LatestActivity
{
    public $name;
    public $status;
    public function __construct($name,$status)
    {
        $this->name=$name;
        $this->status=$status;
    }
}
