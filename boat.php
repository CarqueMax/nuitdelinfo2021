<?php

echo '<a href="index.html">Accueil</a>';
echo '<a href="personnes.php">Personnes</a>';


require_once('mysqli_connect.php');

$query = "SELECT * FROM bateau";

$response = @mysqli_query($dbc, $query);

if($response){

    while($row = mysqli_fetch_assoc ($response)){


        $fname = $row['Nom'];
        $fimage = $row['urlImage'];
        $fdescription = $row['Description'];
        $fsource = $row['source'];

        echo "<h1>$fname</h1><br>";
        echo "<img src=$fimage><br>";
        echo "<p> $fdescription><br>$fsource</p>";

    }

} else {

    echo "Couldn't issue database query";
    echo mysqli_error($dbc);

}

mysqli_close($dbc);

?>