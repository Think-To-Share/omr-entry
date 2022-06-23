<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Student</title>
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-3 fw-normal text-center text-primary pt-5">OMR ENTRY APP</h3>
        <div class="row justify-content-center">
            <div class="card col-6 border-info mb-3">
                <div class="card-body">
                    <form action="{{route('confirm-student')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Enter Exam Roll Correctly</label>
                            <input type="text" class="form-control @error('examRoll') is-invalid @enderror" id="examRoll" name="examRoll"  placeholder="Example : 2500010001" maxlength="10">

                            @error('examRoll')
                                <span class="invalid-feedback" >
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary"> Search Student</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    </body>
</html>
