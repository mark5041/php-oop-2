<?php
    require_once __DIR__ .'/classes/Card.php';
    require_once __DIR__ .'/classes/User.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user = new User(0, "mark", "beloso", 19, 0, 1);
        var_dump($user) ;

        $card = new Card("4000056655665556", "isa","2023-12-01", "213","mark beloso");
        var_dump($card);
    ?>
</body>
</html>