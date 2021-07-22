<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Oferta;
use App\Repository\OfertaRepositoryInterface;

final class OfertaService implements OfertaServiceInterface
{
    protected $repository;


    public function __construct(OfertaRepositoryInterface $repository)
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
