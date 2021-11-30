<?php

namespace App\Http\Controllers;

use App\Skill;
use App\Superhero;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function create()
    {
        return view('add_skill');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        Skill::create([
            'nama' => $request->nama
        ]);
        
        return redirect('/');
    }

    public function show($id)
    {
        $skill = Skill::find($id);
        $superhero = Superhero::all();
        $no = 1;
        return view('detail_skill', compact('skill','superhero','no'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);
       
        Skill::where('id',$id)->update([
            'nama' => $request->nama,
            ]);
        return redirect('/');
    }
    
    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect('/');
    }

    public function simulasi(Request $request)
    {
        $data = $request->toArray();

        $simulasi = Skill::all()->random(2);
        $no = 1;
        return view('simulasi', compact('data','simulasi','no'));
    }
}
