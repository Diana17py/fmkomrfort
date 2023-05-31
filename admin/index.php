<?php
session_start();
$login = 'kravets';
$pass = '123';
if ($_SESSION["login"] !== $login && $_SESSION["password"] !== $pass){
    header('location: ../login/index.php');
}

$servername = "localhost";
$username = "root";
$password = "";
$db = 'myShop';
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
?>

<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Адмін-панель</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2>Адміністративна панель</h2>
        </div>
        <div class="col-2">
            <a href="logout.php" class="btn btn-primary">Вихід</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Назва новини</th>
                </tr>
                </thead>
                <?php
                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);
                foreach ($result as $post):
                    ?>
                    <tbody>
                    <tr>
                        <th scope="row"><?=$post['id']?></th>
                        <td><?=$post['title']?></td>
                        <td><a href="edit.php?post_id=<?=$post['id']?>" class="btn btninfo">Редагувати</a></td>
                        <td><a href="delete.php?post_id=<?=$post['id'];?>" class="btn btndanger">Видалити</a></td>
                    </tr>
                    </tbody>
                <?php endforeach;?>
            </table>
            <a href="add.php" class="btn btn-success">Додати новину</a>
        </div>
    </div>
</div>
</body>
</html>
