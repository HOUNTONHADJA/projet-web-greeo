<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    //

    public function verify($id, $token)
    {
        $user = User::findOrFail($id);

        if ($user->email_verified_at) {
            return redirect('/login')->with('message', 'Votre email est déjà vérifié.');
        }

        if (sha1($user->email) !== $token) {
            return redirect('/login')->with('error', 'Lien de vérification invalide.');
        }

        $user->email_verified_at = Carbon::now();
        $user->save();

        return redirect('/login')->with('message', 'Email vérifié avec succès. Vous pouvez maintenant vous connecter.');
    }

}
