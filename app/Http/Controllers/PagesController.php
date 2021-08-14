<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class PagesController extends Controller
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

    static function getContent($pageName){
        return file_get_contents(app_path("Pages/Posts/".$pageName));
    }
}
