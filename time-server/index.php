<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng hiển thị thời gian của server</title>
</head>

<body>
    <?php
    date_default_timezone_set('Asia/Ho_Chi_Minh')
    ?>
    <h1> Bây giờ là: <?php echo date('Y-M-d h:i:s'); ?> </h1>
</body>

</html>