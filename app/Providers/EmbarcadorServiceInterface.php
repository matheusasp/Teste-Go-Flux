<?php

namespace App\Providers;

use App\Models\Embarcador;
use Illuminate\Http\Request;

interface EmbarcadorServiceInterface
{
    public function find($id);

    public function create($data);




}