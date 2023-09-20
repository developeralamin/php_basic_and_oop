<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require('cookie.php');

    if (isset($_COOKIE[$cookie_name])) {
        echo "Cookie name = " . $cookie_name . '</br>';
        echo "Cookie value = " . $cookie_value;
    } else {
        echo "Cookie nai";
    }


    ?>



</body>

</html>