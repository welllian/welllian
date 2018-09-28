<?php

namespace App\Http\Controllers;

use App\Models\Template;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = Template::paginate(10);

        return view('user.template.index', compact('templates'));
    }

}
