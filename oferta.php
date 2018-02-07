<html>
    <head>
        <title>title</title>
        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
<?php
$conn = mysqli_connect('kamilpawleta.pl', 'pawletak', 'aIuPPm56', 'pawletak_db', '3306');
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}
mysqli_query($conn, 'SET NAMES \'utf8\'');
// TODO: insert your code here.


echo '<table class="table table-striped">';
echo '<tr>';
echo '<th class="thead-dark">id</th>';
echo '<th>Asortyment</th>';
echo '<th>Cena</th>';
echo '<th>Zdjęcie</th>';
echo '</tr>';
$result = mysqli_query($conn, 'SELECT id, Asortyment, Cena, `Zdjęcie` FROM Oferta');
while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['Asortyment'] . '</td>';
    echo '<td>' . $row['Cena'] . '</td>';
    $src = $row['Zdjęcie'];
    echo '<td><img src="'.$src.'" alt="kwiatek"/></td>';
    echo '</tr>';
}
mysqli_free_result($result);
echo '</table>';
mysqli_close($conn);

?>

    </body>
</html>

