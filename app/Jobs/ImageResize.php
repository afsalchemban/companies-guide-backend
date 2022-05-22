<?php

namespace App\Jobs;

use App\Models\Company;
use App\Services\Image\ImageService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ImageResize implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $imageFile;
    protected $company;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($imageFile,$company)
    {
        $this->imageFile = $imageFile;
        $this->company = $company;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(ImageService $imageService)
    {
        $imageService->updateCompanyLogoImageForJob($this->company,$this->imageFile);
    }
}
