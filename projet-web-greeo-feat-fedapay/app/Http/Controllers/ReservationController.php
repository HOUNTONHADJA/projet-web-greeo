<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Checkout
    public function checkout(Request $request)
{
    // Valider les données
        $validated = $request->validate([
            'salle_id' => 'required|exists:salles,id',
            'date' => 'required|date',
            'duration' => 'required|numeric',
            'participants' => 'required|numeric',
            'amount' => 'required|numeric',
        ]);
        
        // Afficher la vue checkout avec les données
        return view('checkout', [
            'request' => $request
        ]);
    }
public function processPayment(Request $request)
{
    $validated = $request->validate([
        'salle_id' => 'required|exists:salles,id',
        'full_name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string',
        'date' => 'required|date',
        'duration' => 'required|numeric',
        'start_time' => 'required',
        'participants' => 'required|numeric|min:1',
        'total_price' => 'required|numeric',
        'fedapay_token' => 'required'
    ]);

    try {
        FedaPay::setApiKey(config('services.fedapay.secret_key'));
        
        // Créer la transaction FedaPay
        $transaction = Transaction::create([
            'description' => 'Réservation salle '.$validated['salle_id'],
            'amount' => $validated['total_price'],
            'currency' => ['iso' => 'XOF'],
            'callback_url' => route('payment.callback'),
            'token' => $validated['fedapay_token']
        ]);

        // Calculer les dates de début/fin
        $startDateTime = Carbon::parse($validated['date'].' '.$validated['start_time']);
        $endDateTime = (clone $startDateTime)->addHours($validated['duration']);

        // Créer la réservation
        $reservation = ReservationController::create([
            'salles_id' => $validated['salle_id'],
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'start_time' => $startDateTime,
            'end_time' => $endDateTime,
            'participants' => $validated['participants'],
            'total_price' => $validated['total_price'],
            'status' => 'pending',
            'invoice_number' => 'INV-'.Str::random(8)
        ]);

        // Mettre à jour la disponibilité de la salle
        Salle::where('id', $validated['salle_id'])->update(['available' => false]);

        return redirect()->route('reservation.success', $reservation->id);

    } catch (\Exception $e) {
        return back()->withErrors(['error' => 'Erreur lors du paiement: '.$e->getMessage()]);
    }
}
}
