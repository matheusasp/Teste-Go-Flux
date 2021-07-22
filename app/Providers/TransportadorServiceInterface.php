<?php

namespace App\Providers;

use App\Models\Transportador;
use Illuminate\Http\Request;

interface TransportadorServiceInterface
{
    public function find($id);

    public function create($data);




}