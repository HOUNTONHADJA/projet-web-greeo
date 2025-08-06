@extends('layouts.app')

@section('main')

<div class="container text-center mt-5 col-6">
    @if(isset($error))
                <div class="alert alert-danger">{{ $error }}</div>
            @endif
    <h1 class="text-success">🎉Etat du Paiement !</h1>
    <p class="mt-3">Merci <strong> </strong> pour votre commande.</p>

    <p>Nous avons bien reçu votre paiement. Votre commande est en cours de traitement.</p>

        @if (isset($transaction))
                    <div class="alert alert-success col-6 mx-auto">
                        <h4>Transaction reçue {{$transaction['metadata']['paid_customer']['firstname']}}</h4>
                        <p>ID: {{ $transaction['id'] }}</p>
                        <p>Nom: {{$transaction['metadata']['paid_customer']['firstname']}}</p>
                        <p>Prenom: {{$transaction['metadata']['paid_customer']['lastname']}}</p>
                        <p>Email: {{$transaction['metadata']['paid_customer']['email']}}</p>
                        <p>Ref transaction : {{ $transaction['reference'] }}</p>
                        <p>Montant: {{ $transaction['amount'] }} {{ $transaction['currency'] }}</p>
                        <p>Statut: {{ $status }}</p>
                        <p>Date: {{ \Carbon\Carbon::parse($transaction['created_at'])->format('d/m/Y H:i') }}</p>
                    </div>
        @endif
    
    <a href="" class="btn btn-primary mt-4 mb-3">Retour à l'accueil</a>
</div>
@endsection