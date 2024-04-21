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
<div>
    @foreach($patients as $patient)
    <div style="background-color: silver">
        <h3>{{$patient->firstname}} {{$patient->lastname}}</h3>
        <span>{{$patient->disease_id}}</span>
    </div>
    @endforeach
</div>
</body>
</html>
