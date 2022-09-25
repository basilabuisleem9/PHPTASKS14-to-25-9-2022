

<?php


//  Q number 1
echo '<br>';
echo 'Q number 1 ==> '.'<br>';
echo ucfirst('i love php'). '<br>';
echo lcfirst('I Love Php') . '<br>';
echo strtoupper('i love php') . '<br>';
echo strtolower('I LOVE  PHP') . '<br>';


//  Q number 2 
echo '<br>';
echo 'Q number 2 ==> '.'<br>';

echo trim(chunk_split ('0612212134213423', 2,':') ,':').'<br>';



//  Q number 3

echo '<br>';
echo 'Q number 3 ==> '.'<br>';

$word = "orange";
$mystring = "The quick brown fox jumps over the lazy dog";
 

if(strpos($mystring, $word) !== false){
    echo "Word Found!".'<br>';
} else{
    echo "Word Not Found!".'<br>';
}



//  Q number 4
echo '<br>';
echo 'Q number 4 ==> '.'<br>';


$email  = 'www.orange.com/index.php';

  $username = strstr($email, '/');
  

echo $username .'<br>';

//  Q number 5

echo '<br>';
echo 'Q number 5 ==> '.'<br>';
$email  = 'basel@gmail.com';

$username = strstr($email, '@', true);
  

echo $username.'<br>';

//  Q number 6
echo '<br>';
echo 'Q number 6 ==> '.'<br>';
$email  = 'basel@gmail.com';

$username = strstr($email, '.' , );
  

echo $username.'<br>';

//  Q number 7
echo '<br>';
echo 'Q number 7 ==> '.'<br>';
$str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
$shuffled =str_shuffle($str);
echo substr($shuffled ,0 ,8) .'<br>';


//  $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
//  $pass = array(); 
//  $combLen = strlen($comb) - 1; 
//  for ($i = 0; $i < 8; $i++) {
//      $n = rand(0, $combLen);
//      $pass[] = $comb[$n];
//  }
//  print(implode($pass)); 

//  Q number 8
echo '<br>';
echo 'Q number 8 ==> '.'<br>';

$stu = 'That new trainee is so genius';
echo str_replace('That' , 'the' ,$stu);
echo '<br>';


//  Q number 9
echo '<br>';
echo 'Q number 9 ==> '.'<br>';

$string1 = 'foobarbaz';
$string2 = 'foobarbiz';
$pos = strspn($string1 ^ $string2, "\0");




printf(
    'First difference at position %d: "%s" vs "%s"',
    $pos, $string1[$pos], $string2[$pos]
);



echo '<br>';
echo '<br>';

//  Q number 10


echo 'Q number 10 ==> '.'<br>';
$e = array(32, "Hello world!", 32.5, array("red", "green", "blue"));
echo var_dump($e) . "<br>";



//  Q number 11
echo '<br>';
echo 'Q number 11 ==> '.'<br>';

$str = 'b';
echo ++$str;

//  Q number 12
echo '<br>';

echo 'Q number 12 ==> '.'<br>';
$originalString="The brown fox";
$insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($originalString, $insert.' ', $insert_pos, 0);
echo $new_string."\n";
echo "<br>";

echo 'Q number 12 part 2'.'<br>';
$s=strstr($originalString, 'brown',true);
echo $s;
echo "<br>";



//  Q number 13
echo '<br>';
echo 'Q number 13 ==> '.'<br>';
echo trim("000000423423.240000000", "0") . "<br>";



//  Q number 14
echo '<br>';
echo 'Q number 14 ==> '.'<br>';
$var = 'the quick brown fox jumps over the lazy dog';
echo  str_replace('fox', '', $var);
echo '<br>';


//  Q number 15
echo '<br>';
echo 'Q number 15 ==> '.'<br>';
echo trim("the quick brown fox jumps over the lazy dog", "--") . "<br>";


//  Q number 16
echo '<br>';
echo 'Q number 16 ==> '.'<br>';
$string4 = "\'123+;#12";
$result = str_replace(array("#", "'", ";" ,'/' , '\\' ,':' , '+'), '', $string4);

echo $result ;
echo '<br>';




//  Q number 17
echo '<br>';
echo 'Q number 17 ==> '.'<br>';
$phrase = "the quick#brown#fox+jumps#over#the#lazy#dog";
$result4 = str_replace(array("#", "'", ";" ,'/' , '\\' ,':' , '+'), ' ', $phrase );
echo implode(' ', array_slice(str_word_count($result4, 2),0, 5));
echo '<br>';



//  Q number 18
echo '<br>';
echo 'Q number 18 ==> '.'<br>';
$string5 = "2,3423,3423.12";
$result2 = str_replace(',', '', $string5);
echo $result2 ; 
echo '<br>';



//  Q number 19
echo '<br>';
echo 'Q number 19 ==> '.'<br>';
foreach (range('A', 'Z') as $char) {
    echo $char . "\n";
}