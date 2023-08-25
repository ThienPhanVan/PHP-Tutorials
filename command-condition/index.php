<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command Condition</title>
</head>

<body>
    <?php
    //         Câu lệnh If Các mã lệnh trong câu lệnh if được thực thi khi điều kiện là đúng
    //         Cú pháp:

    // if (condition) {
    //      code to be executed if condition is true;
    // }
    $t  = date("H");

    // if ($t > "20") {
    //     echo "Have a good day!";
    // } else {
    //     echo "Have a good night!";
    // }


    //     Câu lệnh if…else if…else
    // Câu lệnh if…else if…else sẽ thực thi mã nguồn khác nhau cho nhiều hơn 2 điều kiện.

    // Cú pháp:

    // if (condition) {
    //      code to be executed if this condition is true;
    //  } elseif (condition) {
    //      code to be executed if this condition is true;
    //  } else {
    //      code to be executed if all conditions are false;
    //  }

    if ($t > "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good afternoon!";
    } else {
        echo "Have a good night!";
    }
    ?>
</body>

</html>