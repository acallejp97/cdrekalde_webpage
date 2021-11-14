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

    public function index()
    {
        return view("index", ['titulo' => 'home']);
    }

    public function karate()
    {
        return view("index", ['titulo' => 'karate']);
    }

    public function aikido()
    {
        return view("index", ['titulo' => 'aikido']);
    }

    public function kickboxing()
    {
        return view("index", ['titulo' => 'kickboxing']);
    }

    public function pilates()
    {
        return view("index", ['titulo' => 'pilates']);
    }

    public function espaldasana()
    {
        return view("index", ['titulo' => 'espaldasana']);
    }

}
