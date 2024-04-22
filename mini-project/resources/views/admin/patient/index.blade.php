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
<a href="/admin/patient/add">add post</a>
<table border="1">
    <caption>patients</caption>
    <thead>
    <tr>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>age</th>
        <th>disease_id</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($patients as $patient)
    <tr>
        <td>{{$patient->id}}</td>
        <td>{{$patient->firstname}}</td>
        <td>{{$patient->lastname}}</td>
        <td>{{$patient->age}}</td>
        <td>{{$patient->disease_id}}</td>
        <td>
            <form action="/admin/patient/{{$patient->id}}/update" method="post">
                @csrf
                @method("post")
                <button>update</button>
            </form>
        </td>
        <td>
            <form action="/admin/patient/{{$patient->id}}/delete" method="post">
                @csrf
                @method("delete")
                <button>delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
