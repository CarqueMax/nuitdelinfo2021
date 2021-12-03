<?php

DEFINE ('DB_USER', 'admin');
DEFINE ('DB_PASSWORD', 'Zebidu56@');
DEFINE ('DB_HOST', '141.94.221.193');
DEFINE ('DB_NAME', 'website');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL ' .
        mysqli_connect_error());

?>