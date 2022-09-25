<h2>CALCULATOR</h2>
<form>
  

        Number One: <input type="text" name="numberone" placeholder="enter first number"><br>
        <select name="operator">
            <option> ADDITION</option>
            <option> SUBSTRACTION</option>
            <option> MULTIPLY</option>
            <option> DIVISION</option>
         </select><br>
         Number two: <input type="text" name="numbertwo" placeholder="enter 2nd number"><br>
        
        <button type="submit" value="calculate" name="submit" >calculate</button>
       
 </form>
 <p> the answer is : </p>
<?php
if (isset($_GET['submit'])) { 

    $resultone=$_GET['numberone'];
    $resulttwo=$_GET['numbertwo'];
    $operator=$_GET['operator'];
     switch ($operator){

   case "ADDITION":
    echo $resultone + $resulttwo;
    break;
    case "SUBSTRACTION":
     echo $resultone - $resulttwo;
     break;
    case "MULTIPLY":
    echo $resultone * $resulttwo;
    break;
    case "DIVISION":
     echo $resultone / $resulttwo;
    break;
     }

    }
echo "<br>";

echo " <br>";