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
            <div class="card-header">brand</div>
            <div class="card-body">model</div>
            <div class="card-body">created_at</div>
            <div class="card-body">updated_at</div>
        </div>
        @foreach($table as $td)
            <div class="col-6">
                <div class="card">
                    <div class="card-id">{{ $td->id }}</div>
                    <div class="card-header">{{ $td->brand }}</div>
                    <div class="card-body">{{ $td->model }}</div>
                    <div class="card-created">{{ $td->created_at }}</div>
                    <div class="card-updated">{{ $td->updated_at }}</div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
