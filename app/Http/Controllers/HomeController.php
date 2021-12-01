<?php

namespace App\Http\Controllers;

use App\Skill;
use App\Superhero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $superhero_laki = Superhero::where('jenis_kelamin', 'Laki-Laki')->get();
        $superhero_perempuan = Superhero::where('jenis_kelamin', 'Perempuan')->get();
        $superhero = Superhero::all();
        $skill = Skill::all();
        $no = 1;
        $no1 = 1;

        return view('xmen', compact('superhero_laki','superhero_perempuan', 'superhero','skill','no','no1'));
    }

    public function cari_superhero(Request $request)
    {
        $superhero_laki = Superhero::where('jenis_kelamin', 'Laki-Laki')->get();
        $superhero_perempuan = Superhero::where('jenis_kelamin', 'Perempuan')->get();
        $skill = Skill::all();
        $no = 1;
        $no1 = 1;

        $cari = $request->cari_superhero;
 
        $superhero = DB::table('superhero')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
        
        return view('xmen', compact('superhero_laki','superhero_perempuan', 'superhero','skill','no','no1','cari'));
    }
    
    public function cari_skill(Request $request)
    {
        $superhero_laki = Superhero::where('jenis_kelamin', 'Laki-Laki')->get();
        $superhero_perempuan = Superhero::where('jenis_kelamin', 'Perempuan')->get();
        $superhero = Superhero::all();
        $no = 1;
        $no1 = 1;

        $cari = $request->cari_skill;
 
        $skill = DB::table('skill')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
        
        return view('xmen', compact('superhero_laki','superhero_perempuan', 'superhero','skill','no','no1','cari'));
    }
}
