<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Group $group)
    {
        return view('students.create', ['group' => $group]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Group $group)
    {
        $request->validate([
            'surname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        Student::create([
            'group_id' => $group->id,
            'surname' => $request->surname,
            'name' => $request->name,
        ]);

        return redirect()->route('groups.show', $group)->with('успешно', 'Студент добавлен.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group, Student $student)
    {
        return view('students.show', compact('group', 'student'));
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