<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operacoes;

class OperacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infAll = Operacoes::all()->toArray();
        return array_reverse($infAll);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newOperation = new Operacoes([
            'saldo' => $request->input('saldo')
        ]);
        $newOperation->save();
        return response()->json('Adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editOperation = Operacoes::find($id);
        return response()->json($editOperation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateOperation = Operacoes::find($id);
        $updateOperation->update($request->all());
        return response()->json('Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteOperation = Operacoes::find($id);
        $deleteOperation->delete();
        return response()->json('Deletado com sucesso!');
    }

    public function saldoFinal()
    {
        $infAll = Operacoes::sum('saldo');
        return response()->json($infAll);
    }
}
