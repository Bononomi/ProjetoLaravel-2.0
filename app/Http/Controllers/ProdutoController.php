<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function index()
    {
        $produtos = \App\Produto::get();
        
        return view('produto.index', compact('produtos'));
    }

   
    public function create()
    {
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new \App\Produto();
        $produto->nompro = $request->get('nompro');
        $produto->despro = $request->get('despro');
        $produto->vlrpro = $request->get('vlrpro');
        $produto->codcat = $request->get('codcat');
       
        $produto->save();
        
        return redirect('/produto')->with('msg', 'Produto cadastrado com sucesso!');
    }

   
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
    public function edit($codpro)
    {
        $produto = \App\Produto::find($codpro);
        return view('produto.edit', compact('produto'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $codpro)
    {
        
        $produto = \App\Produto::find($codpro);
        $produto->nompro = $request->get('nompro');
        $produto->despro = $request->get('despro');
        $produto->vlrpro = $request->get('vlrpro');
        $produto->codcat = $request->get('codcat');
    
        $produto->save();
        
        return redirect('/produto')->with('alterado', 'Produto alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($codpro)
    {
        $produto = \App\Produto::find($codpro);
        $produto->delete();
        
        return redirect('/produto')->with('proEliminado', 'Produto eliminado');
    }
}
