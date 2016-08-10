<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "loto";

// Create connection
        $conn = new mysqli($servername, $username, $password, $database);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully<br><br>";

        $sql = "SELECT * FROM tah1";
        $result = $conn->query($sql);
        
        echo 'PRVÝ ŤAH: <br><br>';

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                
                echo "Dátum: " . $row["datum"] . "<br> Čísla: " . 
                        $row["cislo1"] . " - " . 
                        $row["cislo2"] . " - " . 
                        $row["cislo3"] . " - " . 
                        $row["cislo4"] . " - " . 
                        $row["cislo5"] . " - " . 
                        $row["cislo6"] . " - " . 
                        $row["cislo7"] . "<br><br>";
                
            }
        } else {
            echo "0 results";
        }
        
        $sql = "SELECT * FROM tah2";
        $result = $conn->query($sql);
        
        echo 'DRUHÝ ŤAH: <br><br>';

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                
                echo "Dátum: " . $row["datum"] . "<br> Čísla: " . 
                        $row["cislo1"] . " - " . 
                        $row["cislo2"] . " - " . 
                        $row["cislo3"] . " - " . 
                        $row["cislo4"] . " - " . 
                        $row["cislo5"] . " - " . 
                        $row["cislo6"] . " - " . 
                        $row["cislo7"] . "<br><br>";
                
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </body>
</html>
