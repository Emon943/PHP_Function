
<?php
$a="5";
$b="15";
function pen($n,$p,$t=5){
 $s=($p+$n)/$t;
 //echo $s;
 return $s;
}
 echo pen($a,$b);
?>
<br/>
<?php
class color{
	function green($fruit){
		echo "This is a green color"." ".$fruit."<br/>";
	}
	function red($fruit){
		echo "This is a red color"." ".$fruit."<br/>";
	}
	function blue($fruit){
		echo "This is a blue color"." ".$fruit;
	}
}
$colors=new color();
$colors->green('Mango');
$colors->red('Apple');
$colors->blue('Banana');
?>

