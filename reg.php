<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>


    <div class="feedback">
        <div class="container">
            <h2>Регистрация</h2>
            <p>Зарегестрируйся и участвуй в турнире! .</p>
             
            <form method="post" action="/lib/reg.php">
                <div class="inline">
                    <div>
                        <label>Имя</label>
                        <input type="text" name="name">
                    </div>
                    <div>
                        <label>фамилия</label>
                        <input type="text" name="lastname">
                    </div>
                </div>
                <label>Логин </label>
                <input type="text" class="one-line" name="login">
                 <label>Пороль </label>
                <input type="password" class="one-line" name="password">
                
                <label>@Email адресс </label>
                <input type="email" class="one-line" name="email">

                <label>Наименование команды </label>
                <input type="text" class="one-line" name="comandname">

                <button type="submit">Зарегестрироваться</button>
            </form>
        </div>
    </div>

     <?php require_once "blocks/footer.php"; ?>

</body>

</html>