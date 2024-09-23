<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Zoo;
use App\Requests\ServicesFormRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ServicesController extends Controller
{
    public function index(): View
    {
        return view('page.services');
    }

    /**
     * @throws Exception
     */
    public function show(string $name): View
    {
        $services = Services::query()->where('name', '=', $name)->first();
        if (!$services) {
            throw new Exception("Il n'y a pas de service", 404);
        }
        return view('page.services', compact('services'));
    }

    public function createForm(): View
    {
        return view('admin.zoo.services.create');
    }

    public function create(ServicesFormRequest $request): RedirectResponse
    {
        $path = $request->file('image')->getClientOriginalName();

        $services = new Services();
        $services->zoo_id = $request->zoo_id;
        $services->name = $request->name;
        $services->description = $request->description;
        $services->image = $path;

        if (!Storage::disk('public')->exists($services->image)) {
            Storage::disk('public')->makeDirectory("assets/images");
        }
        Storage::disk('public')->putFileAs("asset/images",$request->file('image'), $path);

        $services->save();
        return redirect()->route('home');
    }

    public function edit(string $name): View
    {
        $services = Services::query()->where('name', '=', $name)->first();
        return view('admin.zoo.services.edit', compact('services'));
    }

    public function update(ServicesFormRequest $request): RedirectResponse
    {
        $path = $request->file('image')->getClientOriginalName();
        $zoo = Zoo::query()->where('id', '=', $request->zoo_id)->first();

        $services = Services::query()->where('zoo_id', '=', $zoo->id)->first();
    }
}
