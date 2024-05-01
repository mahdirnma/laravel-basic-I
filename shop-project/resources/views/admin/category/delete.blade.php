<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>delete</title>
</head>
<body>
<h1 style="text-align: center">حذف دسته بندی</h1>
<p style="text-align: center;font-size: 30px;margin-top: 100px">عنوان : {{$category->title}}</p>
<div style="width: 100%;display: flex;justify-content: center">
    <a href="/admin/categories/{{$category->id}}/remove" style="text-decoration: none;color: darkred;border: 3px solid darkred;padding: 10px;border-radius: 10px;font-size: 20px;font-weight: bold">از حذف اطمینان دارید؟</a>
</div>
</body>
</html>
