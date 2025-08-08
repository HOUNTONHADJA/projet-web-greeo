<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EventsController extends Controller
{
    //
    public function index()
    {
        // $posts = Post::orderBy('id', 'desc')->limit(8)->get(); , compact('events')
        return view('events.index');
    }

    public function events()
    {
        $events = Event::where('user_id', Auth::id())
        ->orderBy('id', 'desc')->limit(8)->get(); 
        return view('events.events', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function createStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date_event' => 'required|date',
            'location_name' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'meeting_link' => 'nullable|string|max:255',
            'image' => 'required|file|image|mimes:jpeg,png,webp|max:10240',
            'description' => 'required|string',
        ]);

        $data = $request->only('title', 'date_event', 'location_name', 'address', 'meeting_link', 'image', 'description');

        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('events', 'public');
            $data['image'] = $path;
        }

        // Associer l'utilisateur connecté
        $data['user_id'] = Auth::id();

        Event::create($data);

        return redirect()->back()->with('success', 'Evènement ajouté avec succès.🎉');
        
    }

    public function edit($id)
    {
        $events = Event::find($id);
        return view('events.edit', compact('events'));
    }

    public function update(Request $request, Event $events)
    {
        $data = $request->validate([
            'title' => 'string|max:255',
            'date_event' => 'date',
            'location_name' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'meeting_link' => 'nullable|string|max:255',
            'image' => 'file|image|max:2048',
            'description' => 'string',
        ]);

        
        $events->update($data);
    
        return redirect()->back()->with('success', "L'évènement a bien été modifié!");        
    }

    public function delete(Event $events)
        {
            $events->delete();

            return redirect()->back()->with('success', "L'évènement a bien été supprimé avec succès!");
        }

}
