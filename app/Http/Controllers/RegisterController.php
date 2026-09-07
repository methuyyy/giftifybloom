<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function showRegistrationForm(): View
    {
        return view('register');
    }

    public function register(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name'  => ['required', 'string', 'max:50'],
            'email'      => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password'   => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $namaLengkap = trim($validated['first_name'] . ' ' . $validated['last_name']);

        $emailUsername = explode('@', $validated['email'])[0];
        $baseUsername = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($emailUsername)) ?: strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $validated['first_name']));
        $username = $baseUsername;
        $counter = 1;
        while (User::where('username', $username)->exists()) {
            $username = $baseUsername . $counter;
            $counter++;
        }

        $user = User::create([
            'username'    => $username,
            'password'    => $validated['password'],
            'role'        => 'customer',
            'nama'        => $namaLengkap,
            'email'       => $validated['email'],
            'no_hp'       => null,
            'is_verified' => false,
            'galeri_buket' => null,
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->intended('/dashboard')->with('success', 'Registration successful! Welcome to Giftify Bloom.');
    }
}
