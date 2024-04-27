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
    firstname: <input type="text" name="firstname" id="firstname"><br>
    lastname: <input type="text" name="lastname" id="lastname"><br>
    age: <input type="number" name="age" id="age"><br>
    disease: <select name="disease" id="disease">
        <option value="">select your disease</option>
    @foreach($diseases as $disease)
            <option value="{{$disease->id}}">{{$disease->title}}</option>
        @endforeach
    </select>
    <input type="submit" value="add">
</form>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</body>
</html>
