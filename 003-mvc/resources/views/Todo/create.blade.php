<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
{{--<div class="container">--}}
{{--    <form action="" enctype="multipart/form-data" method="post">--}}
{{--        <label>--}}
{{--            <span>Заголовок</span>--}}
{{--            <input type="text" name="title" required value="{{ $tr['title'] }}">--}}
{{--        </label>--}}
{{--        <label>--}}
{{--            <span>Дополнение</span>--}}
{{--            <input type="text" name="disc" required value="{{ $tr['description'] }}">--}}
{{--        </label>--}}
{{--        <button>Отправить</button>--}}
{{--    </form>--}}
{{--</div>--}}
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">title</div>
            <div class="card-body">description</div>
        </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">{{ $tr['title'] }}</div>
                    <div class="card-body">{{ $tr['description'] }}</div>
                </div>
            </div>
    </div>
</div>
</body>
</html>
