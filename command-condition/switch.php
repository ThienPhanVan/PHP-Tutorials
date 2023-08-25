<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu lệnh switch</title>
</head>

<body>
    <?php
    // Sử dụng câu lệnh switch để chọn một hoặc nhiều khối mã nguồn để thực thi.
    // Cú pháp:
    // switch (n) {
    //      case label1:
    //          code to be executed if n=label1;
    //          break;
    //      case label2:
    //          code to be executed if n=label2;
    //          break;
    //      case label3:
    //          code to be executed if n=label3;
    //          break;
    //      ...
    //      default:
    //          code to be executed if n is different from all labels;
    //  }

    $date = getdate();

    switch ($date["weekday"]) {
        case "Monday":
            echo "Thứ hai";
            break;
        case "Tuesday":
            echo "Thứ ba";
            break;
        case "Wednesday":
            echo "Thứ tư";
            break;
        case "Thursday":
            echo "Thứ năm";
            break;
        case "Friday":
            echo "Thứ sáu";
            break;
        case "Saturday":
            echo "Thứ bảy";
            break;
        case "Sunday":
            echo "Chủ nhật";
            break;
    }


    ?>
</body>

</html>