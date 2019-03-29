<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Solucion;

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
        return view('home');
    }

    public function search($search){
        $search = urldecode($search);

        $users = User::select()
                ->where('name', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'desc')
                ->get();
        
        if (count($users) == 0){
            return View('search')
            ->with('message', 'No hay resultados que mostrar')
            ->with('search', $search);
        } else{
            return View('search')
            ->with('users', $users)
            ->with('search', $search);
        }
    }
}
