<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Zoo;
use App\Requests\ZooFormRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ZooAdminController extends Controller
{
    public function create(ZooFormRequest $request): RedirectResponse
    {
        $zoo = new Zoo();
        $zoo->name = $request->name;
        $zoo->description = $request->description;

        $zoo->save();

        return redirect()->route('home');
    }

    public function createForm(): View
    {
        return view('admin.zoo.create');
    }
}