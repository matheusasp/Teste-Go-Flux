<?php

namespace App\Repository;

use App\Models\Embarcador;
use Illuminate\Database\Eloquent\Model;

interface EmbarcadorRepositoryInterface
{
    public function all();
    public function store($data): Embarcador;
    public function find($id);
}
