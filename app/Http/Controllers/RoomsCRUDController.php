<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Models\Rooms;
 
use Datatables;
 
class RoomsCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Rooms::select('*'))
            ->addColumn('action', 'rooms.rooms-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('rooms.rooms');
    }
      
      
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
 
        $roomId = $request->id;
 
        $room   =   Rooms::updateOrCreate(
                    [
                     'id' => $roomId
                    ],
                    [
                    'room_no' => $request->room_no, 
                    'capacity' => $request->capacity,
                    ]);    
                         
        return Response()->json($room);
 
    }
      
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rooms  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
        $where = array('id' => $request->id);
        $room  = Rooms::where($where)->first();
      
        return Response()->json($room);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rooms  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $room = Rooms::where('id',$request->id)->delete();
      
        return Response()->json($room);
    }
}