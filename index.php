<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Додаток для фітнесу</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<header>
</header>
<nav>
    <h1>MuscleMosaic</h1>
    <div class="header_btn">
        <a href="#progress"><img src="icons/Progress.png" alt="Прогрес">Прогрес</a>
        <a href="#workouts"><img src="icons/training.png" alt="Тренування"> Тренування</a>
        <a href="#nutrition"><img src="icons/Food.png" alt="Харчування"> Харчування</a>
        <a href="#programs"><img src="icons/programs.png" alt= "Програми">Програми</a>
        <a href="#calories"><img src="icons/Calories.png" alt="Калорії">Калорії</a>
    </div>
    <a id="register_button" href="#"><img src="icons/register.png" alt="Реєстрація"> Реєстрація</a>
</nav>
<div class="container">
    <div class="content">
        <h1>Здійснюй свої мрії</h1>
        <img id="main_pickure" src="icons/main3.jpg">
    </div>

    <div class="popup non_display">
        <div class="close-btn">&times;</div>
        <div class="form">
            <h2>Реєстрація</h2>
            <form action="register.php" method="post">
                <div class="form-element">
                    <label for="name">Ім'я</label>
                    <input type="text" id="name" name="name" placeholder="Введіть ім'я" required>
                </div>
                <div class="form-element">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Введіть EMAIL" required>
                </div>
                <div class="form-element">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" placeholder="Введіть пароль" required>
                </div>
                <div class="form-element">
                    <button type="submit">Зареєструватися</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/main.js"></script>
<script type="module" src="js/register.js" defer></script>
</body>
</html>
