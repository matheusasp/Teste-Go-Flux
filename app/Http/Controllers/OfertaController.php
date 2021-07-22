<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\OfertaServiceInterface;
use App\Repository\OfertaRepositoryInterface;

class OfertaController extends Controller
{
    protected $ofertaService;
    protected $ofertaRepository;



    public function __construct(OfertaServiceInterface $ofertaService, OfertaRepositoryInterface $ofertaRepository){
        $this->ofertaService =  $ofertaService;
        $this->ofertaRepository = $ofertaRepository;

    }



    public function find($id){
        try{
            return $this->ofertaService->find($id);
        }catch(Exception $e){
            dd($e);
        }
    }

    public function create(Request $request){
        try{
            $this->ofertaService->create($request->all());
        }catch(Exception $e){
            dd($e);
        }
    }
}
