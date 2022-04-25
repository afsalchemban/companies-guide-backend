<?php

namespace App\Services\Activity;

class LatestActivity
{
    public $name;
    public bool $status;
    public function __construct($name,$status)
    {
        $this->name=$name;
        $this->status=$status;
    }
}
