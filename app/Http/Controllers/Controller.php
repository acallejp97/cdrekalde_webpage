<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function inicio()
    {
        return view("pages/inicio");

    }

    public function galeria()
    {
        return view("pages/galeria");

    }

    public function servicios()
    {
        return view("pages/servicios");

    }

    public function contacto()
    {
        return view("pages/contacto");

    }
}
