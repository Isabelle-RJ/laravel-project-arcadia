<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $service = Services::query()->where('name', '=', $name)->first();
        if (!$service) {
            throw new Exception("Il n'y a pas de service", 404);
        }
        return view('page.service', compact('service'));
    }

    public function createForm(): View
    {
        return view('admin.zoo.services.create');
    }

    public function create(ServicesFormRequest $request): RedirectResponse
    {
        $zoo = Zoo::query()->where('name', '=', 'Arcadia')->first();
        $path = $request->file('image')->getClientOriginalName();

        $service = new Services();
        $service->zoo_id = $zoo->id;
        $service->name = $request->name;
        $service->description = $request->description;
        $service->image = $path;
        if (!Storage::disk('public')->exists('asset/images')) {
            Storage::disk('public')->makeDirectory("asset/images");
        }
        Storage::disk('public')->putFileAs("asset/images",$request->file('image'), $path);

        $service->save();
        return redirect()->route('home');
    }

    public function edit(string $name): View
    {
        $service = Services::query()->where('name', '=', $name)->first();
        return view('admin.zoo.services.edit', compact('service'));
    }

    public function update(ServicesFormRequest $request, string $name): RedirectResponse
    {
        $zoo = Zoo::query()->where('name', '=', 'Arcadia')->first();
        $service = Services::query()->where('name', '=', $name)->first();
        $path = $request->file('image')->getClientOriginalName();

        $service->zoo_id = $zoo->id;
        $service->name = $request->name;
        $service->description = $request->description;
        $service->image = $path;
        if (!Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->makeDirectory("assets/images");
        }
        Storage::disk('public')->putFileAs("asset/images",$request->file('image'), $path);

        $service->save();
        return redirect()->route('services.create');
    }

    public function delete(string $name): RedirectResponse
    {
        $service = Services::query()->where('name', '=', $name)->first();
        Storage::disk('public')->delete("asset/images/" . $service->image);
        $service->delete();

        return redirect()->route('home');
    }

}
