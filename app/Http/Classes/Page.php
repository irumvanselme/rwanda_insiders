<?php
namespace App\Http\Classes;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Page
{
    static function allPages(): Collection
    {
        return collect(File::allFiles(app_path('Pages/Posts')))
            ->sortByDesc(function ($file) {
                return $file->getBaseName();
            })
            ->map(function ($file) {
                return $file->getBaseName();
            });
    }

    static function getContent($pageName): string
    {
        return Storage::get("Pages/Posts/".$pageName);
    }
}
