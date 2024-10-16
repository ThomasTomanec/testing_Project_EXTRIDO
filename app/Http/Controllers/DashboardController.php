<?php

namespace App\Http\Controllers;

use App\Models\Produkty;
use App\Models\Znacky;
use App\Models\Materialy;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Produkty;
use App\Models\Znacky;
use App\Models\Materialy;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = Produkty::query()->with(['znacka', 'material']);

       
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('nazev', 'like', '%' . $search . '%')
                  ->orWhere('kod', 'like', '%' . $search . '%');
                  
        }

        $produkty = $query->orderBy('created_at', 'DESC')->get();

        $znacky = Znacky::all();
        $materialy = Materialy::all();

        return view('dashboard', compact('produkty', 'znacky', 'materialy'));
    }
}


