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
    <h1 class="justify-content-center d-flex mt-5 sozdanie"> Создание записи </h1>
    <div class="container">
        <form action="/public/todolist-create" method="POST">
            @csrf
            <h4 class="justify-content-center d-flex mt-3"> <input type="text" name="name" placeholder="Введите название" class="otpr"> </input> </h4>
            <div class="d-flex justify-content-center mt-3">    
                <input type="text" name="zapis" placeholder="Введите запись" class="otpr m-1"> </input> 
                <input type="text" name="podpunkt" placeholder="Введите подпункт" class="otpr m-1"> </input> 
                <input type="submit" class="sozdat m-1">
            </div>
        </form>   
    </div>
    
    <form action="/public" class="d-flex justify-content-center mt-4">
            <input type="submit" value="Все записи" class="sozdat"></input>
    </form>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>