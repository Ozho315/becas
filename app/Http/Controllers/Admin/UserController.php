<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Professor;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $professors = Professor::select(['id', 'name', 'last_name', 'identification_number'])
            ->doesntHave('user')
            ->get();
        $students = Student::select(['id', 'name', 'last_name', 'identification_number'])
            ->doesntHave('user')
            ->get();

        return view('admin.users.create', compact('students', 'professors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|max:255",
        ]);

        $userableType = $request->has('is_student') ? Student::class : Professor::class;
        $userableId = $request->has('is_student') ? $request->student_id : $request->professor_id;
        $role = $request->has('is_student') ? 'student' : 'professor';

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'userable_id' => $userableId,
            'userable_type' => $userableType,
            'password' => $request->password,
        ]);

        $user->assignRole($role);


        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return view('admin.users.index');
    }
}
