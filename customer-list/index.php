<?php
$customerList = [
    "1" => [
        "ten" => "Phan Văn Thiện",
        "ngaysinh" => "30-4-1996",
        "diachi" => "Hương Toàn",
        "ten" => "Phan Văn Thiện",
        "anh" => "/assets/img/me.JPG"

    ],
    "2" => [
        "ten" => "Phan Văn Thiện",
        "ngaysinh" => "30-4-1996",
        "diachi" => "Hương Toàn",
        "ten" => "Phan Văn Thiện",
        "anh" => "/assets/img/me.JPG"

    ],
    "3" => [
        "ten" => "Phan Văn Thiện",
        "ngaysinh" => "30-4-1996",
        "diachi" => "Hương Toàn",
        "ten" => "Phan Văn Thiện",
        "anh" => "/assets/img/me.JPG"

    ],
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 50%;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>

<body>
    <h1>Danh Sách Khách Hàng</h1>
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày Sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customerList as $key => $value) : ?>
            <tr>
                <td>
                    <?php echo $key ?>
                </td>
                <td>
                    <?php echo $value['ten'] ?>
                </td>

                <td>
                    <?php echo $value['ngaysinh'] ?>
                </td>

                <td>
                    <?php echo $value['diachi'] ?>

                </td>
                <td><img src="<?php echo $value['anh'] ?>" width="50" alt=""></td>
            </tr>
        <?php endforeach; ?>

    </tbody>


</body>

</html>