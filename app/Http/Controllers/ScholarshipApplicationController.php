<?php

namespace App\Http\Controllers;

use App\Models\ScholarshipApplication;
use App\Models\ScholarshipType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScholarshipApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->hasRole('professor')) {
            return view('professor.scholarship-applications.index');
        } else if (Auth::user()->hasRole('student')) {
            return view('student.scholarship-applications.index');
        } else if (Auth::user()->hasRole('admin')) {
            return view('admin.scholarship-applications.index');
        }
        abort(403);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(!Auth::user()->hasRole('student'), 403);

        return view('student.scholarship-applications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ScholarshipApplication $scholarshipApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScholarshipApplication $scholarshipApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ScholarshipApplication $scholarshipApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScholarshipApplication $scholarshipApplication)
    {
        $scholarshipApplication->delete();

        if (Auth::user()->hasRole('professor')) {
            return view('professor.scholarship-applications.index');
        } else if (Auth::user()->hasRole('student')) {
            return view('student.scholarship-applications.index');
        }
    }
}
