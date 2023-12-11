<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <h2 class="text-center">{{$formCreate}}</h2>
  <div class="container">
    <form action="/list/post" method="post">
      <div class="form-grup mb-3">
        <label for="name">Ваше имя или никнейм</label>
        <input type="text" name="name" placeholder="Ваше имя или никнейм" id="name" class="form-control" required>
      </div>
      <div class="form-grup mb-3">
        <label for="email">Ваш email</label>
        <input type="text" name="email" placeholder="Ваш email" id="email" class="form-control" required>
      </div>
      <div class="form-grup mb-3">
        <label for="phone">Телефон</label>
        <textarea type="text" name="phone" placeholder="Ваш телефон"
          id="phone" class="form-control" required></textarea>
      </div>
      <button type="submit" class="btn btn-success mb-3">Отправить</button>
      </form>
      <a href="/list"><button type="reset" class="btn btn-info">Список зарегистрированных</button></a>
  </div>
  
</body>
</html>
