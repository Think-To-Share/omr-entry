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
</body>
</html>
