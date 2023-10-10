<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professors;
use Datatables;

class ProfessorsCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Professors::select('*'))
            ->addColumn('action', 'professors.professors-action')
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
 
        $professorId = $request->professor_id;
 
        $professor   =   Professors::updateOrCreate(
                    [
                     'professor_id' => $professorId
                    ],
                    [
                    'professor_name' => $request->professor_name, 
                    'professor_email' => $request->professor_email,
                    'professor_course' => $request->professor_course,
                    'professor_unvtime' => $request->professor_unvtime
                    ]);    
                         
        return Response()->json($professor);
 
    }
      
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
        $where = array('professor_id' => $request->professor_id);
        $professor  = Professors::where($where)->first();
      
        return Response()->json($professor);
    }

    public function show(Request $request)
    {   
        $where = array('professor_id' => $request->professor_id);
        $professor  = Professors::where($where)->first();
      
        return Response()->json($professor);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $professor = Professors::where('professor_id',$request->professor_id)->delete();
      
        return Response()->json($professor);
    }
}
