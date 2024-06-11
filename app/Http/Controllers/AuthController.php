<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Adherent;
use App\Models\Classe;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'Identifiants incorrect'
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login')->with('success', 'you logged out');
    }

    public function register()
    {
        $classes = Classe::all();

        return view('auth.register')->with('classes', $classes);
    }

    public function doRegister(Request $request)
    {
        $adherent = new Adherent();

        $adherent->nom = $request->nom;
        $adherent->prenom = $request->prenom;
        $adherent->email = $request->email;
        $adherent->password = Hash::make($request->password);
        $adherent->tel = $request->tel;
        $adherent->date_inscription = Carbon::now();
        $adherent->gender = $request->gender;
        $adherent->id_classe = $request->id_classe;
        $adherent->statut = 'Actif';

        $adherent->save();

        $user = new User();

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->tel = $request->tel;
        $user->type = 'Adherent';

        $user->save();

        /*
         * process multistep form
         *
         *
         *
         $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'email|max:255',
            'tel' => 'nullable|numeric',
            'gender' => 'required|string|in:M,F',
            'id_classe' => 'required|exists:classes,id',
        ]);

        session([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'email' => $validatedData['email'],
            'tel' => $validatedData['tel'],
            'gender' => $validatedData['gender'],
            'id_classe' => $validatedData['id_classe'],
        ]);

        if ($request->has('card_number')) {
            $validatedPaymentData = $request->validate([
                'card_number' => 'required|string|max:19',
                'expiration_date' => 'required|string|max:5',
                'cvc' => 'required|string|max:4',
            ]);

            $paymentSuccessful = $this->processPayment($validatedPaymentData);

            if (!$paymentSuccessful) {
                return back()->withErrors(['payment' => 'Payment processing failed. Please try again.']);
            }

            $user = $this->createUser(session()->all());

            session()->forget(['nom', 'prenom', 'email', 'tel', 'gender', 'id_classe']);


            return redirect()->route('dashboard');
        }
        *
         *
         */

        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }
}
