<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>info</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-id">id</div>
            <div class="card-header">name</div>
            <div class="card-body">email</div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-id">{{ $table->id }}</div>
                <div class="card-header">{{ $table->name }}</div>
                <div class="card-body">{{ $table->email }}</div>
            </div>
        </div>
    </div>
</div>
<a href="/home">Вернуться на home</a>
</body>
</html>
