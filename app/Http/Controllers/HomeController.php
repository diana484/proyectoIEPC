<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        $rol = $user->roles->implode('name', ',');
        //dd($rol);

        switch ($rol) {
            case 'admin':
                $saludo = "Bienvenido Administrador";

                return view('home', compact('saludo'));
                break;
            
            case 'client':
                $saludo = "Bienvenido Ciudadano";

                return view('home', compact('saludo'));
                break;
            }
    }
}
