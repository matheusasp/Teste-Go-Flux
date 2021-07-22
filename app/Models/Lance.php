<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lance extends Model
{
    use HasFactory;

    protected $table = 'lance';
    public $timestamps = false;


    protected $fillable = [
        "id",
        "id_provider",
        "id_offer",
        "value",
        "amount",

    ];
}
