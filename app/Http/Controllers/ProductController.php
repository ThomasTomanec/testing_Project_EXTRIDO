<?php

namespace App\Http\Controllers;

use App\Models\Produkty;
use App\Models\Znacky;
use App\Models\Materialy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $produkty = new Produkty(
            [
            'kod'=> $request->get('kod', ''),
            'nazev' => $request->get('nazev', ''),
            'znacky_id' => $request->get('znacky_id'),
            'materialy_id' => $request->get('materialy_id'),
            'description'=> $request->get('description', ''),
            'cena' => $request->get('cena', ''),
        ]
    );

        $produkty->save();
        return redirect()->route('dashboard')->with('success','Produkt byl vytvořen!');

    }

    public function destroy($id){
        Produkty::where('id',$id)->firstOrFail()->delete();
        return redirect()->route('dashboard')->with('success', 'Produkt byl odstraněn!');
    }
}
