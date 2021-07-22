<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\TransportadorRepositoryInterface;

class TransportadorService implements TransportadorServiceInterface
{
    protected $repository;


    public function __construct(TransportadorRepositoryInterface $repository)
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
