<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ServicesController extends Controller
{
    public function services(): View
    {
        return view('page.services');
    }
}
