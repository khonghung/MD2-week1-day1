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
    <input type = "text" name ="InventMentAmount" placeholder = "lượng tiền đầu tư ban đầu tư"><br>
    <input type = "text" name ="YearlyInterestRate" placeholder="lãi suất năm"><br>
    <input type = "number" name ="numberofYear" placeholder="số năm đầu tư"><br>
    <input type = "submit" value ="Calculate">
    </form>


<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Money = $_POST["InventMentAmount"];
    $theYearExport = $_POST["YearlyInterestRate"];
    $numberYear = $_POST["numberofYear"];
    $futureValue = ($Money * $theYearExport)/100;
   
}
  echo $result = $Money + ($futureValue * $numberYear) ;
  
  ?> 
</body>
</html>


