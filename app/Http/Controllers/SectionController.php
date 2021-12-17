<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Classroom;
use App\Http\Requests\StoreSectionRequest;
use Illuminate\Http\Request;
use Redirect;

class SectionController extends Controller
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
    public function create(Classroom $classroom)
    {
        $sections = $classroom->sections()->get();
        return view('sections.create',compact('classroom','sections'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSectionRequest $request,Classroom $classroom)
    {
        $classroom->sections()->create($request->validated());

        return Redirect::back()->with('success','New Section Successfully Inserted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom,Section $section)
    {
        return view('sections.edit',compact('classroom','section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSectionRequest $request,Classroom $classroom,Section $section)
    {
        $section->update($request->validated());
        return Redirect::back()->with('success','This Section Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom,Section $section)
    {
        $section->delete();
        return Redirect::route('home');
    }
}
