<?php

    function Hello() {
        return "Hello, World!";
    };

    $message = '';

    if (isset($_POST["action"]) && $_POST["action"] == 'go') {
        $message = Hello();
    };

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="action" value="go">Запустить функцию</button>
    </form>

    <?php if ($message): ?>
        <p>Результат: <?php echo $message; ?></p>
    <?php endif ?>
</body>
</html>
