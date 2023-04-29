@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h3 class="mb-3 fw-normal text-center text-primary pt-5">OMR ENTRY APP</h3>
        <div class="row justify-content-center">
            <div class="card col-6 border-info mb-3">
                <div class="card-body">
                    <form action="{{route('confirm-student')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Enter Exam Roll Correctly</label>
                            <input type="text" class="form-control @error('examRoll') is-invalid @enderror" id="examRoll" name="examRoll"  placeholder="Example : 2500010001" maxlength="10" autofocus>

                            @error('examRoll')
                                <span class="invalid-feedback" >
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary"> Search Student</button>
                            <a href="{{route('students-checklist')}}" target="blank" class="btn btn-warning"> Students Checklist </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
