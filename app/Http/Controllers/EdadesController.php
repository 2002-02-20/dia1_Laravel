<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdadesController extends Controller
{
    public function cachorro(){
        return ['saludo' => 'Hola Mundo'];
    }

    public function adulto(){
        return ['saludo' => 'Hola Mundo'];
    }

}
