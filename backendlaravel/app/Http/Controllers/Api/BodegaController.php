<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bodega;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    public function index(){
        $bodegas = Bodega::all();
        return $bodegas;
    }
}
