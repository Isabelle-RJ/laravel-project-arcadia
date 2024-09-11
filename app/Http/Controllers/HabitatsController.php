<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HabitatsController extends Controller
{
    public function habitats(): View
    {
        return view('page.habitats');
    }
}
