<? session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Тест экстрасенсов</title>
</head>
<body>
<header>
    <h1>Тест экстрасенсов</h1>
</header>

<form action="guess.php" method="post">
    <input type="number" placeholder="Загадайте число от 1 до 10" name="number" style="width:500px">
    <input type="submit" value="Submit">
</form>
<br>
<div>
    <?php
        if (!empty($_SESSION['trustLevels'])) {
            foreach ($_SESSION['trustLevels'] as $name => $level) {
                echo '<div>';
                echo '<span>' . $name . ':</span>' . '<p>' . $level . '</p>';
                echo '</div>';
                echo '<br>';
            }
        }
    ?>
</div>
<br>
<div>
    <?php 
        if (!empty($_SESSION['history'])) {
            foreach ($_SESSION['history'] as $key => $attemp) {
                echo '<span>' . $key . ':</span>' . '<p>';
                foreach ($attemp as $psychic => $result) {
                    echo '<div>';
                    echo '<span>' . $psychic . ':</span>' . '<p>' . $result . '</p>';
                    echo '</div>';
                    echo '<br>';
                }
                echo '</p>';
            }
        } else {
            echo $_SESSION['greetings'];
        }
    ?>
</div>
</body>
</html>