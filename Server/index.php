<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>restaurants and reviews - php and react hooks</title>
</head>
<body>
    <?php
    require_once './rest-logic.php';
    $restaurants = getAllRestaurants();

    foreach ($restaurants as $r){

        print_r($r);
    }

    ?>
</body>
</html>