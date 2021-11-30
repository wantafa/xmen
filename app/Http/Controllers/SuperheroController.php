<?php

namespace App\Http\Controllers;

use App\Skill;
use App\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function create()
    {
        return view('add_superhero');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        Superhero::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);
        
        return redirect('/');
    }

    public function show($id)
    {
        $superhero = Superhero::find($id);
        $skill = Skill::all();
        $no = 1;
        return view('detail_superhero', compact('superhero','skill','no'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required'
        ]);
       
        Superhero::where('id',$id)->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin
            ]);
        return redirect('/');
    }
    
    public function destroy($id)
    {
        $superhero = Superhero::find($id);
        $superhero->delete();
        return redirect('/');
    }
}
