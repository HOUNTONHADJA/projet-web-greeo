<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }

    public function users()
    {
        $users = User::orderBy('id', 'desc')->paginate(5); 
        return view('admin.users', compact('users'));
    }
    
    public function events()
    {
        $events = Event::orderBy('id', 'desc')->paginate(2);
        return view('admin.events', compact('events')); 
    }

    public function reservations()
    {
        return view('admin.reservations');
    }

    public function paiement()
    {
        return view('admin.paiement');
    }

    public function notifications()
    {
        $admin = Auth::user(); // ou Auth::guard('admin')->user()

        // Marquer toutes les notifications comme lues
        $admin->unreadNotifications->markAsRead();

        // Nombre de notifications non lues
        $notifications = $admin->notifications()->get();

        $unreadCount = $admin->unreadNotifications->count();
        
        return view('admin.notifications', compact('notifications'),
        
        [
            'notifications' => $admin->notifications,
            'unreadCount' => $unreadCount, // <- on envoie cette variable à la vue
        ]);
    }

    public function message()
    {
        $messages = Message::orderBy('id', 'desc')->get(); 
        return view('admin.messages', compact('messages'));
    }

    
    public function socket_set_blocking()
    {
        return view('admin.setting');
    }
}
