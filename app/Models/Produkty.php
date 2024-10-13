<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produkty extends Model
{
    use HasFactory;

    protected $table = 'produkty';

    protected $fillable = [
        'nazev',
        'kod',
        'cena',
        'description',
        'znacky_id',
        'materialy_id',
    ];

    public function znacka()
    {
        return $this->belongsTo(Znacky::class, 'znacky_id');
    }

    public function material()
    {
        return $this->belongsTo(Materialy::class, 'materialy_id');
    }
}
