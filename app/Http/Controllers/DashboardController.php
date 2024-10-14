<?php

namespace App\Http\Controllers;

use App\Models\Produkty;
use App\Models\Znacky;
use App\Models\Materialy;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $produkty = Produkty::with(['znacka', 'material'])->get();
        $znacky = Znacky::all();
        $materialy = Materialy::all();
        return view('dashboard', compact('produkty', 'znacky', 'materialy'));
    }


    
}
