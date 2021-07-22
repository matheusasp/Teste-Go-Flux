<?php

namespace App\Repository;

use App\Models\Oferta;
use Illuminate\Database\Eloquent\Model;


class OfertaRepository extends AbstractRepository implements OfertaRepositoryInterface
{
    protected $model;

    public function __construct(Oferta $oferta)
    {
        $this->model = $oferta;
    }

    public function find($id)
    {

    return $this->model->whereId($id)->firstOrFail();

    }

    public function all()
    {
        return $this->model->orderBy('name')->get();
    }


    public function store($data): Oferta
    {
        return $this->model->updateOrCreate($data);
    }
}
