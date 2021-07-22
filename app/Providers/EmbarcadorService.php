<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\EmbarcadorRepositoryInterface;


class EmbarcadorService implements EmbarcadorServiceInterface
{

    protected $repository;


    public function __construct(EmbarcadorRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }



    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function create($data)
    {
        return $this->repository->store($data);
    }
}
