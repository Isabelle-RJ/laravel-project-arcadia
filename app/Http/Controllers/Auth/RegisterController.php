<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Zoo;
use App\Requests\RegisterFormRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function registerPost(RegisterFormRequest $request): RedirectResponse
    {
        $zoo = Zoo::query()->where('name', '=', 'Arcadia')->first();

        $user = new User();
        $user->zoo_id = $zoo->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;

        $user->save();

        return redirect()->route('auth.login');
    }

    public function register(): View
    {
        return view('auth.register');
    }
}
