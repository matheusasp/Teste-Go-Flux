<?php

namespace App\Repository;

use App\Models\Oferta;
use Illuminate\Database\Eloquent\Model;

interface OfertaRepositoryInterface
{
    public function all();
    public function store($data): Oferta;
    public function find($id);
}
