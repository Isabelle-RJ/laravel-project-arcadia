<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\ConsultAnimal;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use RuntimeException;

class AnimalsController extends Controller
{
    public function index(): View
    {
        $animals = Animal::all()->sortBy('name');
        return view('page.animals', compact('animals'));
    }

    /**
     * @throws Exception
     */
    public function show(string $name): View
    {
        $animal = Animal::query()->where('name', '=', $name)->with('habitat')->first();
        $consultAnimal = ConsultAnimal::query()->where('animal_id', '=', $animal->id)->first();

        ++$consultAnimal->nb_view;

        $consultAnimal->save();

        if (!$animal) {
            throw new Exception("Il n'y a pas d'animal avec le nom $name", 404);
        }

        $animal->nb_view = $consultAnimal->nb_view;

        return view('page.animal-sheet', compact('animal'));
    }

    /**
     * @throws RuntimeException
     */
    public function getNumberOfViews(int $id): JsonResponse
    {
        $nbViews = ConsultAnimal::query()->where('animal_id', '=', 2)->first();

        if (!$nbViews) {
            throw new RuntimeException("Il n'y a pas d'animal avec l'id $id", 404);
        }

        return response()->json(compact('nbViews'));
    }
}
