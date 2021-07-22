<?php

namespace App\Providers;

use App\Models\Oferta;
use Illuminate\Http\Request;

interface OfertaServiceInterface
{
    public function find($id);

    public function create($data);




}