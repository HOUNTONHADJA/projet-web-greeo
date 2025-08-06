<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SallesController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// Le site web

Route::get('/', [IndexController::class, 'index'])->name('index');


//Paiement

Route::get('/payform', function (Request $request) {
    return view('checkout'
    , [
        'date' => $request->date,
        'start_time' => $request->start_time,
        'duration' => $request->duration,
        'participants' => $request->participants,
    ]
);
})->name('payform');

    Route::post('/fedapay/process', [IndexController::class, 'initiatePayment'])->name('fedapay.process');
    Route::get('/payement_success', [IndexController::class, 'paymentSuccess'])->name('payment.success');
    Route::post('/payment/callback', [IndexController::class, 'callback'])->name('payment.callback');

// Profil
Route::get('/profil/{user}', [IndexController::class, 'profilShow'])->name('profil');

// Contact
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::post('/contact', [IndexController::class, 'sendContact'])->name('contact.send');

Route::get('/evenements', [IndexController::class, 'evenements'])->name('evenements');
Route::get('/success', [IndexController::class, 'success'])->name('success');

Route::get('/profil/{id}', [IndexController::class, 'profilShow'])->name('profil');
Route::get('/single-event/{slug}-{events}', [IndexController::class, 'show'])
    ->where([
        'slug' =>'[a-z0-9\-]+'
    ])
    ->name('show');
Route::get('/salles', [IndexController::class, 'salles'])->name('salles');
Route::get('/single-salle/{slug}-{salles}', [IndexController::class, 'showSalles'])
    ->where([
        'slug' =>'[a-z0-9\-]+'
    ])
    ->name('showSalles');


// Connexion des utilisateurs évènements
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginStore']);

// Inscription des utilisateurs évènements
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'registerStore']);

Route::get('/checkout', [IndexController::class, 'checkout'])->name('checkout');
Route::post('/process-payment', [ReservationController::class, 'processPayment'])->name('process.payment');


// COnfirmation de compte
Route::get('/verify-email/{id}/{token}', [EmailVerificationController::class, 'verify'])->name('verify.email');

// Mot de passe oublié
Route::get('/password/forgot', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');


// Déconnexion des utilisateurs évènements
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard évènement
Route::middleware('auth')->group(function () {
    Route::get('events', [EventsController::class, 'index'])->name('events.index');
    Route::get('events/events', [EventsController::class, 'events'])->name('events.events');
    Route::get('events/create', [EventsController::class, 'create'])->name('events.create');
    Route::post('events/create', [EventsController::class, 'createStore'])->name('events.store');
    Route::get('{events}/edit', [EventsController::class, 'edit'])->name('events.edit');
    Route::put('{events}/update', [EventsController::class, 'update'])->name('events.update');
    Route::delete('{events}/delete', [EventsController::class, 'delete'])->name('events.delete');
});

// SuperAdmin

Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/admin/index', [AdminController::class, 'dashboard'])->name('admin.index');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/events', [AdminController::class, 'events'])->name('admin.events');

    // Salles 
    Route::get('/admin/salles', [SallesController::class, 'dashboard'])->name('admin.salles');
    Route::get('/admin/create', [SallesController::class, 'create'])->name('admin.create');
    Route::post('/admin/create', [SallesController::class, 'createStore'])->name('admin.store');
    Route::get('/admin/{salles}/edit', [SallesController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{salles}/update', [SallesController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{salles}/delete', [SallesController::class, 'delete'])->name('admin.delete');

    // 
    Route::get('/admin/setting', [AdminController::class, 'setting'])->name('admin.setting');
    Route::get('/admin/reservations', [AdminController::class, 'reservations'])->name('admin.reservations');
    Route::get('/admin/paiement', [AdminController::class, 'paiement'])->name('admin.paiement');
    Route::get('/admin/messages', [AdminController::class, 'message'])->name('admin.message');
    Route::get('/admin/notifications', [AdminController::class, 'notifications'])->name('admin.notifications');

});

//routes fedapay
Route::any('/', [FedapayController::class, 'showPaymentForm'])->name('index');
Route::post('/pay', [FedapayController::class, 'initiatePayment'])->name('pay');
Route::get('/retour', [FedapayController::class, 'retour'])->name('retour');
Route::get('/status', function () {
    return response()->json([
        'status' => session('payment_status', 'unknown')
    ]);
})->name('status');
Route::post('/webhook', [FedapayController::class, 'Webhook'])->name('webhook');
Route::post('callback', [FedapayController::class, 'Callback'])->name('callback');
Route::get('/return', [FedapayController::class, 'handleReturn']);
Route::get('/confirmation', [FedapayController::class, 'confirmation']);

