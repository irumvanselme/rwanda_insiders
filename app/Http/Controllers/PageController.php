<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class PageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Application
     */
    public function create(): Application
    {
        return view("pages.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Redirector|RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            "title" => "required|string|min:3",
            "path" => "required|string|min:4"
        ]);

        $page = Page::query()->create($data);

        return redirect("/pages", $page);
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect("pages.delete");
    }
}
