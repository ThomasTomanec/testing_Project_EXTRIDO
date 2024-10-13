<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Znacky extends Model
{
    use HasFactory;

    protected $table = 'znacky';

    protected $fillable = [
        'nazev',
    ];

    public function produkty()
    {
        return $this->hasMany(Product::class, 'znacky_id');
    }
}
