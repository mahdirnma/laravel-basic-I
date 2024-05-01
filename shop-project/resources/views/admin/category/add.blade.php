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
<h1 style="text-align: center">افزودن محصول</h1>
<form action="/admin/categories/create" method="post">
    @csrf
    عنوان: <input type="text" name="title" id="title"><br>
    <input type="submit" value="افزودن">
</form>
</body>
</html>
