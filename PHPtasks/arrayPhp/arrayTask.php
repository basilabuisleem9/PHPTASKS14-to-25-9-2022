<?php

 //  Q number 1
echo '<br>';
echo 'Q number 1 ==> '.'<br>';


$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: 
    the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new 
    president and his first lady. - Richard M. Nixon"."\n";

echo '<br>';echo '<br>';
 //  Q number 2
echo '<br>';
echo 'Q number 2 ==> '.'<br>';

$color = array('white', 'green', 'red', 'blue', 'black');

for ($i = 0 ; $i < 5 ; $i++){
    echo "<li>$color[$i]</li>";  
}


echo '<br>';echo '<br>';

 //  Q number 3
echo '<br>';
echo 'Q number 3 ==> '.'<br>'; 

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
 "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
 "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

echo 'The capital of Netherlands is  '. $cities['Netherlands'].'<br>';
echo 'The capital of Denmark  is  '. $cities['Denmark'].'<br>';
echo 'The capital of Portugal is  '. $cities['Portugal'];

echo '<br>';echo '<br>';




 //  Q number 4
echo '<br>';
echo 'Q number 4 ==> '.'<br>'; 

$color = array (4 => 'white', 6 => 'green', 11=> 'red');
Echo reset($color);
echo '<br>';echo '<br>';




 //  Q number 5
echo '<br>';
echo 'Q number 5 ==> '.'<br>'; 

$number = array(1,2,3,4,5);
array_push($number , '$' );
print_r ($number);



// $original = array( '1','2','3','4','5' );
// echo 'Original array : '."\n";
// foreach ($original as $x) 
// {echo "$x ";}
// $inserted = '$';
// array_splice( $original, 3, 0, $inserted ); 
// echo " \n After inserting '$' the array is : "."\n";
// foreach ($original as $x) 
// {echo "$x ";}
// echo "\n"

echo '<br>';echo '<br>';

 //  Q number 6
echo '<br>';
echo 'Q number 6 ==> '.'<br>'; 
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

ksort ($fruits);
$keys = array_keys($fruits);
for($r=0 ; $r < 4 ; $r++ ){
echo $keys[$r].'='. $fruits[$keys[$r]] .'<br>';
}

echo '<br>';echo '<br>';  


 //  Q number 7
echo '<br>';
echo 'Q number 7 ==> '.'<br>'; 

// $a = array(78, 60, 62, 68, 71, 68, 73, 85,
//  66, 64, 76, 63, 75, 76, 73, 68,
//  62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
// echo 'A '.'<br>'; 
// $average = array_sum($a) / count($a) ;
// echo $average. '<br>';


// for ($s=0 ; $s < count($a) ; $s++ ){
// $b = array(78, 60, 62, 68, 71, 68, 73, 85,
//  66, 64, 76, 63, 75, 76, 73, 68,
//  62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
//     $low = max($b);
//     echo $low . '<br>'; 
//     unset($b[$low]);
//     print_r($b);

//     break ;
// }

$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}echo '<br>';

echo '<br>';echo '<br>';






 //  Q number 8
echo '<br>';
echo 'Q number 8 ==> '.'<br>';

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$array3 =array_merge ($array1 , $array2) ;
print_r ($array3);

echo '<br>';echo '<br>';

 //  Q number 9
echo '<br>';
echo 'Q number 9 ==> '.'<br>';

$color1 = array("red","blue", "white","yellow");
 
$j = 0;
 
foreach( $color1 as $element ) {
    $color1[$j] = strtoupper($element);
     
    $j++;
}
foreach( $color1 as $element )
    echo $element . "<br>";


echo '<br>';


  
 //  Q number 10
echo '<br>';
echo 'Q number 10 ==> '.'<br>';

$color2 = array("RED","BLUE", "WHITE","YELLOW");
 
$j = 0;
 

foreach( $color2 as $element2 ) {
    $color2[$j] = strtolower($element2);
     
    $j++;

}
foreach( $color2 as $element2 ){
    echo $element2 . "<br>";}
  
echo '<br>';


 //  Q number 11
echo '<br>';
echo 'Q number 11 ==> '.'<br>'; 
$newArray = array();
 

for ($m = 200 ; $m <250 ; $m++) {

    if($m % 4 == 0){
       array_push($newArray , $m ); 
    }
} 
print_r($newArray); 

echo '<br>';echo '<br>';


 //  Q number 12
echo '<br>';
echo 'Q number 12 ==> '.'<br>'; 




$words = array("qabcd","abqweqc","dee","hjjj","gqq","werqwe");

$new_words = array_map('strlen', $words);
print_r($new_words) .'<br>';
echo "The shortest array length is ". min($new_words) ."The longest array length is" . max($new_words);




echo '<br>';echo '<br>';

//   Q number 13
echo '<br>';
echo 'Q number 13 ==> '.'<br>'; 
// $randomArray = array();

// for($ran = 11 ;$ran <= 20 ;$ran++ ){
//     array_push($randomArray , $ran);
    
// }
// print_r(($randomArray));


// $numbers = range(11, 20);
// shuffle($numbers);
// print_r(shuffle($numbers));



$numbers = range(11, 20);
shuffle($numbers);
print_r(array_slice($numbers, 0));


//   Q number 14
echo '<br>';
echo 'Q number 14 ==> '.'<br>'; 


function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(-1,0,1,12,-100,1))."\n");











// //   Q number 15




echo '<br>';
echo 'Q number 15 ==> '.'<br>';
echo '<br>';echo '<br>';echo '<br>';


$words1 = array("qasc","aeftvlk" ,"dewewrewerwe","dsj","gq","wrqttwe","rehwe" ,'rehwerjhwfewer');


$len = 0;
$log = [];


$short = [];
$lenshort = (strlen($words1[0]));

for ($k= 0 ; $k <count($words1) ; $k++){
if( strlen($words1[$k]) > $len ) {
   $log = $words1[$k];
  $len = strlen($words1[$k]);
}


if (strlen($words1[$k] ) < $lenshort ){
    $short = $words1[$k];
    $lenshort = strlen($words1[$k]);
}   
}
echo $lenshort;
echo '<br>';
echo $short;
echo '<br>';
echo $len;
echo '<br>';
print_r( $log);







// echo "<br>";echo "<br>";


// $length = 0;
// $longest = [];
// $shorttest=[];
// $words =  array("abcd","abc","de","hjjj","g","wer");

// foreach ($words as $element) {
//     $currentLength = strlen($element);
//     if ($currentLength > $length) {
//         $longest = [$element];
//         $length = $currentLength;
//     } elseif ($currentLength == $length) {
//         $longest[] = $element;       
// }}


// print_r($longest);
// echo "<br>";















