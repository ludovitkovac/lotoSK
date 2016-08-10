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
        $sum = 0;
        for ($i = 1; $i < 50; $i++) {

            $sql1 = "SELECT COUNT(id) AS pocet FROM `tah1` WHERE cislo1=$i OR cislo2=$i OR cislo3=$i OR cislo4=$i OR cislo5=$i OR cislo6=$i OR cislo7=$i";

            $result1 = $conn->query($sql1);

            if ($result1->num_rows > 0) {
                // output data of each row
                while ($row = $result1->fetch_assoc()) {

                    $tah1 = $row["pocet"];
                    $sum += $tah1;
                }
            }

            $sql2 = "SELECT COUNT(id) AS pocet FROM `tah2` WHERE cislo1=$i OR cislo2=$i OR cislo3=$i OR cislo4=$i OR cislo5=$i OR cislo6=$i OR cislo7=$i";
            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0) {
                // output data of each row
                while ($row = $result2->fetch_assoc()) {

                    $tah2 = $row["pocet"];
                    $sum += $tah2;
                }
            }

            echo "Počet vyžrebovaní čísla " . $i . " je " . ($tah1 + $tah2) . "<br>";
        }

        echo "<br>Počet všetkých vyžrebovaných čísel je " . $sum;

        $conn->close();
        ?>
    </body>
</html>
