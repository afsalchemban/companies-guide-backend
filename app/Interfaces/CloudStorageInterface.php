<?php

namespace App\Interfaces;

use Illuminate\Http\UploadedFile;

interface CloudStorageInterface
{
    public function uploadFile($path, UploadedFile $file);
}
