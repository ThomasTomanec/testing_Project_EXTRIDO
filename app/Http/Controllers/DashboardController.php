<?php

namespace App\Http\Controllers;

use App\Models\Produkty;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $produkty = Produkty::with(['znacka', 'material'])->get();

        return view('dashboard', compact('produkty'));
    }
}
