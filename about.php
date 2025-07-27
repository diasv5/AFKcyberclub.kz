<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php"; ?>

        <div class="hero-about container">
            <div class="info">
                <h1>Немного о киберклубе.</h1>
                <p>🔹 Зоны для командной и одиночной игры
🔹 Регулярные турниры и события
🔹 Профессиональная поддержка и аренда оборудования
🔹 Комфорт для геймеров всех уровней

AFK Cyberclub — место, где каждый клик решает.
Ты не просто играешь — ты становишься частью цифровой элиты..</p>
                <button class="btn">Зарегестрироваться</button>
            </div>
            <img src="/img/about-banner.jpg" alt="">
        </div>

        <div class="container work">
            <h2>Why work with us</h2>
            <div class="blocks">
                <div class="block">
                    <span class="badge purple">Lorem ipsum</span>
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="block">
                    <span class="badge brown">Lorem ipsum</span>
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="block">
                    <span class="badge green">Lorem ipsum</span>
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
        </div>
    </div>

     <?php require_once "blocks/footer.php"; ?>
</body>

</html>