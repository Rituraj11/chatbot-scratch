<?php 

$host = "localhost";
$user = "root";
$password = "";
$db_name = "chatbot";

$conn = mysqli_connect($host,$user,$password,$db_name);

if(! $conn){
    echo "DB connection error ".mysqli_connect_error();
}else{

    $getMesg = mysqli_real_escape_string($conn, '%$getMesg%');

    // query
    $check_data = "SELECT reply FROM bot WHERE questions LIKE '%$getMesg%'";

    // query check
    $run_query = mysqli_query($conn, $check_data) ?? die("Error");

    if(mysqli_num_rows($run_query) > 0){

        $fetch_data = mysqli_fetch_assoc($run_query);

        $replay = $fetch_data['reply'];
        echo $replay;
    }
}

?>