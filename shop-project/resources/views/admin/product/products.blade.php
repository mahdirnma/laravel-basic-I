<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products</title>
</head>
<body>
<h1 style="text-align: center">محصولات</h1>
<a href="/admin/products/add" style="text-decoration: none;color: #0f5ab7;border: 1px solid #0f5ab7;padding: 10px;border-radius: 10px;font-size: 15px">افزودن محصول</a>
<table border="1" style="text-align: center">
    <caption>products</caption>
    <thead>
    <tr>
        <th>حذف</th>
        <th>ویرایش</th>
        <th>توضیحات</th>
        <th>دسته بندی</th>
        <th>عنوان محصول</th>
        <th>کد</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>
                <form action="/admin/products/{{$product->id}}/delete" method="post">
                    @csrf
                    <input type="submit" value="delete">
                </form>
            </td>
            <td>
                <form action="/admin/products/{{$product->id}}/update" method="post">
                    @csrf
                    <input type="submit" value="update">
                </form>
            </td>
            <td>{{$product->description}}</td>
            <td>
                @foreach($categories as $category)
                    {{$category->id==$product->category_id?$category->title:""}}
                @endforeach
            </td>
            <td>{{$product->title}}</td>
            <td>{{$product->id}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
