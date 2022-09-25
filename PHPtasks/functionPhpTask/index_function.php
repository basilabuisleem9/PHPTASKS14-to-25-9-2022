2
<?php

//  Q number 1
echo '<br>';
echo 'Q number 1 ==> '.'<br>';
function  check_prime($num){
  
$count=0;  
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$count++;  
}  
}  
if ($count<3)  
{  
echo "$num is a prime number." .'<br>';  
}
else
{
echo "$num is not a prime number." . '<br.'; 
}

}
check_prime(112);echo '<br>';




//  Q number 2
echo '<br>';
echo '<br>';

echo 'Q number 2 ==> '.'<br>';



function Reverse($str){
    echo strrev($str);
}
Reverse('basel');echo '<br>';




//  Q number 3
echo '<br>';
echo 'Q number 2 ==> '.'<br>';

function check_lower($text){

    if (strtolower($text)==$text){

    echo 'Your String is Ok';}
    else{
         echo 'Your String is not ok';
    };
}check_lower('Basel');echo '<br>';


//  Q number 4
echo '<br>';
echo 'Q number 4 ==> '.'<br>';

function swap($num_x , $num_y){

 echo 'before swap ==>' ;  echo '<br>';
 echo 'x = ' . $num_x   ;   echo '<br>';
 echo 'y = ' . $num_y   ;   echo '<br>';
$num_z = $num_x ;
$num_x = $num_y;

 echo 'After swap ==>' ;  echo '<br>';
  echo 'x = ' . $num_x   ;   echo '<br>';
 echo 'y = ' . $num_z  ;   echo '<br>';

}swap(1 , 2);echo '<br>';


//  Q number 6
echo '<br>';
echo 'Q number 6 ==> '.'<br>';


function armstrongCheck($number){

    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
     
    // if true then armstrong number
    if ($number == $sum)
        echo 'if true then armstrong number';

    else{
 
    echo 'not an armstrong number'; }  
} armstrongCheck(407);echo '<br>';



//  Q number 7
echo '<br>';
echo 'Q number 7  ==> '.'<br>';
function palindrome($string) {
$result = str_replace(array("#", "'", ";" ,'/' , '\\' ,':' , '+'), '', $string);


  if ($result == strrev($result)){
      echo'yes it is a palindrom' ;
  }
  else{
	   echo'no it is not a palindrom' ;
  }
}
palindrome('madam');



//  Q number 8
echo '<br>';
echo 'Q number 8 ==> '.'<br>';




function remove_duplicate($data){  print_r(array_unique($data));  }
remove_duplicate([4, 4, 4, 21, 21 ,46, 21, 29, 21, 18]);



// page number 2 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$






// Q number 1 
echo '<br>';
echo ' ****************** page number 2 ******************';
echo '<br>';
echo '<br>';
echo '<br>';
echo 'Q number 1==> '.'<br>';





function year_check($my_year){ 

if ($my_year % 4 == 0)

print("It is a leap year"); 

else print("It is not a leap year"); 
}
year_check("2012");

echo "<br>" ;






 //  Q number 2
echo '<br>';
echo 'Q number 2 ==> '.'<br>';



function calculateTemp($tem){

    if ($tem >= 20 ){
    echo 'it is summertime';
    }
    else{
    echo 'it is winertime';}

}calculateTemp(19);


 //  Q number 3
echo '<br>';
echo 'Q number 3 ==> '.'<br>';
function sumNumber($number_1 , $number_2){
    if ($number_1 == $number_2){

        $sum = ($number_1 + $number_2) * 3 ;
        echo $sum ;  
    }

    else{
       echo 'error';
    }
}sumNumber(2 , 2);


 //  Q number 4
echo '<br>';
echo 'Q number 4 ==> '.'<br>';

function chechKnumber($number_1 , $number_2){
    if (($number_1 +$number_2) == 30){

     echo 'True';
       
    }

    else{
       echo 'false';
    }
}chechKnumber(10 , 20);


 //  Q number 5
echo '<br>';
echo 'Q number 5 ==> '.'<br>';
function checkpositive ($number){
    if($number % 2 == 0 ){
      echo 'false';
    }
     else{
       echo 'True';
    }
}checkpositive (20);



 //  Q number 6
echo '<br>';
echo 'Q number 6 ==> '.'<br>';
function rangeValue($number){
    if (20 <= $number and $number <=50 ){
        echo'true';
    }
    else{
        echo'false';
    }
}rangeValue(50);



 //  Q number 7
echo '<br>';
echo 'Q number 7 ==> '.'<br>';
function numberBetween($num1,$num2,$num3){
    if($num1 > $num2 and $num1 > $num3){
        echo $num1 ;
    }
    elseif($num2 > $num1 and $num2 > $num3){
        echo $num2 ;
    }
    else{
         echo $num3 ;
    }
}numberBetween(9,10,7);



 //  Q number 8
echo '<br>';
echo 'Q number 8 ==> '.'<br>';

function calcElectriciy ($numberUnit){
    if ($numberUnit < 50){
        $jd = $numberUnit * 2.5 ;
        echo $jd ;
    }
    elseif (50 < $numberUnit and $numberUnit <150){
        $jd = (50*2.5) + (($numberUnit-50)*5) ;
         echo $jd ;
    }
    elseif (150 < $numberUnit and $numberUnit <250){
        $jd = (50*2.5) +(100*5) + (($numberUnit-150)*6.2);
         echo $jd ;
    }
    elseif ( 250 < $numberUnit ){
        $jd = (50*2.5) + (100*5) +  (100*6.2) +(($numberUnit-250)* 7.5) ;
         echo $jd ;
    }

}calcElectriciy (200);


//  Q number 9


echo '<br>';
echo 'Q number 9 ==> '.'<br>';



function numbers($number1 , $number2 , $oper){

    if ($oper == '+'){
        $num = $number1 + $number2;
        echo $num ;
    }
    elseif ($oper == '-'){
        $num = $number1 - $number2;
         echo $num;
    }
    elseif ($oper == '*' ){
        $num = $number1 * $number2;
         echo $num;
    }
    elseif($oper == '/'){
        $num = $number1 / $number2 ;
         echo $num;
    }

//   $num = $number1  $number2  $oper ; 
//   echo $num;
}numbers(10 , 6, "+" );





 //  Q number 10
echo '<br>';
echo 'Q number 10 ==> '.'<br>';

function ageval($age){
    if ($age >= 18 ){
        echo 'good';
    }
    elseif ($age < 18) {
    echo 'is no eligible to vote';
    }
    else{
        echo 'error';
    }
}ageval(18);

 //  Q number 11
echo '<br>';
echo 'Q number 11==> '.'<br>';

function IfpositiveNumber($number){
    if ($number < 0 ){
        echo "Negative" ;
    }
    else{
        echo 'positve';
    }
} IfpositiveNumber(-12);

 //  Q number 12
echo '<br>';
echo 'Q number 12==> '.'<br>';

function average($num1 , $num2 ,$num3 ,$num4 ,$num5 , $num6 , $num7 , $num8 , $num9){

$average = ($num1+$num2+$num3+$num4 +$num5 + $num6 + $num7 + $num8 + $num9)/ 9 ;
if($average < 60 ){
echo'f';
}
elseif($average >= 60 and $average < 70 ){
echo'D';
}
elseif($average >= 70 and  $average < 80 ){
echo'C';
}
elseif($average >= 80 and $average < 90 ){
echo'B';
}
elseif($average >= 90 and $average < 100 ){
echo'A';
}
else{
    echo'error';
}


}average(98 , 96 ,96, 99 ,95 ,94 ,90 ,82 ,92);









