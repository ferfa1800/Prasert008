<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$student = Student::all();//แสดงข้อมูลทั้งหมด
        //$typebooks = TypeBooks::orderBy('id','desc')->get();
        //แสดงข้อมูลทั้งหมดเรียงจากน้อยไปมากโดยใช้ ID
        $count = Student::count();//นับจำนวนแถวทั้งหมด
        
        //แบ่งหน้า
        //$student = Student::simplePaginate(3);
        $student = Student::paginate(25);
                
                
        return view('student.index', [
                    'student'=> $student,
                    'count'=> $count
        ]);//ส่งไปที่ view โฟลเดอร์ typebooks ไฟล์ index.blade.pnp
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
        //
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //TypeBooks::find($id)->delate();
        Student::destroy($id);
        return back();
    }
}
