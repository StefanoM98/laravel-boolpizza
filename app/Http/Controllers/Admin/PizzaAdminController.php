<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use App\Models\Topping;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PizzaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = Pizza::all();
        $toppings = Topping::all();
        return view('pizzas.index', compact('pizzas', 'toppings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pizzas = Pizza::all();
        $toppings = Topping::all();
        return view('pizzas.create', compact('pizzas', 'toppings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // $pizza = new Pizza();
        // $pizza->fill($data);
        // $pizza->save();
        $pizza= Pizza::create($data);
        if($request->has('toppings')){
            $pizza->toppings()->attach($request->toppings);
        }
        return redirect()->route('pizzas.index')->with('message', 'La pizza ' . $pizza->name . ' è stata creata con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pizza $pizza)
    {
        return view('pizzas.show', compact('pizza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pizza $pizza)
    {
        $toppings = Topping::all();
        return view('pizzas.edit', compact('pizza', 'toppings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pizza $pizza)
    {
        $data = $request->all();
        $pizza->update($data);
        if ($request->has('toppings')) {
            $pizza->toppings()->sync($request->toppings); //sync significa che se ci sono tecnologie le salva nella tabella ponte 
        } else {
            $pizza->toppings()->detach(); //detach significa che se non ci sono tecnologie le cancella dalla tabella ponte 
        }
        return redirect()->route('pizzas.index')->with('message', 'La pizza ' . $pizza->name . ' è stata modificata con successo');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pizza $pizza)
    {
        $pizza->toppings()->detach(); 

        $pizza->delete();
        return redirect()->route('pizzas.index')->with('message', 'La pizza ' . $pizza->name . ' è stata eliminata con successo');
    }
}
