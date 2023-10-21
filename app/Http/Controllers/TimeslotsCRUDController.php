<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Timeslots;
 
use Datatables;

class TimeslotsCRUDController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Timeslots::select('*'))
            ->addColumn('action', 'timeslots.timeslots-action')
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
 
        $timeslotId = $request->timeslot_id;
 
        $timeslot   =   Timeslots::updateOrCreate(
                    [
                     'timeslot_id' => $timeslotId
                    ],
                    [
                    'time' => $request->time, 
                    
                    ]);    
                         
        return Response()->json($timeslot);
 
    }
      
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\timeslots  $timeslot
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
        $where = array('timeslot_id' => $request->timeslot_id);
        $timeslot  = Timeslots::where($where)->first();
      
        return Response()->json($timeslot);
    }

    public function show(Request $request)
    {   
        $where = array('timeslot_id' => $request->timeslot_id);
        $timeslot  = Timeslots::where($where)->first();
      
        return Response()->json($timeslot);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\timeslots  $timeslot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $timeslot = Timeslots::where('timeslot_id',$request->timeslot_id)->delete();
      
        return Response()->json($timeslot);
    }
}
