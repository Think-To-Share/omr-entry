@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <table class="table table-dark table-striped">
            <tbody>
                <tr>
                    <td class="">
                        <strong>Name</strong>
                    </td>
                    <td class="">
                        <strong>Exam Roll</strong>
                    </td>
                    <td class="">
                        <strong>OMR SL 1</strong>
                    </td>
                    <td class="">
                        <strong>OMR SL 2</strong>
                    </td>
                </tr>
                @foreach($students as $student)
                    <tr class="table-active">
                        <td>{{$student->name}}</td>
                        <td>{{$student->exam_roll}}</td>
                        <td>{{$student->OMRSRL_paper_1}}</td>
                        <td>{{$student->OMRSRL_paper_2}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
