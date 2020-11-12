<?php
$n1=$_POST["n1"];
$n2=$_POST["n2"];

function soma ($n1 , $n2){
    return $n1 + $n2;
}
function subtraçao ($n1 , $n2){
    return $n1 + $n2;
}
function multiplicaçao ($n1 , $n2){
    return $n1 + $n2;
}
function divisao ($n1 , $n2){
    return $n1 + $n2;
}

echo "A soma é " .soma($n1,$n2);
echo"<br>";
echo "A subtraçao é " .subtraçao($n1,$n2);
echo"<br>";
echo "A multiplicaçao é" .multiplicaçao($n1,$n2);
echo"<br>";
echo "A divisao é" .divisao($n1,$n2);