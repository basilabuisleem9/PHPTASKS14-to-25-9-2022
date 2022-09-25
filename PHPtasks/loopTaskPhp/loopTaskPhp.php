<?php
 //  Q number 1
echo '<br>';
echo 'Q number 1 ==> '.'<br>';

for ($i= 1 ; $i <= 10 ; $i++){ 

    

    if($i == 10){
        echo $i;
    }
    else{
        echo $i."-";
    }
    
}echo '<br>';

//  Q number 2
echo '<br>';
echo 'Q number 2 ==> '.'<br>';
$sum = 0;
for($n= 0 ; $n <=30 ; $n++){
    
    // $sum+=$n;
    $sum = $sum +$n;
   
}echo $sum;
echo '<br>';




//  Q number 3
echo '<br>';
echo 'Q number 3 ==> '.'<br>';

$cha = 'A';
for ($m = 0 ;$m <5 ;$m++){

    for($z =0; $z < 5;$z++){
        
         echo $cha.' &nbsp;&nbsp;';
    }
   ++$cha ;
    echo'<br>';
}


//  Q number 4
echo '<br>';
echo 'Q number 4 ==> '.'<br>';
$c = 1;
for ($j = 0;$j<5 ;$j++){
    for($xx =0; $xx < 5 ;$xx++){

         echo $c.'&nbsp; &nbsp;';

    }
    $c+=1;
    echo '<br>';
}



//  Q number 5
echo '<br>';
echo 'Q number 5 ==> '.'<br>';

for ($i = 1; $i <= 5; $i++) {
    for ($x = 1; $x<= 5; $x++) {
        if ($i == $x){
            echo " " . $i . " ";
        } else {
            echo " 0 ";
        }
    }
    echo "<br>";
}


// $c = 1;
// for ($j = 0;$j<5 ;$j++){
//     for($xx =0; $xx < 5 ;$xx++){
//         //  echo '0 &nbsp; &nbsp;';
//          if($xx == 0){
//             echo ' 1  0  0  0  0';   echo '<br>';
//          }
//          elseif($xx == 1){
//             echo '0  2  0  0  0';   echo '<br>';
//          }
//          elseif($xx == 2){
//             echo ' 0  0  3  0  0';   echo '<br>';
//          }
//          elseif($xx == 3){
//             echo ' 0  0  0  4  0';   echo '<br>';
//          }
//          elseif($xx == 4){
//             echo ' 0  0  0  0  5';   echo '<br>';
//          }

//     }
//     // $c+=1;
//     // echo '<br>';
// // }







//  Q number 6
echo '<br>';
echo 'Q number 6 ==> '.'<br>';
$num = 5;  
$factorial = 1;  
for ($x = $num; $x >=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo $factorial;
echo'<br>';  




//  Q number 7
echo '<br>';
echo 'Q number 7 ==> '.'<br>';

$number1=0;
$number2=1;
$count=14;
echo $number1 . "," . $number2 ."," ;

for($t=0; $t <=$count ;$t++){

$number3=$number1+$number2;
$number1=$number2;//112
$number2=$number3;//123

echo $number3 , "," ;


}


//  Q number 8
echo '<br>';
echo 'Q number 8 ==> '.'<br>';
$string = "Orange Coding Academy";
$cou = 0 ;
$array = str_split($string, 1);
for($b = 0 ; $b < count($array) ; $b++){
    if ($array[$b] == 'c' or $array[$b] == 'C' ){
        $cou+=1 ;
    }
}echo $cou ;
echo '<br>';





//  Q number 9
echo '<br>';
echo 'Q number 9 ==> '.'<br>';

echo "<table border =\"3\" style =' border-collapse: collapse'>";

for ($i=1 ; $i<=6 ; $i++){
echo "<tr>";
for($j=1 ; $j<=5 ; $j++){

    echo "<td>   $i*$j = "  .$i*$j. "</td>";
}
echo "</tr>";
}

echo '<br>';
echo '<br>';

echo"</table>";


//  Q number 10
echo '<br>';
echo 'Q number 10 ==> '.'<br>';


for ($i=1 ; $i <= 50 ; $i++){
if ($i%3==0 & $i%5==0){
    echo " FizzBuzz"."  " ;
}

elseif($i %3==0){

    echo "Fizz"."  " ;
}
elseif($i%5==0){
    echo "Buzz" ."  " ;
} 
else {
    echo $i."  " ;
}


}
echo "<br>";




//  Q number 11
echo '<br>';
echo 'Q number 11 ==> '.'<br>';


$number4 = 1; 
for ($o= 1; $o <=5 ;$o++){
    for($l = 0 ; $l < $o ; $l++){
        echo '&nbsp;'.$number4;
        $number4 +=1 ;
    }
    echo "<br>";
}











//  Q number 12
echo '<br>';
echo 'Q number 12 ==> '.'<br>';


for ($v=1 ; $v <=5 ;$v++){
    for($x = 1 ; $x <= (5-$v)  ; $x++){ 
        echo '&nbsp; &nbsp;';
    }
    for($y =1 ; $y <=(2*$v-1); $y++){ 
        // $char ="A";
        // $char+=$y
        // echo ++$char;
        //  $str = 'a';
        // echo ++$str;
         echo chr(65 + $y - 1)." ";
     }
    echo "<br>";
}

for ($v=4 ; $v >=0 ;$v--){
    for($x = 1 ; $x <=(5-$v) ; $x++){
        echo '&nbsp; &nbsp;';
    }
    for($y =1 ; $y <=(2*$v-1); $y++){
        // $str = 'a';
        // echo ++$str;
        // echo ++$char;
        //  $char ="A";
        // $char+=$y
        // echo ++$char;
         echo chr(65 + $y- 1)." ";
         }
    echo "<br>";
}









