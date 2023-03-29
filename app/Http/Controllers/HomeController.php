<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resto;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index()
    {
        $data = Resto::all();
        return view("home",compact('data')); 
    }
    
    public function detail($id)
    {
        $data = Resto::with(['menu'])->where('id',$id)->first();
        return view("detail",compact('data')); 
    }
}
