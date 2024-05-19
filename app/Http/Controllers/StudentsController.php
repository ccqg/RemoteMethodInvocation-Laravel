<?php

namespace App\Http\Controllers;
use App\Models\courses_model;
use App\Models\Students;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {   
        $enrollment = Enrollment::all();
        $students = Students::all();
        $courses = courses_model::all();
        return view('dashboard', compact('students', 'courses', 'enrollment'));
    }
    
   
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}
