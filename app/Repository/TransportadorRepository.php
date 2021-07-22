<?php

namespace App\Repository;

use App\Models\Transportador;
use Illuminate\Database\Eloquent\Model;


class TransportadorRepository extends AbstractRepository implements TransportadorRepositoryInterface
{
    protected $model;

    public function __construct(Transportador $transportador)
    {
        $this->model = $transportador;
    }

    public function find($id)
    {

    return $this->model->whereId($id)->firstOrFail();

    }

    public function all()
    {
        return $this->model->orderBy('name')->get();
    }


    public function store($data): Transportador
    {
        return $this->model->updateOrCreate($data);
    }
}
