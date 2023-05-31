<?php
session_start();
$login = 'kravets';
$pass = '123';
if ($_SESSION["login"] !== $login && $_SESSION["password"] !== $pass){
    header('location: ../login/index.php');
}
?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0>
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Додавання нової новини</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Додання нової новини</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="check.php" method="post"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Вкажіть назву
                        продукту</label>
                    <input name="title" type="text" class="form-control"
                           id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Вкажіть посилання на
                        зображення новини</label>
                    <input name="image" type="text" class="form-control"
                           id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Вкажіть текст
                        новини</label>
                    <textarea name="content" class="form-control"
                              id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Вартість</label>
                    <input name="price" type="text" class="form-control"
                           id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Категорія</label>
                    <input name="category" type="text" class="form-control"
                           id="exampleFormControlInput1">
                </div>
                <button type="submit" class="btn btn-primary">Створити
                    новину</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>