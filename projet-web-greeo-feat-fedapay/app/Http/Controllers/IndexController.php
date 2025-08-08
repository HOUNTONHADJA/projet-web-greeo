<?php

namespace App\Http\Controllers;

use App\Mail\AdminNotification;
use App\Mail\UserNotification;
use App\Models\Event;
use App\Models\Message;
use App\Models\Salle;
use App\Models\User;
use App\Notifications\NewContactNotification;
use FedaPay\Customer;
use FedaPay\FedaPay;
use FedaPay\Transaction;
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
    // Validation basique
    $request->validate([
        'salle_id' => 'required|exists:salles,id',
        'date' => 'required|date',
        'duration' => 'required',
        'participants' => 'required|integer|min:1',
    ]);

    // ✅ Correction ici : nom de variable cohérent
    $salle = Salle::findOrFail($request->query('salle_id'));

    $date = $request->query('date');
    $duration = $request->query('duration');
    $participants = $request->query('participants');

    // ✅ Ici aussi, on passe bien "salle"
    return view('checkout', compact('salle', 'date', 'duration', 'participants'));
}

//  public function processPayment(Request $request)
//     { 
//         $amount = $request->input('amount');
//         $user = auth()->user();

//         // Configurer Fedapay
//         FedaPay::setApiKey('sk_sandbox_LY0Wh8-RQ5_lWZm6p9zdmm5a');
//         FedaPay::setEnvironment('sandbox'); // 'live' en production

//         // Créer la transaction
//         $transaction = Transaction::create([
//             'description' => 'Paiement de votre commande',
//             'amount' => $amount,
//             'currency' => ['iso' => 'XOF'],
//             'callback_url' => route('payment.success'),
//             'return_url' => route('payment.success'),
//             'customer' => [
//                 'firstname' => $user->name,
//                 'email' => $user->email,
//             ],
//         ]);

//         // Récupère le token de la transaction
//         $token = $transaction->generateToken();

//         // Envoie le token à la vue avec l'iframe
//         return view('payment.fedapay', compact('token'));
        
//     }

    public function initiatePayment(Request $request)
    {
        \FedaPay\FedaPay::setApiKey(env('FEDAPAY_API_SECRET'));
        \FedaPay\FedaPay::setEnvironment(env('FEDAPAY_ENVIRONMENT'));

        $transaction = Transaction::create([
            "description" => "Paiement test Laravel",
            "amount" => $request->input('amount'),
            "currency" => ["iso" => "XOF"],
            'callback_url' => route('payment.success', ['salle_id' => $request->input('salle_id'),]),
            // 'return_url' => route('payment.success'),
            "customer" => [
                // "firstname" => $request->input('firstname'),
                "lastname" => $request->input('full_name'),
                "email" => $request->input('email'),
                "phone_number" => [
                    "number" => $request->input('phone'),
                    "country" => "bj"
                ]
            ]
        ]);

        $token = $transaction->generateToken();
        // return response()->json(['url'=>$token->url]);
        return redirect($token->url);
    }


    public function paymentSuccess(Request $request)
    {
         $transactionId = $request->query('id');
         $salleId = $request->query('salle_id');
        $status = $request->query('status');

        if ($transactionId ) {
            if ($status=="approved" || $status=="transferred") {
                FedaPay::setApiKey(env('FEDAPAY_API_SECRET')); // de préférence via .env
                 $salle = Salle::findOrFail($salleId);
                 $salle->available = 0;
                $salle->save();

            $transaction = null;
            try {
                    // Récupérer la transaction via l'API FedaPay
                    $transaction = Transaction::retrieve($transactionId);
                //    dd($transaction);
                } catch (\Exception $e) {
                    // Gérer les erreurs
                    return view('checkout', [
                        'error' => 'Transaction introuvable ou erreur : ' . $e->getMessage(),
                    ]);
                }
            return view('payement_success', compact('transaction','status'));
            } elseif ($status=="declined"|| $status=="canceled" || $status=="expired" || $status=="pending") {
                return view('payement_success', ['error' => 'Votre paiement est en attente ou a été annulé']);
            }
            elseif ( $status=="refunded") {

                 FedaPay::setApiKey(env('FEDAPAY_API_SECRET')); // de préférence via .env
            $transaction = null;
            try {
                    // Récupérer la transaction via l'API FedaPay
                    $transaction = Transaction::retrieve($transactionId);
                //    dd($transaction);
                } catch (\Exception $e) {
                    // Gérer les erreurs
                    return view('checkout', [
                        'error' => 'Transaction introuvable ou erreur : ' . $e->getMessage(),
                    ]);
                }
                return view('payement_success', compact('transaction','status'));
            }

            
        }
        return back()->with('error', 'Erreur lors de la récupération de la transaction');

    }

    public function callback()
    {
        return view('callback');
    }


    

}


