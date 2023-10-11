<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Classes;
use Datatables;

class ClassesCRUDController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Classes::select('*'))
            ->addColumn('action', 'classes.classes-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('dashboard.index');
    }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $classId = $request->class_id;
 
        $class   =   Classes::updateOrCreate(
                    [
                     'class_id' => $classId
                    ],
                    [
                    'class_name' => $request->class_name, 
                    'class_population' => $request->class_population,
                    'class_courses' => $request->class_courses,
                    'class_unv_rooms' => $request->class_unv_rooms,
                    ]);    
                         
        return Response()->json($class);
 
    }
      
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\class  $class
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
        $where = array('class_id' => $request->class_id);
        $class  = Classes::where($where)->first();
      
        return Response()->json($class);
    }

    public function show(Request $request)
    {   
        $where = array('class_id' => $request->class_id);
        $class  = Classes::where($where)->first();
      
        return Response()->json($class);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\class  $class
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $class = Classes::where('class_id',$request->class_id)->delete();
      
        return Response()->json($class);
    }
}
