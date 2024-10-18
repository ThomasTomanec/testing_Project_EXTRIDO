<?php

namespace App\Http\Controllers;

use App\Models\Produkty;
use App\Models\Znacky;
use App\Models\Materialy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = Produkty::query()->with(['znacka', 'material']);

        $filters = [];

        if ($request->has('search') && $request->input('search') != '') {
            $search = $request->get('search');
            $query->where(function ($q) use ($search) {
                $q->where('nazev', 'like', '%' . $search . '%')
                    ->orWhere('kod', 'like', '%' . $search . '%');
            });
            $filters['search'] = $search;
        }

        if ($request->has('znacky_id') && $request->get('znacky_id') != '') {
            $znacky_id = $request->get('znacky_id');
            $query->where('znacky_id', $znacky_id);
            $filters['znacky_id'] = $znacky_id;
        }

        if ($request->has('materialy_id') && $request->get('materialy_id') != '') {
            $materialy_id = $request->get('materialy_id');
            $query->where('materialy_id', $materialy_id);
            $filters['materialy_id'] = $materialy_id;
        }

        if ($request->has('min_price') && $request->input('min_price') != '') {
            $minPrice = $request->input('min_price');
            $query->where('cena', '>=', $minPrice);
            $filters['min_price'] = $minPrice;
        }

        if ($request->has('max_price') && $request->input('max_price') != '') {
            $maxPrice = $request->input('max_price');
            $query->where('cena', '<=', $maxPrice);
            $filters['max_price'] = $maxPrice;
        }

        if ($request->has('sort')) {
            $sort = $request->get('sort');
            $order = $request->get('order') === 'desc' ? 'desc' : 'asc';
            $query->orderBy($sort, $order);
        } else {
            $query->orderBy('created_at', 'DESC');
        }

        $produkty = $query->orderBy('created_at', 'DESC')->paginate(10);

        $znacky = Znacky::all();
        $materialy = Materialy::all();

        return view('dashboard', compact('produkty', 'znacky', 'materialy', 'filters'));
    }

    public function export(Request $request)
    {
        $query = Produkty::query()->with(['znacka', 'material']);

        if ($request->has('search') && $request->input('search') != '') {
            $search = $request->get('search');
            $query->where(function ($q) use ($search) {
                $q->where('nazev', 'like', '%' . $search . '%')
                    ->orWhere('kod', 'like', '%' . $search . '%');
            });
        }
    
        if ($request->has('znacky_id') && $request->get('znacky_id') != '') {
            $znacky_id = $request->get('znacky_id');
            $query->where('znacky_id', $znacky_id);
        }
    
        if ($request->has('materialy_id') && $request->get('materialy_id') != '') {
            $materialy_id = $request->get('materialy_id');
            $query->where('materialy_id', $materialy_id);
        }
    
        if ($request->has('min_price') && $request->input('min_price') != '') {
            $minPrice = $request->input('min_price');
            $query->where('cena', '>=', $minPrice);
        }
    
        if ($request->has('max_price') && $request->input('max_price') != '') {
            $maxPrice = $request->input('max_price');
            $query->where('cena', '<=', $maxPrice);
        }
    
        $allowedSorts = ['nazev', 'kod', 'cena', 'created_at']; 
        if ($request->has('sort') && in_array($request->get('sort'), $allowedSorts)) {
            $sort = $request->get('sort');
            $order = $request->get('order') === 'desc' ? 'desc' : 'asc';
            $query->orderBy($sort, $order);
        } else {
            $query->orderBy('created_at', 'DESC'); 
        }
    
        $produkty = $query->get();
 
        $csvFileName = 'produkty_export_' . now()->format('Y-m-d_H-i-s') . '.csv';
        $handle = fopen('php://output', 'w');
        
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $csvFileName . '"');
    
        fputcsv($handle, ['Kod', 'Nazev', 'Znacka', 'Material', 'Cena', 'Popis']);
    
        foreach ($produkty as $produkt) {
            fputcsv($handle, [
                $produkt->kod,
                $produkt->nazev,
                $produkt->znacka->nazev ?? 'N/A',
                $produkt->material->nazev ?? 'N/A',
                $produkt->cena,
                $produkt->popis
            ]);
        }
    
        fclose($handle);
        exit();
    }    

}
