<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'ape_paterno' => ['string', 'max:255'],
            'ape_materno' => ['string', 'max:255'],
            'sexo' => ['string', 'max:255'],
            'lugar_nacimiento' => ['string', 'max:255'],
            'fecha_nacimiento' => ['string', 'max:255'],
            'celular' => ['string', 'max:255'],
            'tipo_persona' => ['string', 'max:255'],
            'tipo_documento' => ['string', 'max:255'],
            'numero_documento' => ['string', 'max:255'],
            'departamento' => ['string', 'max:255'],
            'provincia' => ['string', 'max:255'],
            'distrito' => ['string', 'max:255'],
            'direccion' => ['string', 'max:255']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'ape_paterno' => $request->ape_paterno,
            'ape_materno' => $request->ape_materno,
            'sexo' => $request->sexo,
            'lugar_nacimiento' => $request->lugar_nacimiento,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'celular' => $request->celular,
            'tipo_persona' => $request->tipo_persona,
            'tipo_documento' => $request->tipo_documento,
            'numero_documento' => $request->numero_documento,
            'departamento' => $request->departamento,
            'provincia' => $request->provincia,
            'distrito' => $request->distrito,
            'direccion' => $request->direccion,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
