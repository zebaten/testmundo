<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dispositivo;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    public function index(){
        $dispositivos = Dispositivo::all();
        return $dispositivos;
    }
}
