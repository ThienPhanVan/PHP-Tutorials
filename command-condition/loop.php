<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>

<body>
    <?php
    // Vòng lặp while Lặp đi lặp lại một khối lệnh mã nguồn miễn khi điều kiện vẫn đúng.
    $x = 1;
    // while ($x <= 5) {
    //     echo "The number is: $x <br>";
    //     $x++;
    // }


    //     Vòng lặp do…while
    // Vòng lặp do…while sẽ luôn luôn thực thi một khối mã nguồn ít nhất một lần sau đó nó sẽ kiểm tra điều kiện nếu vẫn đúng thì tiếp tục lặp lại.
    // do {
    //     echo "The number is: $x <br>";
    //     $x++;
    // } while ($x <= 3);

    //Vòng lặp for được sử dụng khi bạn biết có chính xác bao nhiêu lần mã nguồn được thực hiện.

    for ($i = 0; $i <= 10; $i++) {
        // echo "The number is: $i <br>";
    }

    //Vòng lặp foreach chỉ dùng để thao tác với mảng và nó được sử dụng thông qua mỗi cặp key/value trong một mảng.


    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }

    ?>

</body>

</html>