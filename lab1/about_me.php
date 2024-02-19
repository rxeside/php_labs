<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<body>
    <h1>About Me</h1>

    <?php
    $name = "Денис";
    $surname = "Леухин";

    $birth_date = new DateTime('2004-02-21');
    $today = new DateTime();
    $age = $today->diff($birth_date)->y;

    $interests = array("Путешествия", "Игры", "Чтение", "Кино", "Спорт");

    ?>

    <h2>Имя: <?php echo ($name . " " . $surname); ?></h2>
    <h2>Возраст: <?php echo ($age); ?></h2>

    <h2>Интересы:</h2>
    <ul>
        <?php foreach ($interests as $interest) : ?>
            <li><?php echo ($interest); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
