<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<style>
    .greeting {
        color: green;
    }
</style>

<body>
    <?php
    //Để tạo một hằng số chúng ta sử dụng hàm define()

    //Cú pháp:

    //define(name, value, case-insensitive)

    define("GREETING", "<h1 class='greeting'>Welcome to Php</h1>");

    //hang so toan cuc
    function myGreeting()
    {
        echo GREETING;
    }

    myGreeting();

    // hang so mang (array)
    define("cars", ["BMW", "Toyota", "Vinfast"]);

    echo cars[2];
    ?>
</body>

</html>