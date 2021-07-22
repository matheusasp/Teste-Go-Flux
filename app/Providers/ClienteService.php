<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\ClienteRepositoryInterface;

class ClienteService implements ClienteServiceInterface
{

    protected $repository;


    public function __construct(ClienteRepositoryInterface $repository)
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
