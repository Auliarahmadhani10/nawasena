<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\pembeli;
use App\Models\supplier;
use App\Models\User;
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
            'name' => ['required', 'string', 'max:255'],
            'nis' => ['required', "numeric"],
            'no_telp' => ["required", "numeric"],
            'alamat' => ["required"],
            'role' => ["required"]
        ]);

        $user = User::query()->create([
            "nama" => $request->name,
            "nis" => $request->nis,
            "no_telp" => $request->no_telp,
            "alamat" => $request->alamat,
            "role" => $request->role
        ]);

        Auth::login($user);

        return redirect(route('beranda', absolute: false));
    }
}
