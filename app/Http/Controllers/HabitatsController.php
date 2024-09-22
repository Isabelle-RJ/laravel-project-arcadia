<?php

namespace App\Http\Controllers;

use App\Models\Habitat;
use App\Models\Zoo;
use App\Requests\HabitatsFormRequest;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class HabitatsController extends Controller
{
    public function index(): View
    {
        $habitats = Habitat::all();
        return view('page.habitats', compact('habitats'));
    }

    public function habitats(): View
    {
        return view('page.habitats');
    }

    /**
     * @throws Exception
     */
    public function show(string $name): View
    {
        $habitat = Habitat::query()->where('name','=', $name)->first();
        if (!$habitat){
            throw new Exception("Tu n'as pas d'habitat", 404);
        }
        return view('page.habitat', compact('habitat'));
    }

    public function create(HabitatsFormRequest $request): RedirectResponse
    {
        $zoo = Zoo::query()->where('name', '=', 'Arcadia')->first();
        $path = $request->file('image')->getClientOriginalName();

        $habitat = new Habitat();
        $habitat->zoo_id = $zoo->id;
        $habitat->name = $request->name;
        $habitat->description = $request->description;

        $habitat->image = $path;

        if (!Storage::disk('public')->exists('asset/images')) {
            Storage::disk('public')->makeDirectory('asset/images');
        }
        Storage::disk('public')->putFileAs("asset/images",$request->file('image'), $path);

        $habitat->save();

        return redirect()->route('home');
    }

    public function createForm(): View
    {
        return view('admin.zoo.habitats.create');
    }

    public function edit(string $name): View
    {
        //$zoo = Zoo::query()->where('name', '=', 'Arcadia')->first();
        $habitat = Habitat::query()->where('name','=', $name)->first();

        return view('admin.zoo.habitats.edit', compact('habitat'));
    }

    public function update(HabitatsFormRequest $request, string $name): RedirectResponse
    {
        $zoo = Zoo::query()->where('name', '=', 'Arcadia')->first();
        $habitat = Habitat::query()->where('name', '=', $name)->first();

        $habitat->zoo_id = $zoo->id;
        $habitat->name = $request->get('name');
        $habitat->description = $request->get('description');
        $habitat->image = $request->get('image');

        $habitat->save();

        return redirect()->route('home');
    }

    public function delete(string $name): RedirectResponse
    {
        $habitat = Habitat::query()->where('name', '=', $name)->first();
        Storage::disk('public')->delete('asset/images/'.$habitat->image);
        $habitat->delete();

        return redirect()->route('home');
    }
}
