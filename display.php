<?php
 if( $_SERVER["REQUEST_METHOD"] == "POST"){
    $moTa = $_POST["Product_Description"];
    $giaNiemyYet = $_POST["List_Price"];
    $tyLeChietKhau = $_POST["Discount_Percent"];
    $Discount_Amount = ($giaNiemyYet * ($tyLeChietKhau/100));
    $Discount_Price = ($giaNiemyYet - $Discount_Amount );
} 
   echo " mô tả sản phẩm : $moTa";
   echo "<br>";
   echo " giá niêm yết sản phẩm : $giaNiemyYet";
   echo "<br>";
   echo " tỷ lệ chiết khấu % : $tyLeChietKhau";
   echo "<br>";
   echo " lượng chiết khấu : $Discount_Amount"; 
   echo "<br>";
   echo " giá sau khi đã được chiết khấu : $Discount_Price";

?>
