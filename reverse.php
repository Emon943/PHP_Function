<?php

$a = 123456;
$b = 0;
while ($a != 0)
{
$b = $b * 10 + $a % 10;
//below cast is essential to round remainder towards zero
$a = (int)($a/ 10); 
}
 
echo "Reverse number: $b";

?>


<?php
$str = "123456";
 
//Initialize first and last indexes
 
$first=0;
$last = strlen($str)-1;


 
   /* Swap the position of an element */
 
   while (($first <= $last))
   
   {
 
       $temp = $str[$first];
       $str[$first] = $str[$last];
       $str[$last] = $temp;
       //var_dump($str[$last]);
	   //var_dump($str[$first]);
       $first++;
       $last--;
   }
 
echo "Reverse string is ". $str;
 
?>
<?php
$str = "Motiur Rahman";
echo strrev($str);
?>
