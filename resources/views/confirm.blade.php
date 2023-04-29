@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <table class="table table-dark table-striped">
            <tbody>
                <tr>
                    <td colspan="2" class="text-center">
                        <strong> STUDENT DETAILS</strong>
                    </td>
                </tr>
                <tr class="table-active">
                    <td><strong>Name</strong></td>
                    <td>{{$student->name}}</td>
                </tr>
                <tr class="table-active">
                    <td><strong>Exam Roll</strong></td>
                    <td>{{$student->exam_roll}}</td>
                </tr>
                <tr class="table-active">
                    <td><strong>DOB</strong></td>
                    <td>{{$student->dob}}</td>
                </tr>
                <tr class="table-active">
                    <td><strong>Adhaar Number</strong></td>
                    <td>{{$student->adhaar_no}}</td>
                </tr>
                <tr class="table-active">
                    <td><strong>Mother's Name</strong></td>
                    <td>{{$student->mName}}</td>
                </tr>
                <tr class="table-active">
                    <td><strong>Father's Name</strong></td>
                    <td>{{$student->fName}}</td>
                </tr>
                <tr class="table-active">
                    <td><strong>Gender</strong></td>
                    <td>{{$student->gender}}</td>
                </tr>
                <tr class="table-active">
                    <td><strong>School Name</strong></td>
                    <td>{{$student->school_name}}</td>
                </tr>
                <tr class="table-active">
                    <td><strong>JAC CODE</strong></td>
                    <td>{{$student->jac_code}}</td>
                </tr>
                <tr class="table-active">
                    <td><strong>Exam Center</strong></td>
                    <td>{{$student->center}}</td>
                </tr>
                <tr class="table-active">
                    <td><strong>Exam Center District</strong></td>
                    <td>{{$student->centerDist}}</td>
                </tr>
                <tr class="table-active">
                    <td><strong>Exam Center Block</strong></td>
                    <td>{{$student->centerBlock}}</td>
                </tr>
            </tbody>
        </table>
        <div class="card col-12">
            <div class="card-body">
                <form action="{{ route('update-student',['student' => $student->id]) }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Enter OMR SL NO 1</label>
                        <input type="text" class="form-control @error('omrSL1') is-invalid @enderror" id="omrSL1" name="omrSL1"  placeholder="Example : 4529648" maxlength="7" value="{{ old('omrSL1', $student->OMRSRL_paper_1) }}" autofocus>

                        @error('omrSL1')
                            <span class="invalid-feedback" >
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Enter OMR SL NO 2</label>
                        <input type="text" class="form-control @error('omrSL2') is-invalid @enderror" id="omrSL2" name="omrSL2"  placeholder="Example : 5529648" maxlength="7" value="{{ old('omrSL2', $student->OMRSRL_paper_2) }}">

                        @error('omrSL2')
                            <span class="invalid-feedback" >
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary"> Update OMR Serial</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
