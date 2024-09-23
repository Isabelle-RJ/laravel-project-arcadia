<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Habitat;
use App\Requests\AnimalsFormRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AnimalsController extends Controller
{
    public function index(): View
    {
        $animals = Animal::all()->groupBy('habitat_id');
        return view('page.animals', compact('animals'));
    }

    /**
     * @throws Exception
     */
    public function show(string $name): View
    {
       $animal = Animal::query()->where('name', '=', $name)->first();
       if (!$animal) {
           throw new Exception("Tu n'as pas d'animal", 404);
       }
       return view('page.animal', compact('animal'));
    }

    public function create(AnimalsFormRequest $request): RedirectResponse
    {
        $path = $request->file('image')->getClientOriginalName();

        $animal = new Animal();
        $animal->habitat_id = $request->habitat_id;
        $animal->name = $request->name;
        $animal->breed = $request->breed;
        $animal->description = $request->description;

        $animal->image = $path;

        if (!Storage::disk('public')->exists('asset/images')) {
            Storage::disk('public')->makeDirectory("assets/images");
        }
        Storage::disk('public')->putFileAs("asset/images",$request->file('image'), $path);

        $animal->save();
        return redirect()->route('home');
    }

    public function createForm(): View
    {
        $habitats = Habitat::all();
        return view ('admin.zoo.animals.create', compact('habitats'));
    }

    /**
     * @throws Exception
     */
    public function edit(string $name): View
    {
        $animal = Animal::query()->where('name', '=', $name)->first();
        // if (!$animal) {
         //   throw new Exception("Cet animal n'existe pas.", 404);
        //  }
        return view('admin.zoo.animals.edit', compact('animal'));
    }

    public function update(AnimalsFormRequest $request, string $name): RedirectResponse
    {
        $habitat = Habitat::query()->where('id', '=', $request->habitat_id)->first();
        $animal = Animal::query()->where('name', '=', $name)->first();

        $animal->habitat_id = $habitat->id;
        $animal->name = $request->name;
        $animal->breed = $request->breed;
        $animal->image = $request->image;
        $animal->description = $request->description;

        $animal->save();
        return redirect()->route('home');
    }

    public function delete(string $name): RedirectResponse
    {
        $animal = Animal::query()->where('name', '=', $name)->first();
        Storage::disk('public')->delete('asset/images/' .$animal->image);
        $animal->delete();

        return redirect()->route('home');
    }

}
