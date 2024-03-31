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
    <h1 class="justify-content-center d-flex mt-5 nazv"> {{ $data[0]['Название']; }} </h1>
    <div class="container">
        <div class="d-flex justify-content-center mt-5 fs-4"> {{ $data[0]['Запись']; }} </div>
        <div class="d-flex justify-content-center mt-5 fs-4"> {{ $data[0]['Подпункт']; }} </div>
    </div>
    <form action="/public" class="d-flex justify-content-center mt-4">
            <input type="submit" value="Все записи" class="sozdat"></input>
    </form>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>