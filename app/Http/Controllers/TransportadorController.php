<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\TransportadorServiceInterface;
use App\Repository\TransportadorRepositoryInterface;

class TransportadorController extends Controller
{
    protected $transportadorService;
    protected $transportadorRepository;



    public function __construct(TransportadorServiceInterface $transportadorService, TransportadorRepositoryInterface $transportadorRepository){
        $this->transportadorService =  $transportadorService;
        $this->transportadorRepository = $transportadorRepository;

    }



    public function find($id){
        try{
            return $this->transportadorService->find($id);
        }catch(Exception $e){
            dd($e);
        }
    }

    public function create(Request $request){
        try{
            $this->transportadorService->create($request->all());
        }catch(Exception $e){
            dd($e);
        }
    }
}
