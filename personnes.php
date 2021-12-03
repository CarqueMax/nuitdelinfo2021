<?php

echo '<a href="index.html">Accueil</a>';
echo '<a href="boat.php">Bateaux</a>';


require_once('mysqli_connect.php');

$query = "SELECT * FROM personne";

$response = @mysqli_query($dbc, $query);

if($response){

    while($row = mysqli_fetch_assoc ($response)){


        $fnom = $row['Nom'];
        $fprenom = $row['Prenom'];
        $fimage = $row['UrlPortrait'];
        $frole = $row['Role'];
        $fdescription = $row['Description'];

        echo "<h1>$fnom $fprenom</h1>";
        echo "<h2>$frole</h2>";
        echo "<img src=$fimage><br>";
        echo "<p>$fdescription></p>";

    }

} else {

    echo "Couldn't issue database query";
    echo mysqli_error($dbc);

}

mysqli_close($dbc);

?>