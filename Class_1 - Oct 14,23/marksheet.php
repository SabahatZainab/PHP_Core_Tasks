<?php
// Obtained Marks Variables
$sindhi = 63;
$urdu = 61;
$engI = 43;
// $engI = 0;
$engII = 65;
$Islm = 66;
$ps = 58;
$phyt = 75;
$phyp = 15;
$chemt = 66;
$chemp = 15;
$math = 97;
$biot = 68;
$biop = 15;
$obt_Marks = 0;
$max_Marks = (int)850;
$percentage = 0.0;

if(($sindhi <= 75 && $sindhi > 25) && ($urdu <= 75 && $urdu > 25) && ($engI <= 75 && $engI > 25)
&& ($engII <= 75 && $engII > 25) && ($Islm <= 75 && $Islm > 25) && ($ps <= 75 && $ps > 25) && 
($phyt <= 85 && $phyt > 28 ) && ($phyp <= 15 && $phyp > 5 ) && ($chemt <= 85 && $chemt > 28 ) && 
($chemp <= 15 && $chemp > 5 ) && ($math <= 100 && $math > 33) && ($biot <= 85 && $biot > 28 )
 && ($biop <= 15 && $biop > 5 ))
{
    echo "RESULT  PASS<br>";
    $obt_Marks = (int)($sindhi+$urdu+$engI+$engII+$Islm+$ps+$phyt+$phyp+$chemt+$chemp+$math+$biot+$biop);
    if(!empty($obt_Marks) && !empty($max_Marks) && is_numeric($obt_Marks) && is_numeric($max_Marks))
    {
        $percentage = ((($obt_Marks)*100)/$max_Marks);
    }else{
        echo "Given Obtained Marks Is Not In A Correct Format!";
    }
    echo "PERCENTAGE  ";
    echo number_format($percentage,2);
    echo "%<br>";
    $percentage = (int)$percentage;
    
    if(!empty($percentage) && is_numeric($percentage))
    {
        if($percentage >= 70 || $percentage <= 80)
        {
            echo "GRADE  A";
        }else if($percentage >= 60 || $percentage <= 70)
        {
            echo "GRADE  B";
        }else if($percentage >= 50 || $percentage <= 60)
        {
            echo "GRADE  C";
        }else if($percentage >= 40 || $percentage <= 50)
        {
            echo "GRADE  D";
        }
    }else{
        echo "Calculate Percentage Is Not In A Correct Format!";
    }
    

}else{
    echo "RESULT FAILED<br>";
    if($sindhi < 25)
    {
        echo "You Failed In Sindhi Subject!";
    }else if($urdu < 25){
        echo "You Failed In Urdu Subject!";

    }else if($engI < 25){
        echo "You Failed In English-I Subject!";

    }else if($engII < 25){
        echo "You Failed In English-II Subject!";

    }else if( $Islm < 25){
        echo "You Failed In Islamiyat Subject!";

    }else if($ps < 25){
        echo "You Failed In Pakistan Studies Subject!";

    }else if($phyt < 28){
        echo "You Failed In Physics-Theory Subject!";

    }else if($phyp < 5){
        echo "You Failed In Physics-Practical Subject!";

    }else if($chemt < 28){
        echo "You Failed In Chemistry-Theory Subject!";

    }else if($math > 33){
        echo "You Failed In Mathematics Subject!";

    }else if($chemp < 5){
        echo "You Failed In Chemistry-Practical Subject!";

    }else if($biot < 28){
        echo "You Failed In Biology-Theory Subject!";

    }else if($biop < 5){
        echo "You Failed In Biology-Practical Subject!";

    }
}

?>