<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <title>Document</title>
</head>
<body>
    <h1 class="justify-content-center d-flex mt-5 sozdanie"> Все записи </h1>
    <div class="container">
    <form action="/public/todolist-form">
            <div class="d-flex justify-content-center">
                <input type="submit" value="СОЗДАТЬ ЗАПИСЬ" class="sozdat"></input>
            </div>
        </form>

        @foreach($data as $key=>$value)
        <div class="d-flex justify-content-center mt-3">
            <p class="tekst m-3"><a href="/public/todolist-edit-{{ $value['id']; }}">{{ $value['Название']; }}</a> </p> <p class="tekst2 m-3"><a href="/public/todolist-delete-{{ $value['id']}}">Удалить</a></p>
        </div>
        @endforeach 
    </div>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>