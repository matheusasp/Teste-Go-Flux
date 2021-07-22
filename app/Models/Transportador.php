<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportador extends Model
{
    use HasFactory;

    protected $table = 'transportador';
    public $timestamps = false;

    protected $fillable = [
        "id",
        "name",
        "doc",
        "about",
        "active",
        "site",

    ];
}
