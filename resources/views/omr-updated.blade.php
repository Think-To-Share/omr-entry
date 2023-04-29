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
                <tr class="table-light">
                    <td>

                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr class="table-active table-warning">
                    <td><strong>OMR SERIAL NO 1</strong></td>
                    <td><strong>{{$student->OMRSRL_paper_1}}</strong></td>
                </tr>
                <tr class="table-active table-success">
                    <td ><strong>OMR SERIAL NO 2</strong></td>
                    <td><strong> {{$student->OMRSRL_paper_2}} </strong></td>
                </tr>
            </tbody>
        </table>
        <div class="card col-12">
            <div class="card-body">
                <div class="mb-3">
                    <a href="{{route('search-student')}}" class="btn btn-danger"> Edit Again Or Next</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
