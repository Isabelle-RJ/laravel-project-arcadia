<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Food;
use App\Models\FoodConsum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class FoodsConsumAdminController extends Controller
{
    public function index(): View
    {
        return view('admin.zoo.foods-consum.index');
    }

    public function create(Request $request): void
    {
        $foodConsum = new FoodConsum();
        $foodConsum->animal_id = $request->animal_id;
        $foodConsum->food_id = $request->food_id;
        $foodConsum->quantity = $request->quantity;
        $foodConsum->unit = $request->unit;
        $foodConsum->user_id = Auth::user()->id;
        $foodConsum->save();
    }

    public function createForm(): View
    {
        $animals = Animal::all();
        $foods = Food::all();
        return view('admin.zoo.foods-consum.create', compact('animals', 'foods'));
    }
}
