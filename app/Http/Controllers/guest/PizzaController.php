<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {
        $pizzas= Pizza::all();
        return view('welcome', compact('pizzas'));
    }
}
