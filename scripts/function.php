<?php
function connectToDB(){
    $servername = "localhost";
    $username = "KP23";
    $password = "Kyuss879.";
    $dbname = "Takenlijst";

     //create connection
     $conn  = new mysqli($servername, $username, $password, $dbname);

     // Check connection
     if ($conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
     }
     return $conn;

}

function login(){
        $conn = connectToDB();
        $user = $_POST['username'];  
        $pwd = $_POST['pwd'];  

        $sql = "SELECT * FROM `gebruikers` WHERE Gebruikersnaam = '$user' AND Passwoord = '$pwd'";
        $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['logged_in'] = true;
        echo "<p>Login succesvol!</p>";
        header("refresh: 3; URL=");
    }

    $conn->close();
    }
?>