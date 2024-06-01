<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\pembeli;
use App\Models\supplier;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse|View
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nis' => ['required', "numeric"],
        ]);

        $user = User::query()->where("nama", $request->name)->where("nis", $request->nis)->first();

        if ($user === null) {
            throw ValidationException::withMessages([
                'message' => "login gagal",
            ]);
        }

        Auth::login($user);

        $request->session()->regenerate();

        if (Auth::user()->role === "supplier") {
            return redirect('/admin/dashboard');
        }

        return redirect('/beranda');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
