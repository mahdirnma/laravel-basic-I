<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="/student/add">add tour</a>
<div>
    <table border="1">
        <thead>
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->firstname}}</td>
                <td>{{$student->lastname}}</td>
                <td style="color: deepskyblue">
                    <form action="" method="get">
                        @csrf
                        <button>update</button>
                    </form>
                </td>
                <td style="color: deepskyblue; font-size: 20px;text-align: center">
                    <form action="/student/{{$student->id}}/delete" method="post">
                        @csrf
                        @method("delete");
                        <button>delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
