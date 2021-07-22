<?php

namespace App\Repository;

use App\Models\Embarcador;
use Illuminate\Database\Eloquent\Model;


class EmbarcadorRepository extends AbstractRepository implements EmbarcadorRepositoryInterface
{
    protected $model;

    public function __construct(Embarcador $embarcador)
    {
        $this->model = $embarcador;
    }


    public function all()
    {
        return $this->model->orderBy('name')->get();
    }

    public function find($id)
    {

    return $this->model->whereId($id)->firstOrFail();

    }




    public function store($data): Embarcador
    {
        return $this->model->updateOrCreate($data);
    }
}
