<?php

namespace App\Http\Controllers;

use App\Models\Zoo;
use App\Requests\ZooFormRequest;
use Illuminate\Contracts\View\View;

class ZooController extends Controller
{
    public function create(ZooFormRequest $request): void
    {
        $zoo = new Zoo();
        $zoo->name = $request->name;
        $zoo->description = $request->description;
        $zoo->save();
    }

    public function index(): View
    {
        return view('admin.zoo.create');
    }

    public function update(ZooFormRequest $request, string $name): void
    {
        $zoo = Zoo::query()->where('name','=', $name)->first();
        $zoo->name = $request->name;
        $zoo->description = $request->description;
        $zoo->save();
    }

    public function edit(string $name): View
    {
        $zoo = Zoo::query()->where('name','=', $name)->first();
        return view('admin.zoo.edit', compact('zoo'));
    }
}
