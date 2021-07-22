<?php

namespace App\Repository;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Model;

interface ClienteRepositoryInterface
{
    public function all();
    public function store($data): Cliente;
    public function find($id);
}
