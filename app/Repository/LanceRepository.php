<?php

namespace App\Repository;

use App\Models\Lance;
use Illuminate\Database\Eloquent\Model;


class LanceRepository extends AbstractRepository implements LanceRepositoryInterface
{
    protected $model;

    public function __construct(Lance $lance)
    {
        $this->model = $lance;
    }


    public function all()
    {
        return $this->model->orderBy('name')->get();
    }

    public function find($id)
    {

    return $this->model->whereId($id)->firstOrFail();

    }

    public function store($data): Lance
    {
        return $this->model->updateOrCreate($data);
    }
}
