<?php
echo "Calculator<br>";

$op1 = 2;
$op2 = 4;
$opt = " ";
switch($opt)
{
    case "+":
        echo "Addition  + : ";
        echo $op1+$op2;
        break;
    case "-":
        echo "Subtraction  - : ";
        echo $op1-$op2;
        break;
    case "*":
        echo "Multiplication  * : ";
        echo $op1*$op2;
        break;
    case "/":
        echo "Division  / : ";
        echo $op1/$op2;
        break;
    default:
        echo "No Operation Perform";
}


?>