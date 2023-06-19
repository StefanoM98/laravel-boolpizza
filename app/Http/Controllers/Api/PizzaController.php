<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::with('toppings')->paginate(10);
        return response()->json([
            'success' => true,
            'results' => $pizzas
        ]);
    }
}
