<html>
    <head>
        <title>title</title>
    </head>
    <body>
<?php

$conn = mysqli_connect('kamilpawleta.pl', 'pawletak', 'aIuPPm56', 'pawletak_db?zeroDateTimeBehavior=convertToNull', '3306');
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}
mysqli_query($conn, 'SET NAMES \'utf8\'');
// TODO: insert your code here.
mysqli_close($conn);




?>

    </body>
</html>

