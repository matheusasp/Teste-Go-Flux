<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\LanceRepositoryInterface;

class LanceService implements LanceServiceInterface
{
    protected $repository;


    public function __construct(LanceRepositoryInterface $repository)
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
