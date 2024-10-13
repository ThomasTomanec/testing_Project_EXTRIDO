<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materialy extends Model
{
    use HasFactory;

    protected $table = 'materialy';

    protected $fillable = [
        'nazev',
    ];

    public function produkty()
    {
        return $this->hasMany(Product::class, 'materialy_id');
    }
}

