<?php

namespace App\Http\Controllers;

use App\Models\Habitat;
use App\Models\Services;
use App\Models\Zoo;
use Exception;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @throws Exception
     */
    public function index(): View
    {
        $zoo = Zoo::query()->where('name','=','Arcadia')->first();
        if (!$zoo){
            throw new Exception("Tu n'as pas de zoo", 404);
        }

        $habitats = Habitat::query()->where('zoo_id', '=', $zoo->id)->get();
        $services = Services::query()->where('zoo_id', '=', $zoo->id)->orderByDesc('name')->get();

        return view('home', compact('zoo', 'habitats', 'services'));
    }
}
