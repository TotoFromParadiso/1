<!-- <?php
      //$name = "Sandro Mafiozi";
      //$food = "batonchiki";
      //$email = "traki@gmail.com";


      //$age = 18;
      //$users = 2;
      //$quantity = 5;


      //$gpa = 2.5;
      //$price = 4.99;
      //$tax_rate = 5.1;

      //$employed = true;
      //$online = false;
      //$for_sale = true;

      //$total = null;

      //echo "shen gamoidzaxe {$quantity} x {$food}<br>";
      //$total = $quantity * $price;
      //echo "sheni jamia: \${$total}";


      ?>  -->


<!-- <?php
      //basic math

      //$x = 10;
      //$y = 2;
      //$z = null;

      ///$z= $x + $y;
      ///$z= $x - $y;
      ///$z= $x * $y;
      ///$z= $x / $y;
      ///$z = $x ** $y;
      ///$z = $x % $y;
      ////echo $z;


      //increment/decrement

      //$counter = 0;
      //$counter = $counter +- 1;
      //$counter++;
      //$counter--;
      //$counter+=2;
      //$counter-=2;
      //echo $counter;


      //operator precedence
      // ()
      // ** 
      // * / %
      // + - 

      //$total = 1 + 2 - 3 * 4 / 5 ** 6;
      //echo $total;
      ?> -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="post">
    <label>username:</label><br>
    <input type="text" name="username"><br>
    <label>password:</label><br>
    <input type="password" name="password"><br>
    <button>Log in</button>
  </form>
</body>

</html>
<?php
    //echo "{$_POST ["username"]} <br>";
    //echo "{$_POST ["password"]} <br>";
?> -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>quantity: </label><br>
    <input type="text" name="quantity">
    <button>total</button>
  </form>
</body>
</html>

<?php
 //$item = "avocado";
 // $price = 5.99;
 // $quantity = $_POST["quantity"];
  //$total = null;

 // $total = $quantity * $price;

 // echo "You have orderd {$quantity} x {$item}/s <br>";
 // echo "Your total is: \${$total}";
?> -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <form action="index.php" method="post">
    <label>x:</label>
    <input type="text" name="x">
    <label>y:</label>
    <input type="text" name="y">
    <label>z:</label>
    <input type="text" name="z">
    <input type="submit" value="total">
   </form>
</body>
</html>

<?php
//$x = $_POST["x"];
//$y = $_POST["y"];
//$z = $_POST["z"];
//$total = null;

//$total = abs($x);
//$total = round($x);
//$total = floor($x);
//$total = ceil($x);
//$total = pow($x, $y);
//$total = sqrt($x);
//$total = max($x, $y, $z);
//$total = min($x, $y, $z);
//$total = pi();
//$total = rand();
//echo $total;
?> -->

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>radius:</label>
    <input type="text" name="radius">
    <input type="submit" value="calculate">
  </form><br>
</body>
</html>

<?php 
  //$radius = $_POST["radius"];
  //$circumference = null;
  //$area = null;
  //$volume = null;

  //$circumference = 2 * pi() * $radius;
  //$circumference = round($circumference, 2);

  //$area = pi() * pow($radius, 2);
  //$area = round($area, 2);

  //$volume = 4/3 * pi() * pow($radius, 3);
  //$volume = round($volume, 2);

  //echo " circumference = {$circumference}cm <br>";
  //echo "Area = {$area}cm^2 <br>";
  //echo "Volume = {$volume}cm^3 <br>"

?> -->


<!-- 
<?php
//if statemant

   //$age = 101;

   //if ($age >= 100) {
    //echo "dzaan didi xar bratux <br>";
   //}

   //elseif($age >= 18){
    //echo "mashin shegishveb dzmao chemo";
   //}

   //elseif($age <= 0) {
    //echo "ar xar sakmarisi wlovanebis";
   //}


   //elseif ($age >= 100) {
    //echo "dzaan didi xar bratux";
   //}

   //else{
    //echo "shen uech unda iyo 18+ rom shegishva";
   //}

   //$adult = true;

   //if($adult == true) {
    //echo "mashin shedi to <br>";
   //}

   //else{
    //echo "zrdasruli unda iyo to <br>";
   //}


   //$hours = 50;
   //$rate = 15;
   //$weekly_pay = null;

   //if($hours <= 0){
    //$weekly_pay = 0;
   //}
   //elseif ($hours <= 40){
    //$weekly_pay = $hours * $rate;
   //}
   //else{
    //$weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
   //}

   //echo "shen gaakete \${$weekly_pay} am kvirashi ";

?> -->

<!-- <?php
//Logical operators
// true თუ არის if-ია და თუ flase-ია მაშინ else-ია  
  //$temp = 15;
  //$cloudy = true;

  //if($temp < 0 || $temp > 30){
   // echo "siri amindia <br>";
  //}
  //else{
   // echo "sakaifo amindia <br>";
  //}

  //if($cloudy){
    //echo "grubliania <br>";
  //}
  //else{
    //echo"mziania <br>";
  //}

  //////////////////////////////

  //$age = 25;
  //$citizen = true;

  //if(!$age >= 18 || !$citizen){
   // echo "ar shegifzlia xmis micema <br>";
  //}

  //else{
    //echo "mashin mieci xma <br>";
  //}

  //////////////////////////////
  //$child = false;
  //$senior = false;
  //$ticket = null;

  //if($child || $senior){
    //$ticket = 10;

  //}

  //else{
    //$ticket = 15;
  //}

  //echo "bileti ghirs \${$ticket}";
?> -->

<!-- <?php
//switch statement, elseif statement.switch,break,case,default.

//$grade = "traki";

//switch($grade){
  //case "A":
    //echo "you did great";
    //break;
  //case "B":
    //echo "you did good";
    //break;
  //case "C":
    //echo "you did okay";
    //break;
  //case "D":
    //echo "you did poorly";
    //break;
  //case "F":
    //echo "you did failed";
    //break;
  //default:
   // echo "{$grade} is not vaild";
//}

//$date = date("l");


//switch($date){
  //case "Monday";
  //echo "i hate mondays";
  //break;
  //case "Thusday";
  //echo "i hate thusday";
  //break;
  //case "Wednesday";
  //echo "i hate wednesday";
  //break;
  //case "Thersday";
  //echo "i hate thersday";
  //break;
  //case "Friday";
  //echo "i hate friays";
  //break;
  //case "Saturday";
  //echo "i hate saturday";
  //break;
  //case "Sunday";
  //echo "i hate sunday";
  //break;
//default:
//echo "{$date} is not a day";

//}
?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action = "index.php" method = "post">
     <label>Enter a number to count down from:</label>
     <input type="text" name="counter">
     <input type="submit" value="start">
  </form>

</body>
</html> -->
<?php
//for loop.repet code. +=, -=.

  //for($i == 1;$i <= 10;$i+=2){
    //echo $i . "<br>";

//}

    // $counter = $_POST["counter"];

    //for ($i = $counter; $i > 0; $i--){
     //  echo $i . "<br>";
   // }


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="submit" name="stop" value="stop">
  </form>
</body>
</html>
<?php
//while loop

//$seconds = 0;
//$running = true;

//while($running){

  //if(isset($_POST["stop"])){
    //$running = false;
  //}
  //else{
    //$seconds++;
    //echo $seconds . "<br>";
  //}

//}
?> -->

<!-- <?php
//array
//$foods = array("vashli", "msxali", "fortoxali", "avokado", "penisi" );


//$foods[0] = "pineapple";
//array_push($foods, "pineapple", "kiwi");
//array_pop($foods);
//array_shift($foods);
//$reversed_foods =  array_reverse($foods);
//echo count($foods);


//foreach($foods as $food){
  //echo $food . "<br>";
//}
//echo $foods[0] . "<br>";
//echo $foods[1] . "<br>";
//echo $foods[2] . "<br>";
//echo $foods[3] . "<br>";
//echo $foods[4] . "<br>";



//$food_1 = "vashli";
//$food_2 = "msxali";
//$food_3 = "fortoxali";
//$food_4 = "avokado";
//$food_5 = "penisi";
?> -->

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>Endet a country</label>
    <input type="text" name="country">
    <input type="submit">

  </form>
</body>
</html>
 <?php 
//associate array



//$capitals["USA"] = "Las Vegas";   
//$capitals["China"] = "traki";
//array_pop($capitals);          ბოლოს შლის ანუ ინდოეთს
//array_shift($capitals);        პირველს შლის ანუ ამერიკას
//$keys = array_keys($capitals);
//$values = array_values($capitals);
//$capitals = array_flip($capitals);   აბრუნებს და წერს პირიქით
//$capitals = array_reverse($capitals); უცვლის ადგილებს, ბოლო ელემენტებს აყენებს პირველზე

//echo count($capitals);

//foreach($capitals as $key => $value){
  //echo"{$key} = {$value} <br>";
//}
//$capitals = array("USA"=>"Washington D.C",
                  //"Japan"=>"Kyoto",
                   //"India"=>"New Delhi");

//$capital = $capitals[$_POST["country"]];

//echo"The capital is {$capital}";
?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>username: </label>
    <input type="text" name="username"><br>
    <label>password: </label>
    <input type="password" name="password"><br>
    <input type="submit" name="Login" value="Log in">

  </form>
</body>
</html> -->
<?php
//isset()
//empty()

//$username = null;

//if(empty($username)){
//echo "this variable is empty";
//}
//else{
  //echo"this variable is not empty";
//}

/*
foreach($_POST as $key => $value){
  echo"{$key} = {$value} <br>";
}
*/
/*
if(isset($_POST["Login"])){
 
  $username = $_POST["username"];
  $password = $_POST["password"];

  if(empty($username)){
    echo"Username is missing";
  }
  elseif(empty($password)){
    echo"Password is missing";
  }
  else{
    echo"Hello {$usernamne}";
  }

}
*/
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="radio" name="credit-card" value="Visa">Visa<br>
    <input type="radio" name="credit-card" value="Mastercard">Mastercard<br>
    <input type="radio" name="credit-card" value="American Express">American Express<br>
    <input type="submit" name="confirm" value="confirm">
  </form>
</body>
</html> -->
<?php

 //if(isset($_POST["confirm"])){
 // $credit_card = null;

   //if(isset($_POST["credit_card"])){
     //$credit_card = $_POST["credit-card"];
     //echo $credit_card;
    //}

  //  if($credit_card == "Visa"){
  //   echo "you slected visa";
     
  //   }
  //  elseif($credit_card == "Mastercard"){
  //     echo "you slected Mastercard";
       
  //   }  
  //  elseif($credit_card == "American Express"){
  //       echo "you slected American Express";
         
  //   }
  //   else {
  //     echo"Please make a selection";
  //   }
    //switch($credit_card){
    //case "Visa":
      //echo "you selected Visa";
      //break;

    //case "Mastercard":
      //echo "you selected Mastercard";
      //break;

    //case "American Express":
      //echo "you selected American Express";
      //break;

    //default:
     // echo "Please make a selection";
        
   // }
    
 //}

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <form action="index.php" method="post">
    <input type="checkbox" name="foods[]" value="Pizza">Pizza <br>
    <input type="checkbox" name="foods[]" value="Hamburger">Hamburger <br>
    <input type="checkbox" name="foods[]" value="Taco">Taco <br>
    <input type="checkbox" name="foods[]" value="HotDog">HotDog <br>
    <input type="submit" name="submit">
   </form>
</body>
</html> -->
<?php
     //if (isset($_POST["submit"])) {

       //if(isset($_POST["pizza"])){
        //echo "You like pizza <br>";
       //}
       //if(isset($_POST["hamburger"])){
        //echo "You like hamburger <br>";
      // }
       //if(isset($_POST["taco"])){
        //echo "You like taco <br>";
       //}
       //if(isset($_POST["hotdog"])){
        //echo "You like hotdog <br>";
      // }
       //if(empty($_POST["pizza"])){
        //echo "You dont like pizza <br>";
       //}
       //if(empty($_POST["hamburger"])){
        //echo "You dont like hamburger <br>";
      /// }
       //if(empty($_POST["taco"])){
        //echo "You dont like taco <br>";
      // }
       //if(empty($_POST["hotdog"])){
        //echo "You dont like hotdog <br>";
      // }
     //}

     //if (isset($_POST["submit"])){
     // $foods = $_POST["foods"];
      
      //foreach($foods as $food){
     //   echo $food . "<br>";
     // }
     //}
?>

<?php
  //function happy_birthday($first_name, $age){
    //echo "Happy Birthday dear {$first_name}! <br>";
    //echo "Happy Birthday to you! <br>";
    //echo "Happy Birthday dear {$first_name}! <br>";
    //echo "You are {$age} years old! <br><br>";
  //}

  //happy_birthday("spongebob", 30);
  //happy_birthday("mgelo", 35);
  //happy_birthday("lomo", 45);

  //function is_even($number){
   // $result = $number % 2;
    //return $result;
  //}

  //echo is_even(10);

//function hypotenuse($a, $b){
  //$c = sqrt($a ** 2 + $b ** 2);
  //return $c;
//}
  //echo hypotenuse(3,4);
?>

<?php
   //$username = array("Mgeli", "var", "chemi");
   //$phone = "551-076-054";

   //$username = strtolower($username);
   //$username = strtoupper($username);
   //$username = trim($username);
   //$username = str_pad($username, 20, "0");
   //$phone = str_replace("-", "", $phone);
   //$username = strrev($username);
   //$username = str_shuffle($username);
   //$equals = strcmp($username, "Mgeli");
   //$count = strlen($phone);
   //$index= strpos($phone, "-");
   //$firstname = substr($username, 0, 3);
   //$lastname = substr($username, 4);
   //$fullname = explode(" ", $username);
   //$username = implode(" ", $username);

   //echo $username;



   //foreach($fullname as $name){
    //echo $name . "<br>";
   //}

 
?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    username:<br>
    <input type="text" name="username"><br>
    age:<br>
    <input type="text" name="age"><br>
    email:<br>
    <input type="text" name="email"><br>
    <input type="submit" name="login" value="login">
  </form>
</body>
</html> -->

<?php
  //if(isset($_POST["login"])){

    //$username = $_POST["username"];

    //$username = filter_input(INPUT_POST, "username",
      //                       FILTER_SANITIZE_SPECIAL_CHARS);

    //$age = filter_input(INPUT_POST, "age",
      //                  FILTER_SANITIZE_NUMBER_INT);                         
    //$email = filter_input(INPUT_POST, "email",
      //                    FILTER_SANITIZE_EMAIL);

    //echo "Your email is: {$email}";

    //$age = filter_input(INPUT_POST, "age",
      //                  FILTER_VALIDATE_INT);
    //$email = filter_input(INPUT_POST, "email",
       //                 FILTER_VALIDATE_EMAIL);
                        
                        
     //if(empty($email)){
      //echo"That email wasn't valid"; 
    // }
     
     //else{
      //echo"Your email is: {$email}";
    // }
  //}
?>


<?php
//include
   //include("header.html");
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  This is my Home Page<br>
  stuff about your home page can go here<br>
</body>
</html> -->

<?php
//include
   //include("footer.html");
?>


<?php
//cookie
   //setcookie("fav_food", "pizza", time() + (86400 * 2), "/" );
   //setcookie("fav_drink", "wyali", time() + (86400 * 3), "/" );
   //setcookie("fav_food", "pizza", time() -0, "/" );

   //foreach($_COOKIE as $key => $value){
    //echo"{$key} = {$value} <br>";
   //}

   //if(isset($_COOKIE["fav_food"])){
    //echo"BUY SOME {$_COOKIE["fav_food"]} !!!";
   //}

   //else{
    //echo"I don't know your favorite food";
  // }
?>

<?php
//session
   //session_start();
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    username:<br>
    <input type="text" name="username"><br>
    pasword:<br>
    <input type="text" name="password"><br>
    <input type="submit" name="login" value="login">
  </form>
</body>
</html> -->
<?php
//if(isset($_POST["login"])){

//  if(!empty($_POST["username"])&&
//     !empty($_POST["password"])){

     // $_SESSION["username"] = $_POST["username"];
   //   $_SESSION["password"] = $_POST["password"];

 //     header("Location: home.php");

      //echo $_SESSION["username"] . "<br>";
      //echo $_SESSION["password"] . "<br>";
   // }
    //else{
    //  echo"Missing username/password <br>";
  //  }
//}
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    username:<br>
    <input type="text" name="username"><br>
    <input type="submit"><br>

</body>
</html> -->
<?php 
    //server

    //foreach($_SERVER as $key => $value);{
    // echo"{$key} = {$value} <br>";
    //}


    //if($_SERVER["REQUEST_METHOD"] == "POST"){
      //echo "Hello";
    //}
    

?>

<?php
  //hashing
//$passaword = "mishosandro2005";

//$hash = password_hash($passaword, PASSWORD_DEFAULT);

//echo $hash;

//if(password_verify("mishosandro2005", $hash)){
 // echo"you are logged in";
//}

//else{
  //echo"incorrect password";
//}  
?>


<?php
//1. MySQLi Extension
//2. PDO (PHP Data objects)
//include("database.php");

//$username = "Patrick";
//$password = "rock3";
//$hash = password_hash($passaword, PASSWORD_DEFAULT);

// $sql = "INSERT INTO users (user, password)
//         VALUES ('$username', '$password')";
//try{
  //mysqli_query($conn, $sql);  
  //echo"usser is now registered";
//}                  
//catch(mysqli_sql_exception){
 // echo"could not register usser";

//}

//mysqli_close($conn);
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html> -->

<?php
 // include("database.php");

 // $sql = "SELECT * FROM users";
 // $result = mysqli_query($conn, $sql);

  //if(mysqli_num_rows($result) > 0){
    //while($row = mysqli_fetch_assoc($result)){
     // echo $row["id"] . "<br>";
    //  echo $row["user"] . "<br>";
  //    echo $row["reg_date"] . "<br>";
//    }


 // }
  //else{
   // echo"no user found";
  //}

  //mysqli_close($conn);

?>
