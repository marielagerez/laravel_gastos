<?php

namespace App\Http\Controllers;
use App\Sucursal;
use Illuminate\Http\Request; 

class SucursalController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function lista()
    {
        //
        //$sucursales=Sucursal::all();
        $sucursales=Sucursal::all();
        dd($sucursales);
    //   $sucursales=Sucursal::all();
          return $sucursales;     
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
          $sucursales=Sucursal::orderBy('id','ASC')->paginate(3);
          //   $sucursales=Sucursal::all();
          return view( 'sucursales.index',  compact ('sucursales'));     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      return view('sucursales.create');
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       /* $this->validate($request,['descripcion'=>'required',
                                    'fecha'=>'required',
                                    'concepto'=>'required',
                                    'importe'=>'required',
                                    'grupo_id'=>'required',
                                    'id_sucursal'=>'required']);*/
        Sucursal::create($request->all());
        return redirect()->route('sucursales.index')->with('success','Registro cargado OK');
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
        $sucursales=Sucursal::find($id);

        dd($sucursales);
        return view('sucursales.show',compact('sucursales'));
      
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
         $gasto=Sucursal::find($id); 
         return view('sucursales.edit',compact('gasto'));
       
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
       // $this->validate($request,[]);
        $sucursales=Sucursal::find($id)->update($request->all());
        return redirect()->route('sucursales.index')->with('success','Registro actualizado OK');
      
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
         Sucursal::find($id)->delete();
         return redirect()->route('sucursales.index')->with('success','Registro eliminado OK');
    }
    /**
     * Display the specified resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function init()
    {
        //
       
        return view('sucursales.init');
      
    }
}
