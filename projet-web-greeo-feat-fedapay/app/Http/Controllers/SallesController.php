<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SallesController extends Controller
{
    //
    public function dashboard()
    {
        $salles = Salle::orderBy('id', 'desc')->paginate(3); 
        return view('admin.salles', compact('salles'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function createStore(Request $request)
    {
        
        
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required',
            'price_per_hour' => 'required|string|max:255',
            'capacity' => 'required|integer|max:255',
            'image' => 'required|file|image|max:115120',
            'description' => 'required|string',
        ]);

        $data = $request->only('name', 'location', 'price_per_hour', 'capacity', 'image', 'description');

        $data['slug'] = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('salles', 'public');
            $data['image'] = $path;
        }

        Salle::create($data);

        return redirect()->back()->with('success', 'Salle ajouté avec succès.🎉');
    }

    public function edit($id)
    {
        $salles = Salle::find($id);
        return view('admin.edit', compact('salles'));
    }

    public function update(Request $request, Salle $salles)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required',
            'price_per_hour' => 'required|string|max:255',
            'capacity' => 'required|integer|max:255',
            'image' => 'file|image|max:2048',
            'description' => 'required|string',
        ]);

        
        $salles->update($data);
    
        return redirect()->back()->with('success', "La salle a bien été modifié!");        
    }

    public function delete(Salle $salles)
        {
            $salles->delete();

            return redirect()->back()->with('success', "La salle a bien été supprimé avec succès!");
        }
}
