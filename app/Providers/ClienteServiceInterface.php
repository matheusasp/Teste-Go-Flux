<?php

namespace App\Providers;

use App\Models\Cliente;
use Illuminate\Http\Request;

interface ClienteServiceInterface
{
    public function find($id);

    public function create($data);




}