<?php

namespace App\Http\Controllers;

use App\Models\Zoo;
use Exception;
use Illuminate\Contracts\View\View;
use function PHPUnit\Framework\throwException;

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
        return view('home', compact('zoo'));
    }
}
