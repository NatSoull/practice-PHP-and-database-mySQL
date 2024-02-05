<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "businessdb";
$conn = "";

try{
    $conn = mysqli_connect($db_server , $db_user , $db_pass , $db_name);
}catch(mysqli_sql_exception){
    echo "you aren't connected <br>";
};



// if($conn){
//     echo "you're connected <br>";
// }else{
//     echo "you aren't connected <br>";
// };