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
    <h1 class="justify-content-center d-flex mt-5"> TO DO LIST </h1>
    <div class="container">
        <form action="/public/todolist-form">
            <input type="submit" value="СОЗДАТЬ ЗАПИСЬ" class="sozdat"></input>
        </form>
    </div>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>