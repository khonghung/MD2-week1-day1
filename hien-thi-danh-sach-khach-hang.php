<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <table border="0">
        <tr>
            <caption>
                <h1>Danh sách khách hàng</h1>
            </caption>
        </tr>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>NgàySinh</th>
            <th>Địa chỉ</th>
            <th>Anh</th>
        </tr>

        <?php

        $cutomerlist = array(
            "1" => array("ten" => "Mai Văn Hoàn", "ngày sinh" => "1983-08-20", "dia chi" => "Hà Nội", "anh" => "images/anh1.jpg"),
            "2" => array("ten" => "Nguyễn Văn Nam", "ngày sinh" => "1983-08-20", "dia chi" => "Thanh Hóa", "anh" => "images/anh2.jpg"),
            "3" => array("ten" => "Lý Mạc Sầu", "ngày sinh" => "1983-08-21", "dia chi" => "Trung Quốc", "anh" => "images/anh3.jpg"),
            "4" => array("ten" => "Vy Nhất Phong", "ngày sinh" => "1983-07-21", "dia chi" => "Việt Nam", "anh" => "images/anh4.jpg"),
            "5" => array("ten" => "Nguyễn Văn Lâm", "ngày sinh" => "2001-08-06", "dia chi" => "Trâu Quỳ", "anh" => "images/anh5.jpg"),
        );
        ?>
        <?php
        foreach ($cutomerlist as $key => $values) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $values['ten'] . "</td>";
            echo "<td>" . $values['ngày sinh'] . "</td>";
            echo "<td>" . $values['dia chi'] . "</td>";
            echo "<td><image src ='" . $values['anh'] . "' width = '60px' height ='60px'/></td>";
            echo "</tr>";
        }
?>
    </table>
</body>

</html>