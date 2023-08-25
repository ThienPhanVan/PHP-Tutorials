<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng Từ điển đơn giản</title>
</head>
<style>
    input[type=text] {
        width: 300px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 4px;
        padding: 12px 10px 12px 10px;
    }

    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>

<body>
    <h2>Từ Điển Anh - Việt</h2>

    <form method="POST">
        <input type="text" name="search" placeholder="Nhập từ điển cần tìm...">
        <input type="submit" value="Tìm">

    </form>
    <?php
    $dictionary = [
        "hello" => "xin chào",
        "how" => "thế nào",
        "book" => "quyển vở",
        "computer" => "máy tính",
        "pen" => "cây bút",
        "pencil" => "cây bút chì",
        "dictionary" => "từ điển",
    ];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $searchWord = $_POST['search'];
        $flag = 0;
        foreach ($dictionary as $word => $description) {
            if ($word == $searchWord) {
                $flag = 1;
                break;
            }
        }

        if ($flag == 0) {
            echo "Không tìm thấy từ khóa cần tìm!";
        } else {
            echo "Từ " . $word . " </br> Nghĩa của từ: " . $description;
        }
    }


    ?>
</body>

</html>