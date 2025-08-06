<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    //



// Affiche le formulaire de demande de lien
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    // Envoie le mail avec le lien
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'Aucun utilisateur trouvé avec cet email.']);
        }

        $token = Str::random(64);

        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            [
                'token' => Hash::make($token),
                'created_at' => Carbon::now()
            ]
        );

        $link = url("/password/reset/{$token}?email=" . urlencode($user->email));

        Mail::raw("Cliquez ici pour réinitialiser votre mot de passe : $link", function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Réinitialisation du mot de passe');
        });

        return back()->with('message', 'Un lien de réinitialisation a été envoyé à votre email.');
    }

    // Affiche le formulaire de nouveau mot de passe
    public function showResetForm(Request $request, $token)
    {
        $email = $request->email;
        return view('auth.passwords.reset', compact('token', 'email'));
    }

    // Met à jour le mot de passe
    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $record = DB::table('password_reset_tokens')->where('email', $request->email)->first();

        if (!$record || !Hash::check($request->token, $record->token)) {
            return back()->withErrors(['email' => 'Lien invalide ou expiré.']);
        }

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        return redirect('/login')->with('message', 'Mot de passe réinitialisé avec succès.');
    }
}
