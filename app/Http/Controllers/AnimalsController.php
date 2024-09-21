<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Requests\AnimalsFormRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AnimalsController extends Controller
{
    public function index(): View
    {
        $animals = Animal::all();
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

        return redirect()->route('home');
    }

}
