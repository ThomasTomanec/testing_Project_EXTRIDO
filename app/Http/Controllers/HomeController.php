<?php

namespace App\Http\Controllers;

use App\Models\Produkty;
use App\Models\Znacky;
use App\Models\Materialy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $query = Produkty::query()->with(['znacka', 'material']);

        // Filtrace podle názvu produktu
        if ($request->has('search') && $request->input('search') != '') {
            $query->where('nazev', 'like', '%' . $request->input('search') . '%');
        }

        // Filtrace podle značky
        if ($request->has('znacky_id') && $request->input('znacky_id') != '') {
            $query->where('znacky_id', $request->input('znacky_id'));
        }

        // Filtrace podle materiálu
        if ($request->has('materialy_id') && $request->input('materialy_id') != '') {
            $query->where('materialy_id', $request->input('materialy_id'));
        }

        $produkty = $query->get();
        $znacky = Znacky::all();
        $materialy = Materialy::all();
        $produkty = $query->orderBy('created_at', 'DESC')->paginate(10);

        return view('index', compact('produkty', 'znacky', 'materialy'));
    }
}
