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
<form action="/admin/patient/create" method="post">
    @csrf
    firstname: <input type="text" name="firstname" id="firstname" value="{{$patient->firstname}}"><br>
    lastname: <input type="text" name="lastname" id="lastname" value="{{$patient->lastname}}"><br>
    age: <input type="number" name="age" id="age" value="{{$patient->age}}"><br>
    <input type="submit" value="update">
</form>
</body>
</html>
