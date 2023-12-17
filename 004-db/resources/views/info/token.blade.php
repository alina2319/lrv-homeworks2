<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>token</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<p>Ваш токен:</p>
<div class="container-token">
    <script>
        const getCookie = (name) => {
            const value = "; " + document.cookie;
            let parts = value.split("; " + name + "=");
            if (parts.length === 2) {
                return parts
                    .pop()
                    .split(";")
                    .shift();
            }
        }
        document.querySelector('.container-token').insertAdjacentHTML("afterbegin", `<div class="token">
            ${getCookie('XSRF-TOKEN')}
        </div>`);
    </script>
</div>
</body>
</html>
