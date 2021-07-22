<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Embarcador extends Model
{
    use HasFactory;

    protected $table = 'embarcador';
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
