<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frete;

class FreteController
{
	/**
	 * Display a listing of the resource.
	 */

	public function index()
	{
		$fretes = Frete::all();
		return view('fretes.index', compact('fretes'));
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
        return view('fretes.create');
    }

	/**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome_cliente' => 'required',
            'peso' => 'required|numeric',
            'distancia' => 'required|numeric',
            'tipo_frete' => 'required|in:normal,expresso',
        ]);

        $valor_total = 0;

        if ($request->tipo_frete === 'normal') {
            $valor_total = ($request->peso * 0.50) + ($request->distancia * 0.10);
        } else {
            $valor_total = ($request->peso * 1.00) + ($request->distancia * 0.25);
        }

        $frete = Frete::create([
            'nome_cliente' => $request->nome_cliente,
            'peso' => $request->peso,
            'distancia' => $request->distancia,
            'tipo_frete' => $request->tipo_frete,
            'valor_total' => $valor_total,
        ]);

        return view('fretes.resultado', compact('frete'));
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
