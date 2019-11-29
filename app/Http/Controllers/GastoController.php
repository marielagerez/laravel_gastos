<?php

namespace App\Http\Controllers;
use App\Gasto;
use Illuminate\Http\Request; 

class GastoController extends Controller
{
    /**
     * Display the specified resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function init()
    {
        //
       
        return view('gastos.init');
      
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
        $gastos=Gasto::orderBy('id','ASC')->paginate(3);
    //   $gastos=Gasto::all();
          return view( 'gastos.index',  compact ('gastos'));     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      return view('gastos.create');
     
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
        $this->validate($request,['descripcion'=>'required',
                                    'fecha'=>'required',
                                    'concepto'=>'required',
                                    'importe'=>'required',
                                    'grupo_id'=>'required',
                                    'id_sucursal'=>'required']);
        Gasto::create($request->all());
        return redirect()->route('gastos.index')->with('success','Registro cargado OK');
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
        return view('gastos.show',compact('gastos'));
      
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
         $gasto=Gasto::find($id); 
         return view('gastos.edit',compact('gasto'));
       
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
        $this->validate($request,['descripcion'=>'required','fecha'=>'required','concepto'=>'required','importe'=>'required','grupo_id'=>'required']);
        $gastos=Gasto::find($id)->update($request->all());
        return redirect()->route('gastos.index')->with('success','Registro actualizado OK');
      
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
         return redirect()->route('gastos.index')->with('success','Registro eliminado OK');
    }
}
