<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // Создание новой группы
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'start_from' => 'required|date',
            'is_active' => 'boolean',
        ]);

        Group::create([
            'title' => $request->title,
            'start_from' => $request->start_from,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('groups.index')->with('успешно', 'Группа создана.');
    }

    /**
     * Display the specified resource.
     */
    // Отображение списка групп
    public function show(Group $group)
    {
        $students = $group->students;
        return view('groups.show', compact('group', 'students'));
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
