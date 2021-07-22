<?php

namespace App\Repository;

use App\Models\Transportador;
use Illuminate\Database\Eloquent\Model;

interface TransportadorRepositoryInterface
{
    public function all();
    public function store($data): Transportador;
    public function find($id);
}
