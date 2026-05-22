<?php

namespace App\Http\Controllers;

use App\Models\student_table;
use Illuminate\Http\Request;

class studentmngtController extends Controller
{
    public function index () {
        $students = student_table::all();
        return view('student.index', compact('students'));
    }

    public function create () {
        return view('student.create');
    }

    public function store (Request $request) {
        $request->validate([
            'stud_fname' => 'required',
            'stud_lname' => 'required',
            'stud_mname' => 'required',
            'stud_email' => 'required|email|unique:student_table,stud_email',
            'stud_age' => 'required|integer',
            'stud_address' => 'required',
            'stud_dob' => 'required|date',
        ]);

        student_table::create($request->only([
            'stud_fname',
            'stud_lname',
            'stud_mname',
            'stud_email',
            'stud_age',
            'stud_address',
            'stud_dob',
        ]));

        return redirect()->route('student.index')->with('success', 'Student created successfully.');
    }

    public function edit ($id) {
        $student = student_table::findOrFail($id);
        return view('student.edit', compact('student'));
    }
    public function update (Request $request, $id) {
        $request->validate([
            'stud_fname' => 'required',
            'stud_lname' => 'required',
            'stud_mname' => 'required',
            'stud_email' => 'required|email|unique:student_table,stud_email,' . $id,
            'stud_age' => 'required|integer',
            'stud_address' => 'required',
            'stud_dob' => 'required|date',
        ]);

        student_table::findOrFail($id)->update($request->only([
            'stud_fname',
            'stud_lname',
            'stud_mname',
            'stud_email',
            'stud_age',
            'stud_address',
            'stud_dob',
        ]));

        return redirect()->route('student.index')->with('success', 'Student updated successfully.');
    }
    public function destroy ($id) {
        $student = student_table::findOrFail($id);
        $student->delete();

        return redirect()->route('student.index')->with('success', 'Student deleted successfully.');
    }
}
                    