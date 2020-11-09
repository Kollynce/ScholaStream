<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::get();
         return view('courses')->with('course',$course);
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
        $input = $request->all();
        $course = Course::create($input);
//        file
        $uploadedFile1 = $request->file('file');
        $filename = time() .''. $uploadedFile1->getClientOriginalName();
        $uploadedFile1->storeAs('uploads', $filename, 'public');
        $course->file = $filename;
//      video
        $uploadedFile2 = $request->file('video');
        $filename = time() .''. $uploadedFile2->getClientOriginalName();
        $uploadedFile2->storeAs('uploads', $filename, 'public');
        $course->video = $filename;
//      image
        $uploadedFile3 = $request->file('image');
        $filename = time() .''. $uploadedFile3->getClientOriginalName();
        $uploadedFile3->storeAs('uploads', $filename, 'public');
        $course->image = $filename;

        $course->save();


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('view')->with('course', $course);
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
        //
    }
}
