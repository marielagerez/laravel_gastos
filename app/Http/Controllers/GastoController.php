<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gasto;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gastos=Gasto::orderBy('id','ASC')->paginate(3);
	    view( 'Gasto.index',  compact ('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Gasto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['descripcion'=>'required','fecha'=>'required','concepto'=>'required','importe'=>'required']);
        Gasto::create($request->all());
        return redirect()->route('gasto.index')->with('success','Registro cargado OK');
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
        $gastos=Gasto::find($id);
        return view('gasto.show',compact('gastos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $gastos=Gasto::find($id);
        return view('gasto.edit',compact('gastos'));
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
        //
        $this->validate($request,['descripcion'=>'required','fecha'=>'required','concepto'=>'required','importe'=>'required']);
        $gastos=Gasto::find($id)->update($request->all());
        return redirect()->route('gasto.index')->with('success','Registro actualizado OK');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Gasto::find($id)->delete();
         return redirect()->route('gasto.index')->with('success','Registro eliminado OK');
    }
}
