<!-- <?php
        echo "<h1>We are delivering Pizza</h1>";
        echo "We love to cook";

        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>Order Pizza</button>
</body>
</html>
 -->




<!-- <?php
        $name = "Min Thut Khant";
        $favoriteFood = "Pizza";

        // echo $name;
        echo "Hi I'm {$name} <br>";
        echo "I like {$favoriteFood}";
        ?> -->



<!-- <?php
        // $x = 10;
        // $y = 5;
        // $z = null;

        // $z = $x / $y;
        // $z = $x + $y;
        // $z = $x ** $y;
        // $z = $x % $y;

        // echo$z;


        $i = 10;
        // $i++;
        // $i--;

        // $i += 10;
        $i -= 5;

        echo $i;
        ?> -->



<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post">
        <label for="">Username:</label>
        <br>
        <input type="text" name="username">
        <br>

        <label for="">Password:</label>
        <br>
        <input type="password" name="password"><br>

        <input type="submit" value="Login">
    </form>

</body>

</html>

<?php
echo "{$_POST['username']} <br>";
echo "{$_POST['password']} <br>";
?> -->



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label for="">Order Pizza</label>
        <br>
        <label for="">1 = $5</label>
        <br>
        <input type="text" name="quantity" placeholder="Quantity" value="1">
        <input type="submit" value="Order">
    </form>

</body>
</html>


<?php
$pizzaQuantities = $_POST["quantity"];
$pizzaPrice = 5;
$totalCost = $pizzaQuantities * $pizzaPrice;

echo "You ordered {$pizzaQuantities} Pizza <br>";
echo "Total cost is \${$totalCost}";
?> -->




<!-- <?php
        $total = 4.5;

        // $total = abs($total);
        // $total = round($total);
        // $total = pi();
        $total = rand(1, 2);



        echo $total
        ?> -->




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label for="">radius:</label>
        <br>
        <input type="text" name="radius">
        <br><br>
        <input type="submit" value="Calculate">
    </form>

</body>
</html>

<?php
$radius = $_POST["radius"];
$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 3);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = 4 / 3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "Circumference = {$circumference}cm <br>";
echo "Area = {$area}cm^2 <br>";
echo "Volume = {$volume}cm^3";
?> -->




<!-- <?php
        $age = null;

        if ($age) {
            echo "You can enter this page";
        } elseif ($age == 0) {
            echo "You were just born";
        } else {
            echo "You're not old enough";
        }

        ?> -->




<!-- <?php
        $hours = 40;
        $rate = 15;
        $weekly_pay = null;

        if ($hours <= 0) {
            $weekly_pay = 0;
        } elseif ($hours <= 40) {
            $weekly_pay = $hours * $rate;
        } else {
            $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
        }

        echo "You made \${$weekly_pay} this week"

        ?> -->




<!-- <?php
        $age = 18;
        $citizen = true;

        if ($age >= 18 && $citizen) {
            echo "You can vote";
        } else {
            echo "You cannot vote";
        }
        ?> -->



<!-- <?php
        $child = false;
        $senior = true;
        $ticket = null;

        if ($child || $senior) {
            $ticket = 10;
        } else {
            $ticket = 15;
        }

        echo "The ticket price is \${$ticket}"
        ?> -->



<?php

// $grade = "F";

// switch ($grade) {
//     case "A":
//         echo "You did great!";
//         break;
//     case "B":
//         echo "You did good";
//         break;
//     case "C":
//         echo "You did Ok";
//         break;
//     case "D":
//         echo "You did poorly";
//         break;
//     case "F":
//         echo "You Failed";
//         break;
//     default:
//         echo "{$grade} is invalided";
//         break;
// }

// 
?>




<!-- <?php
        $date = date("l");

        echo $date;
        ?> -->




<!-- <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "{$i} <br>";
        }
        ?> -->



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label for="">Enter a number to count down from :</label>
        <br>
        <input type="text" name="counter">
        <br>
        <input type="submit" value="Start">
    </form>

</body>
</html>

<?php
$counter = $_POST["counter"];

for ($i = $counter; $i > 0; $i--) {
    echo "{$i} <br>";
}
?> -->



<!-- <?php
        // $foods = ["apple" , "orange" , "banana"];
        $foods = array("apple", "orange", "banana", "coconut");

        // $foods[0] = "pineapple";
        // array_push($foods, "kiwi", "pineapple");
        // array_pop($foods);
        // array_shift($foods);
        // $foods = array_reverse($foods);

        foreach ($foods as $food) {
            echo $food . "<br>";
        }

        echo count($foods);
        ?> -->




<!-- <?php
        $capitals = array(
            "USA" => "Washington D.C.",
            "Japan" => "Tokyo",
            "South Korea" => "Seoul",
            "India" => "New Delhi"
        );

        // $capitals["USA"] = "Las Vegas";
        // $capitals["China"] = "Beijing";
        // array_pop($capitals);
        // array_shift($capitals);

        $keys = array_keys($capitals);
        $values = array_values($capitals);

        // $capitals = array_flip($capitals);
        $capitals = array_reverse($capitals);

        echo count($capitals);

        foreach ($capitals as $key => $value) {
            echo "{$key} = {$value} <br>";
        }
        ?> -->






<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="">Enter the country</label>
        <br>
        <input type="text" name="country">
        <br>
        <input type="submit">
    </form>
</body>

</html>

<?php

$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "South Korea" => "Seoul",
    "India" => "New Delhi"
);

$country = $_POST["country"];

// foreach($capitals as $key => $value){
//     if($key == $country){
//         echo $value;
//     }
// }

$capital = $capitals[$country];

echo $capital

?> -->



<!-- <?php

        $condition = "";

        if ($condition) {
            echo "true";
        } else {
            echo "false";
        }

        ?> -->



<!-- <?php
        $variable = "hi";

        if (isset($variable)) {
            echo "It's set";
        }

        echo isset($variable);
        ?> -->





<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label for="">Username : </label>
        <br>
        <input type="text" name="username">
        <br>
        <label for="">Password : </label>
        <br>
        <input type="password" name="password">
        <br><br><br>
        <input type="submit" name="login" value="Log in">
    </form>

</body>
</html>

<?php
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // if($username && $password){
    //     echo "you logined";
    // }else{
    //     echo "Username or Password is missing";
    // }

    if (empty($username)) {
        echo "Username is Missing";
    } elseif (empty($password)) {
        echo "Password is Missing";
    } else {
        echo "you login successfully";
    }
}
?> -->





<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post">
        <input type="radio" name="credit_card" id="visa" value="visa">
        <label for="visa">Credit Card</label>
        <br><br>
        <input type="radio" name="credit_card" value="mastercard" id="mastercard">
        <label for="mastercard">MasterCard</label>
        <br><br>
        <input type="radio" name="credit_card" value="american_express" id="american-express">
        <label for="american-express">American Express</label>
        <br><br>
        <input type="submit" name="confirm" value="confirm">
        <br><br><br>
    </form>

</body>

</html>


<?php

if (isset($_POST["confirm"])) {
    if (isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"];

        if ($credit_card == "visa") {
            echo "You selected VISA for Payment";
        } elseif ($credit_card == "mastercard") {
            echo "You selected MasterCard for Payment";
        } else {
            echo "You selected American Express for Payment";
        }
    } else {
        echo "Please select one of the Payments before Confirm";
    }
}

?> -->





<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post">
        <input type="checkbox" name="foods[pizza]" value="pizza" id="pizza">
        <label for="pizza">Pizza</label>
        <br><br>
        <input type="checkbox" name="foods[burger]" value="burger" id="burger">
        <label for="burger">Burger</label>
        <br><br>
        <input type="checkbox" name="foods[hotdog]" value="hotdog" id="hotdog">
        <label for="hotdog">HotDog</label>
        <br><br>
        <input type="checkbox" name="foods[taco]" value="taco" id="taco">
        <label for="taco">Taco</label>
        <br><br>
        <input type="submit" name="confirm" value="confirm">
    </form>

</body>

</html>


<?php
if (isset($_POST["foods"])) {
    $foods = $_POST["foods"];

    foreach ($foods as $key => $value) {
        echo "key {$key} , value {$value} <br>";
    }
}
?> -->




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="text">
        <input type="submit">
    </form>
</body>
</html>

<?php
$text = $_POST["text"];

echo $text;
?> -->




<!-- <?php

        function is_even($a)
        {
            $a = $a % 2;
            if ($a == 1) {
                return "false";
            }
            return "true";
        }

        echo is_even(16)

        ?> -->





<!-- <?php

        $username = "Pro Min Lay";
        $array_username = ["pro", "min", "lay"];
        $phone = "959-770-522-607";

        // $username = strtolower($username);
        // $username = strtoupper($username);
        // $username = trim($username);
        // $username = str_pad($username , 20 , "/");
        // $username = str_replace("-" , "" , $phone);
        // $username = strrev($username);
        // $username = str_shuffle($username);
        // $equals = strcmp($username , "Pro Min Lay");
        // $count = strlen($username);
        // $index = strpos($username , " ");
        // $index = strpos($phone , "-");
        // $first_name = substr($username , 4 , 4);
        // $last_name = substr($username , 8);

        // $full_name = explode(" " , $username);

        $to_str_username = implode(" ", $array_username);

        // echo $username;
        // echo $equals;
        // echo $count;
        // echo $index;
        // echo $first_name;
        // echo $last_name;

        // foreach($full_name as $name){
        //     echo $name . "<br>";
        // }

        echo $to_str_username;

        ?> -->




<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post">
        <label for="username">Username :</label>
        <br>
        <input type="text" name="username" id="username">
        <br>
        <label for="age">Age :</label>
        <br>
        <input type="text" name="age" id="age">
        <br>
        <label for="email">Email :</label>
        <br>
        <input type="email" name="email" id="email">
        <br><br>
        <input type="submit" name="confirm" value="confirm">
    </form>

</body>

</html>

<?php

if (isset($_POST["confirm"])) {
    // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    // $email = filter_input(INPUT_POST , "email" , FILTER_SANITIZE_EMAIL);


    // echo $username;
    // echo $age;
    // echo $email;


    // $age = filter_input(INPUT_POST , "age" , FILTER_VALIDATE_INT);

    // if(empty($age)){
    //     echo "That numbers is invalidate";
    // }else{
    //     echo $age;
    // }

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if (empty($email)) {
        echo "That email is invalidate";
    } else {
        echo $email;
    }
}

?> -->



<!-- <?php
        include("header.html");
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the Home page <br>
    Stuff about your Home page can go here <br>
</body>
</html>

<?php
include("footer.html");
?> -->





