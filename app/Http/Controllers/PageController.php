<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Mail\Markdown;

class PageController extends Controller
{
    function test(){
        $content = Markdown::parse(Page::getContent("1.md"));
        return view("testing", compact("content"));
    }
}
