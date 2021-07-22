<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\EmbarcadorServiceInterface;
use App\Repository\EmbarcadorRepositoryInterface;

class EmbarcadorController extends Controller
{
    protected $embarcadorService;
    protected $embarcadorRepository;



    public function __construct(EmbarcadorServiceInterface $embarcadorService, EmbarcadorRepositoryInterface $embarcadorRepository){
        $this->embarcadorService =  $embarcadorService;
        $this->embarcadorRepository = $embarcadorRepository;

    }



    public function find($id){
        try{
            return $this->embarcadorService->find($id);
        }catch(Exception $e){
            dd($e);
        }
    }

    public function create(Request $request){
        try{
            $this->embarcadorService->create($request->all());
        }catch(Exception $e){
            dd($e);
        }
    }
}
