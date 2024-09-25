<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Exception;
use Illuminate\View\View;

class ServicesController extends Controller
{
    public function index(): View
    {
        return view('page.services');
    }

    /**
     * @throws Exception
     */
    public function show(string $name): View
    {
        $service = Services::query()->where('name', '=', $name)->first();
        if (!$service) {
            throw new Exception("Il n'y a pas de service", 404);
        }
        return view('page.service', compact('service'));
    }
}
