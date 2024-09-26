<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Exception;
use Illuminate\View\View;

class ServicesController extends Controller
{
    public function index(): View
    {
        $services = Services::all();
        $cover = $services->random()->image;
        return view('page.services', compact('services', 'cover'));
    }
}
