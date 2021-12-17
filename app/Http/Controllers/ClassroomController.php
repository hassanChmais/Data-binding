<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Grade;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClassroomRequest;
use Redirect;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Grade $grade)
    {
        $classes = $grade->classrooms()->get();
        return view('classes.create',compact('grade','classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassroomRequest $request,Grade $grade)
    {
        $grade->classrooms()->create($request->validated());

        return Redirect::back()->with('success','New Class Inserted Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade,Classroom $classroom)
    {
        return view('classes.edit',compact('grade','classroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(StoreClassroomRequest $request,Grade $grade,Classroom $classroom)
    {
        $classroom->update($request->validated());

        return Redirect::back()->with('success','This Class Successfully Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade,Classroom $classroom)
    {
        $classroom->delete();

        return Redirect::route('home');
    }
}
