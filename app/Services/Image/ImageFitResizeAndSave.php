<?php

namespace App\Services\Image;

use App\Models\Image;
use Intervention\Image\Facades\Image as ImageIntervention;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class ImageFitResizeAndSave
{
    public function resize(array $config, UploadedFile $file, $uploadPath, $associate, $type)
    {
        $associate->images()->where('type',$type)->delete();
        $image = new Image();
        $image->desktop_path = $this->_resizeImage($config['DESKTOP']['SIZE'],$file,$uploadPath."desktop");
        $image->mobile_path = $this->_resizeImage($config['MOBILE']['SIZE'],$file,$uploadPath."mobile");
        $image->thumbnail_path = $this->_resizeImage($config['THUMBNAIL']['SIZE'],$file,$uploadPath."thumbnail");
        $image->type = $type;
        $image->imageble()->associate($associate);
        $image->save();
    }
    private function _resizeImage($dimension,UploadedFile $file,$path)
    {
        $img = ImageIntervention::make($file->path());
        $resized = $img->fit($dimension['width'], $dimension['height'])->stream($file->extension());
        $fileName = $path.'/'.time().'.'.$file->extension();
        Storage::put($fileName, $resized);
        return Storage::url($fileName);
    }
}
