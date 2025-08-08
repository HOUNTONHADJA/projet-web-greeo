<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\NewUserNotification;
use App\Notifications\NewUserRegisteredNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Notification;


class AuthController extends Controller
{
    //

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function registerStore(Request $request)
    {
        $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => ['required', Password::defaults()],
                'lastname' => 'required|string|max:255',
                'image' => 'nullable',
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'lastname' => $request->lastname,
            ]);

             // Générer le lien de vérification
            $token = sha1($user->email);
            $link = route('verify.email', ['id' => $user->id, 'token' => $token]);

            // Envoyer l'email
            Mail::raw("Cliquez ici pour vérifier votre adresse email : $link", function ($message) use ($user) {
                $message->to($user->email)
                        ->subject('Vérification de votre adresse email');
            });
    
            
            Auth::login($user);

            $admins = User::where('role', 'admin')->get();
            Notification::send($admins, new NewUserRegisteredNotification($user));


            return redirect()->back()->with('success', 'Inscription réussie ! Compte créé. Vérifiez votre email pour activer votre compte.');
    }

    public function loginStore(Request $request)
    {
        $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {

                if (is_null(Auth::user()->email_verified_at)) {
                    Auth::logout();
                    return redirect()->back()->with('error', 'Vous devez vérifier votre email pour vous connecter.');
                }

                $request->session()->regenerate();
                
                $user = Auth::user();


                // Redirection en fonction du rôle
                switch ($user->role) {
                    case 'admin':
                        return redirect()->route('admin.index');
                    case 'user':
                        return redirect()->route('events.index');
                    default:
                        return redirect()->route('/');
                    }
    }

            return back()->withErrors([
                'email' => 'Les informations d\'identification ne correspondent pas.',
            ]);
    }

    public function logout(Request $request)
        {
            Auth::logout();
    
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            return redirect('/');
        }
}
