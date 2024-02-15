<?php
$number1=2;
$number2=5;
$number3=10;

if($number1>= $number2&& $number1>=$number3)
    {
        print("the largest number is Number1, Value".$number1);
    }
    else if($number2>= $number1 && $number2>=$number3)
    {
        print("the largest number is Number2, Value".$number2);
    }
    else
    {
        print("the largest number is Number3, Value: ".$number3);
    }


?>