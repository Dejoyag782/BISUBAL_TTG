<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Courses;
use Datatables;

class CourseCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Courses::select('*'))
            ->addColumn('action', 'courses.courses-action')
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
 
        $courseId = $request->course_id;
 
        $course   =   Courses::updateOrCreate(
                    [
                     'course_id' => $courseId
                    ],
                    [
                    'course_code' => $request->course_code, 
                    'course_name' => $request->course_name,
                    'course_prof' => $request->course_prof
                    ]);    
                         
        return Response()->json($course);
 
    }
      
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
        $where = array('course_id' => $request->course_id);
        $course  = Courses::where($where)->first();
      
        return Response()->json($course);
    }

    public function show(Request $request)
    {   
        $where = array('course_id' => $request->course_id);
        $course  = Courses::where($where)->first();
      
        return Response()->json($course);
    }
      
      
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $course = Courses::where('course_id',$request->course_id)->delete();
      
        return Response()->json($course);
    }
}
