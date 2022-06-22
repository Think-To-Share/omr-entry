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
        <div class="row justify-content-center">
            <div class="card col-12">
                <div class="card-header">
                    Please Enter Exam Roll Correctly
                </div>
                <div class="card-body">
                    <form action="{{route('confirm-student')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Enter Exam Roll</label>
                            <input type="text" class="form-control" id="examRoll" name="examRoll"  placeholder="Example : 2500010001" maxlength="10">
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