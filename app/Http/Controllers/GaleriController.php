<?php

namespace App\Http\Controllers;

use App\Superhero;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index() {
        
        $tgl = Carbon::now()->format('d');
        if ($tgl == "04"|| $tgl == "06" || $tgl == "08" || $tgl == "10" || $tgl == "12" ) {
            
            $bulan = Carbon::now()->format('m');
            $tahun = Carbon::now()->format('Y');
    
            $galeri = Superhero::select('created_at', 'foto')
            ->whereMonth('created_at',date($bulan))
            ->whereYear('created_at',date($tahun))
            ->orderBy('created_at', 'desc')
            ->take(1)
            ->get();
            dd($galeri);
        }
        $galeri = Superhero::all();
        $no = 1;
        return view('xmen', compact('galeri', 'no'));
    }
}
