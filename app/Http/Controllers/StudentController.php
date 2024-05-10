<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentAddress;
use App\Models\Oders;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::orderBy('id','asc')->paginate(3);
        session()->put('first_name','anu');
        session()->put('student_id',1);
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
        return session()->get('first_name');
        session()->increment('student_id');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'gender' => 'required|string|in:male,female,non-binary',
        'qualifications' => 'required|string|max:255',
    ]);

    Student::create($validated);

    return redirect()->route('student.index')->with('success', 'Student added successfully!');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Student $student)
{
    // $student=studentaddress::find(1);
    // return view('student.view', compact('student'));
    return view('student.view', compact('student'));

}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // Display the form for editing a specific student
        return view('student.edit', compact('student'));
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
        // Validate the request input
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female,non-binary',
            'qualifications' => 'required|string|max:255',
        ]);
    
        // Find the existing student by ID
        $student = Student::findOrFail($id);
    
        // Update the student with validated data
        $student->update($validated);
    
        // Redirect back with a success message
        return redirect()->route('student.index')->with('success', 'Student updated successfully!');
    }
    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $student = Student::find($id);
    
            if ($student) {
                $student->delete();
                return redirect()->route('student.index')->with('success', 'Student deleted successfully.');
            } else {
                return redirect()->route('student.index')->with('error', 'Student not found.');
            }
        }
    
    }

}