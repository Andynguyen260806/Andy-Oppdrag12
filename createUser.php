<?php
session_start();
include "db_connect.php";

if(isset($_POST['Brukernavn']) && isset($_POST['Epost']) && isset($_POST['Passord'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Validate and retrieve form inputs
    $brukernavn = validate($_POST['Brukernavn']);
    $epost = validate($_POST['Epost']);
    $passord = validate($_POST['Passord']);

    // Check if any field is empty
    if(empty($brukernavn) || empty($epost) || empty($passord)) {
        header("Location: createUser.php?error=All fields are required!");
        exit();
    }

    // Insert user data into the database
    $sql = "INSERT INTO Users (Brukernavn, Epost, Passord) VALUES ('$brukernavn', '$epost', '$passord')";

    // Execute SQL query
    if(mysqli_query($conn, $sql)) {
        header("Location: index.php");
 
                }      
 
           
 
        }
     
?>
 
<!DOCTYPE html>
<html>
<head>
 
</head>
<body>
    <form method="post">
        <h2>Opprett bruker:</h2>
        <label>Bruker: </label>
    <input type="text" name="Brukernavn" placeholder="Brukernavn"><br/>
        <label>Epost: </label>
    <input type="text" name="Epost" placeholder="Epost"><br/>
        <label>Passord: </label>
    <input type="password" name="Passord" placeholder="Passord"><br/>
    <input type="submit">
    </form>
   
</body>
</html>
 
 
 