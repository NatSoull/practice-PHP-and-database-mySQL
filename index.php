<!-- <?php

        // setcookie("good_food", "burger", time() + (86400 * 2), "/");
        // setcookie("good_drink", "bubble tea", time() + (86400 * 3), "/");
        // setcookie("good_dessert", "things with chocolate", time() + (86400 * 4), "/");

        // foreach ($_COOKIE as $key => $value) {
        //     echo "{$key} => {$value} <br>";
        // }

        // if (isset($_COOKIE["good_food"])) {
        //     echo "You may eat {$_COOKIE["good_food"]} !!!";
        // } else {
        //     echo "I don't know a good food";
        // }

        ?> -->


<!-- <?php
        // session_start();
        ?> -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>This is the Login Page</h1>
    <br>
    <a href="home.php">Go to the Home page</a>
    <br>

    <form action="index.php" method="post">
        Username : <br>
        <input type="text" name="username"> <br>
        Password: <br>
        <input type="password" name="password"> <br> <br>
        <input type="submit" name="login" value="login">
    </form>

</body>

</html> -->

<!-- <?php

        // $_SESSION["username"] = "Nat Soul";
        // $_SESSION["password"] = "12345";

        // echo $_SESSION["username"] . "<br>";
        // echo $_SESSION["password"] . "<br>";

        // if (isset($_POST["login"])) {
        //     if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        //         $_SESSION["username"] = $_POST["username"];
        //         $_SESSION["password"] = $_POST["password"];

        //         // echo $_SESSION["username"];
        //         // echo $_SESSION["password"];

        //         header("Location: home.php");
        //     }else{
        //         echo "Username or Password is Missing";
        //     }
        // }

        ?> -->





<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <input type="text" name="text">
            <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>

<?php
// foreach ($_SERVER as $key => $value) {
//     echo "{$key}  =>  {$value} <br>";
// }

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     echo "you submitted";
// }
?> -->




<!-- <?php
        // $password = "Mm77662234";
        // $hash = password_hash($password , PASSWORD_DEFAULT);

        // // echo $hash;

        // if(password_verify("Mm77662234" , $hash)){
        //     echo "you are Logged in";
        // }else{
        //     echo "incorrect password";
        // }
        ?> -->




<!-- <?php
        // include("database.php");
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html> -->




<!-- <?php
        // include("database.php");

        // $username = "Sheki";
        // $password = "uwu";
        // $hash = password_hash($password , PASSWORD_DEFAULT);

        // $sql = "INSERT INTO users (user , password) VALUES ('$username' , '$hash')";

        // try {
        //     mysqli_query($conn, $sql);
        //     echo "registered successfully";
        // } catch (mysqli_sql_exception) {
        //     echo "Could not register user";
        // };

        // mysqli_close($conn);
        ?> -->


<!-- <?php

        // include("database.php");

        // // $sql = "SELECT * FROM users WHERE id = 1";

        // $result = mysqli_query($conn, "SELECT * FROM users");

        // if (mysqli_num_rows($result) > 0) {
        //     while($row = mysqli_fetch_assoc($result)){
        //         echo $row["id"] . "<br>";
        //         echo $row["user"] . "<br>";
        //         echo $row["password"] . "<br>";
        //         echo $row["reg_date"] . "<br>";
        //     };
        // }else{
        //     echo "no user found";
        // };


        // mysqli_close($conn);

        ?> -->




<?php
include("database.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <h1>FACEBOOK</h1>
            <div>
                <label for="username">Username:</label>
                <br>
                <input type="text" name="username" id="username">
            </div>

            <div>
                <label for="password">Password:</label>
                <br>
                <input type="password" name="password" id="password">
            </div>
            <input type="submit" value="register" name="register">
        </form>
    </div>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($username)) {
        echo "Please enter Username";
    } elseif (empty($password)) {
        echo "Please enter password";
    }else{
        $hash = password_hash($password , PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (user , password) VALUES ('$username' , '$hash')";
        try{
            mysqli_query($conn , $sql);
            echo "you registered successfully!";
        }catch(mysqli_sql_exception){
            echo "That Username is already taken";
        }
        
    };
};

mysqli_close($conn);
?>