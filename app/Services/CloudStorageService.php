<?php

namespace App\Services;

use App\Interfaces\CloudStorageInterface;
use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\Storage;

class CloudStorageService implements CloudStorageInterface
{
    public function uploadFile($path, UploadedFile $file)
    {
        if($path = Storage::putFile($path, $file))
        {
            return $path;
        }
        return false;
    }
    public function storeFile($path, UploadedFile $file)
    {
        return $file->store($path);
    }
}
