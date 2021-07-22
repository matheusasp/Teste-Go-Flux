<?php

namespace App\Providers;

use App\Models\Lance;
use Illuminate\Http\Request;

interface LanceServiceInterface
{
    public function find($id);

    public function create($data);




}