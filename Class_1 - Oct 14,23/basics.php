<?php
//Task 1 - Usage of Arithmetic Operator - Single And Operator
// $a = true;
// $b = false;
// $c = false;
// $d = false;

// if((($a && $d) == true) || (($a && $b) == true) || (($a && $c) == true) || (($b && $d) == true))
// {
//     echo " Task 1 - Working!<br>";
// }else{
//     echo "Task 1 - Not Working!<br>";
// }
 
//Task 2 - Usage of Arithmetic Operator - Double And Operator
// $a = true;
// $b = false;
// $c = false;
// $d = true;

// if((($a && $b && $c) == true) || (($a && $b && $d) == true) || (($b && $c && $d) == true) || (($a && $c && $d) == true))
// {
//     echo "Task 2 - Working!<br>";
// }else
// {
//     echo "Task 2 -Not Working!";
// }

//Task 3 - SIMPLE Calculator

// $op1 = 2;
// $op2 = 4;
// $opt = "+";
// function operations($op1,$op2,$opt)
// {
//     eval("echo $op1 $opt $op2;");
// }
// echo "  Arithemtic Operation : + ";
// echo operations(2,4,"+")."<br>";
// echo "  Arithemtic Operation : - ";
// echo operations(2,4,"-")."<br>";
// echo "  Arithemtic Operation : * ";
// echo operations(2,4,"*")."<br>";
// echo "  Arithemtic Operation : / ";
// echo operations(2,4,"/")."<br>";


$op1 = 2;
$op2 = 4;
$opt = "+";
if($opt == "+")
{
    echo ($op1+$op2);
}elseif($opt == "-")
{
    echo ($op1-opt2);
}elseif($opt == "*")
{
    echo ($op1*$op2);
}elseif($opt == "/")
{
    echo ($op1/$op2);
}
?>