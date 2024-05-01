<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
</head>
<body>
<h1 style="text-align: center">ویرایش محصول</h1>
<form action="/admin/products/{{$product->id}}/edit" method="post">
    @csrf
    @method("put")
    عنوان: <input type="text" name="title" id="title" value="{{$product->title}}"><br>
    دسته بندی: <select name="category">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach
    </select><br>
    توضیحات: <textarea name="description" id="description" cols="10" rows="5">{{$product->description}}</textarea><br>
    <input type="submit" value="ویرایش">
</form>
@if ($errors->any())
    <div style="color: red;background-color: lightpink;padding:10px 16px;margin: 10px;border-radius: 10px ">
        <div>
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    </div>
@endif
</body>
</html>
