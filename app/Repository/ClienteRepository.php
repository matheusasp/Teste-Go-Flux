<?php

namespace App\Repository;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Model;


class ClienteRepository extends AbstractRepository implements ClienteRepositoryInterface
{
    protected $model;

    public function __construct(Cliente $cliente)
    {
        $this->model = $cliente;
    }


    public function all()
    {
        return $this->model->orderBy('name')->get();
    }
    public function find($id)
    {

    return $this->model->whereId($id)->firstOrFail();

    }


    public function store($data): Cliente
    {
        return $this->model->updateOrCreate($data);
    }
}
