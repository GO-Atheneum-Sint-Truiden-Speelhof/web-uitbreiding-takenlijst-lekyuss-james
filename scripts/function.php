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

function saveToDB(){
    $conn = connectToDB();
    $sql = "INSERT INTO `taken`(NaamMaker, NaamTaak, Beschrijving, Status, Deadline)
    VALUES ('".$_POST["makerN"]."','".$_POST["taakN"]."','".$_POST["beschrijving"]."','".$_POST["status"]."','".$_POST["deadline"]."');";

    if($conn->query($sql) === true){
        echo "New record created!";
        header("Refresh: 3; url=begin.php?page=start");
    }
    else{
        echo "ERROR: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function printDB(){
    $conn = connectToDB();
    $sql = "SELECT * FROM taken";
    
    $result = $conn->query($sql);
    while ($row = $result->fetch_row()){
        echo '<tr>';
        for ($i = 1; $i < count($row); $i++){
            echo "<td>";
            echo "$row[$i]";
            echo "</td>";
        }
        echo "<td><a href='begin.php?page=wijzig&id=".$row[0]."'><img src='images/potlood.png'></img></a>";
        echo "<td><a href='begin.php?page=start&id=".$row[0]."&actie=delete'><img src='images/vuilbak.png'></img></a>";
        echo "</tr>";
    }
}

function updateRow($array){
    $conn = connectToDB();
    $array["ID"];

    $sql = "UPDATE taken 
    SET NaamMaker = '".$_POST["UmakerN"]."', NaamTaak = '".$_POST["UtaakN"]."', Beschrijving = '".$_POST["Ubeschrijving"]."', Status = '".$_POST["Ustatus"]."', Deadline = '".$_POST["Udeadline"]."' WHERE ID = '".$array["ID"]."'";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    }

function fetchRow($id){
    $conn = connectToDB();
    $qry = "SELECT * FROM taken WHERE ID = '".$id."'";
    $result = $conn->query($qry);
    if($result->num_rows == 1){
        return $result->fetch_assoc();
    }
    return false;
}

function deleteRow($id){
    $conn = connectToDB();

    $sql = "DELETE FROM taken WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

function login(){
    $conn = connectToDB();
    $user = $_POST['username'];  
    $pwd = $_POST['pwd'];  

    $sql = "SELECT Passwoord FROM `gebruikers` WHERE Gebruikersnaam = '$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_row();
        $hash = $row[0];
        if(password_verify($pwd,$hash)){
            $_SESSION['logged_in'] = true;
            echo "<p>Login succesvol!</p>";
            header("refresh: 1.5; URL=begin.php");
        }
        else{
            echo "<p>Combinatie van Gebruikersnaam en paswoord is incorrect!</p>";
            header("refresh: 1.5; URL=begin.php?page=login");
        }
    }
    else{
        echo "<p>Combinatie van Gebruikersnaam en paswoord is incorrect!</p>";
    }

    $conn->close();
    }
?>