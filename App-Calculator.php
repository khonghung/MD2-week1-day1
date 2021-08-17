<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="First_Operand" placeholder="số thứ nhất"><br>
        <select name="Operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br>
        <input type="text" name="Second_Operand" placeholder="số thứ hai">
        <input type="submit" name="submit" value="Caculator">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $value1 = $_POST["First_Operand"];
        $value2 = $_POST["Second_Operand"];
        $option = $_POST["Operator"];

        if ($option == "+") {
            $result = $value1 + $value2;
            echo "kết quả : " . $result;
        }

        if ($option == "-") {
            $result = $value1 - $value2;
            echo "kết quả : " . $result;
        }

        if ($option == "*") {
            $result = $value1 * $value2;
            echo "kết quả : " . $result;
        }

        if ($option == "/") {
            $result = $value1 / $value2;
            echo "kết quả : " . $result;
        }
         if ($value2 == 0){
             echo "Error!!";
         }
    }
    ?>
</body>

</html>