<?php

namespace App\Http\Controllers;

use App\Mail\AdminNotification;
use App\Mail\UserNotification;
use App\Models\Event;
use App\Models\Message;
use App\Models\Salle;
use App\Models\User;
use App\Notifications\NewContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;


class IndexController extends Controller
{

    public function index()
    {
        $salles  = Salle::latest()->take(3)->get();
        $evenements =  Event::latest()->take(3)->get();
        return view('index', compact('salles', 'evenements'));
    }

    // evenements
    public function evenements()
    {
        $events = Event::with('user')->orderBy('id', 'desc')->paginate(9); 
        return view('evenements', compact('events'));
    }

    public function show($slug, $id)
    {
        $events = Event::find($id);

        $evenementsSimilaires = Event::latest()->take(3)->get();
        return view('single-event', compact('events', 'evenementsSimilaires'));
    }

    // Afficher page contact
    public function contact()
    {
        return view('contact');
    }

    //Envoyer messsage par contact
    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'sujet' => 'required|string',
            'message' => 'required|string',
        ]);

        // Enregistrer le message dans la base de données
        $message = Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'sujet' => $request->sujet,
            'message' => $request->message,
        ]);

        // Envoyer un email de confirmation à l'utilisateur
        Mail::to($message->email)->send(new UserNotification($message->name));

        // Envoyer un email à l'administrateur
        $adminEmail = config('mail.from.address'); // Vous pouvez remplace                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  r par une autre adresse si nécessaire
        Mail::to($adminEmail)->send(new AdminNotification($message->name, $message->email, $message->message));

        $admins = User::where('is_admin', true)->get();
        Notification::send($admins, new NewContactNotification());

        return back()->with('success', 'Votre message a été envoyé avec succès et enregistré dans la base de données !');
    }

    // salles
    public function salles()
    {
        $salles = Salle::orderBy('id', 'desc')->paginate(9); 
        return view('salles', compact('salles'));
    }

    public function showSalles($slug, $id)
    {
        $salles = Salle::find($id);
        
        $sallesSimilaires = Salle::latest()->take(3)->get();
        return view('single-salle', compact('salles', 'sallesSimilaires'));
    }

    // Afficher page profil
    public function profilShow($id)
    {
        $profil = User::with('evenements')->find($id); 

        if(!$profil)
        {
            abort(404, 'Agence non trouvée');
        }

        return view('profil', compact('profil'));
    }

    // Checkout
    public function checkout(Request $request)
{
    $request->validate([
        'salle_id' => 'required|exists:salles,id',
        'hours' => 'required|integer|min:1'
    ]);

    $salle = Salle::findOrFail($request->salle_id);

    if (!$salle->available) {
        return redirect()->back()->with('error', 'Cette salle est déjà réservée.');
    }

    $hours = $request->hours;
    $pricePerHour = $salle->price; // suppose que `price` existe dans ta table
    $total = $pricePerHour * $hours;
    $transactionFee = 100;
    $grandTotal = $total + $transactionFee;

    return view('checkout', compact('salle', 'hours', 'total', 'transactionFee', 'grandTotal'));
}

    public function success()
    {
        return view('success');
    }

}


