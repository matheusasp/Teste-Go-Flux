<?php

namespace App\Repository;

use App\Models\Lance;
use Illuminate\Database\Eloquent\Model;

interface LanceRepositoryInterface
{
    public function all();
    public function store($data): Lance;
    public function find($id);
}
