<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

class Page
{
    public $filename;

    public function __construct()
    {
        $this->filename = collect(File::allFiles(app_path('Pages/Posts')))
            ->sortByDesc(function ($file) {
                return $file->getBaseName();
            })->map(function ($file) {
                return $file->getBaseName();
            });
    }
}
