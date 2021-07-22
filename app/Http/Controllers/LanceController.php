<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\LanceServiceInterface;
use App\Repository\LanceRepositoryInterface;

class LanceController extends Controller
{
    protected $lanceService;
    protected $lanceRepository;



    public function __construct(LanceServiceInterface $lanceService, LanceRepositoryInterface $lanceRepository){
        $this->lanceService =  $lanceService;
        $this->lanceRepository = $lanceRepository;

    }



    public function find($id){
        try{
            return $this->lanceService->find($id);
        }catch(Exception $e){
            dd($e);
        }
    }

    public function create(Request $request){
        try{
            $this->lanceService->create($request->all());
        }catch(Exception $e){
            dd($e);
        }
    }
}
