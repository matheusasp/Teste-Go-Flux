<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\ClienteServiceInterface;
use App\Repository\ClienteRepositoryInterface;

class ClienteController extends Controller
{
    protected $clientService;
    protected $clientRepository;



    public function __construct(ClienteServiceInterface $clientService, ClienteRepositoryInterface $clientRepository){
        $this->clientService =  $clientService;
        $this->clientRepository = $clientRepository;

    }



    public function find($id){
        try{
            return $this->clientService->find($id);
        }catch(Exception $e){
            dd($e);
        }
    }

    public function create(Request $request){
        try{
            $this->clientService->create($request->all());
        }catch(Exception $e){
            dd($e);
        }
    }
}
