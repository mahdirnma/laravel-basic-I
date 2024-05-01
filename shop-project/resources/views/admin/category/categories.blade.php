<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>categories</title>
</head>
<body>
<h1 style="text-align: center">دسته بندی</h1>
<a href="/admin/categories/add" style="text-decoration: none;color: #0f5ab7;border: 1px solid #0f5ab7;padding: 10px;border-radius: 10px;font-size: 15px">افزودن دسته بندی</a>
<table border="1" style="text-align: center;margin-top: 20px">
    <caption>categories</caption>
    <thead>
    <tr>
        <th>حذف</th>
        <th>ویرایش</th>
        <th>عنوان دسته بندی</th>
        <th>کد</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>
                <form action="/admin/categories/{{$category->id}}/delete" method="post">
                    @csrf
                    <input type="submit" value="delete">
                </form>
            </td>
            <td>
                <form action="/admin/categories/{{$category->id}}/update" method="post">
                    @csrf
                    <input type="submit" value="update">
                </form>
            </td>
            <td>{{$category->title}}</td>
            <td>{{$category->id}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
