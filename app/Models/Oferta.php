<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $table = 'ofertas';
    public $timestamps = false;

    protected $fillable = [
        "id",
        "id_customer",
        "from",
        "to",
        "initial_value",
        "amount",
        "amount_type",

    ];
}
