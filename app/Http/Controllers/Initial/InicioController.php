<?php

namespace App\Http\Controllers\Initial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index() {
        $inicioimg = [
            "imagens" => 
            [   
                [
                    "nome" =>"imageminicial",
                    "url" => "img/inicioimg/imageminicial.jpg"
                ]    
            ]
               ];
        return view ("initial/inicio", $inicioimg);
    }
}
