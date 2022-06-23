<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class OmrEntryController extends Controller
{
    public function searchStudent()
    {
        // $students = Students::all();
        return view('search-student');
    }

    public function confirmPage(Request $request)
    {
        $this->validate($request,[
            'examRoll' => 'required|string|max:10',
        ]);

        $student = Students::where('exam_roll',$request->examRoll)->first();

        if($student)
        {
//            dd($student->name);
            return view('confirm')->with(['student' => $student]);
        }

        abort(404);
    }

    public function saveNewOmr(Request $request, Students $student)
    {
        $this->validate($request,[
            'omrSL1' => 'nullable|string|max:7',
            'omrSL2' => 'nullable|string|max:7',
        ]);

        $student->update([
            'OMRSRL_paper_1' => $request->input('omrSL1') ?? null,
            'OMRSRL_paper_2' => $request->input('omrSL2') ?? null,
        ]);
        // dd('success');

        return view('omr-updated')->with(['student' => $student]);
    }
}
