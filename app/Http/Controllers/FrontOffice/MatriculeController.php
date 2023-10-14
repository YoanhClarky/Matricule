<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Compte;

class MatriculeController extends Controller
{
    public function index(){
        $comptes = Compte::All();
        dd($comptes);
        return response()->json($comptes);
    }   

    public function show($matricule){
        $compte = Compte::where('matricule',$matricule)->firstOrfail();
        dd($compte);
        return response()->json($compte);
    }
}
