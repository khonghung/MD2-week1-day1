<?php
function convert_number_to_words($num){
  $hyphen      = ' ';
  $conjunction = ' ';
  $one		 = 'mốt';
  $ten         = 'lẻ';

$number = array(
  0                   => 'zero',
  1                   => 'one',
  2                   => 'two',
  3                   => 'three',
  4                   => 'four',
  5                   => 'five',
  6                   => 'six',
  7                   => 'seven',
  8                   => 'eight',
  9                   => 'nine',
  10                  => 'ten',
  11                  => 'eleven',
  12                  => 'twelve',
  13                  => 'thirteen',
  14                  => 'fourteen',
  15                  => 'fifteen',
  16                  => 'sixteen',
  17                  => 'seventeen',
  18                  => 'eightteen',
  19                  => 'nineteen',
  20                  => 'twenty',
  30                  => ' thirty',
  40                  => 'fourty',
  50                  => 'fivety',
  60                  => 'sixty',
  70                  => 'seventy',
  80                  => 'eighty',
  90                  => 'ninety',
  100                 => 'hundred',
  1000                => 'thousand',
);



switch( 0 < $num && $num < 21 ){
     case $words = $number[$num]; 
     break;
};


     switch( 21 <= $num && $num <= 100 ){
      case $tens = ((int)($num / 10 )) * 10;
          $ones = ($num % 10);
          $words = $number[$tens];
          if ($ones) {
            $words .= strtolower($hyphen. ($ones ==1?:$number[$ones]));
         
  };
   break;
}
    switch( 100 <= $num && $num < 1000 ){
   case   $hundreds  = $num / 100;
         $remainder = $num % 100;
         $words = $number[$hundreds] . ' ' . $number[100];
     if ($remainder) {
       $words .= strtolower( $conjunction . ($remainder< 10? $hyphen:null) . convert_number_to_words($remainder) );
     };
   break;
  };
  return $words;  
}
?>

<?php

$num = 111;
$word = convert_number_to_words($num);
echo $word;
?>



