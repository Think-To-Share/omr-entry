<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class OmrEntryController extends Controller
{
    public function searchStudent()
    {
        $students = Students::all();
        return view('search-student')->with(['students' => $students]);
    }

    public function confirmPage(Request $request)
    {
        $this->validate($request,[
            'examRoll' => 'required|string|max:10',
        ]);

        $student = Students::where('exam_roll',$request->examRoll)->first();

        if($student)
        {
            dd($student->name);
            return view('confirm-page')->with(['student' => $student]);
        }

        abort(404);
    }

    public function saveNewOmr(Request $request, Student $student)
    {
        $this->validate($request,[
            'omr_serial_one' => 'required|string|max:7',
            'omr_serial_two' => 'required|string|max:7',
        ]);

        $student->update([
            'OMRSRL_paper_1' => $request->omr_serial_one,
            'OMRSRL_paper_2' => $request->omr_serial_two
        ]);

        return view('omr-updated')->with(['student' => $student]);
    }
}
