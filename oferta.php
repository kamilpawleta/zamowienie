<html>
    <head>
        <title>title</title>
    </head>
    <body>
<?php
$conn = mysqli_connect('kamilpawleta.pl', 'pawletak', 'aIuPPm56', 'pawletak_db', '3306');
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}
mysqli_query($conn, 'SET NAMES \'utf8\'');
// TODO: insert your code here.


echo '<table>';
echo '<tr>';
echo '<th>id</th>';
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
    echo '<td>' . $row['Zdjęcie'] . '</td>';
    echo '</tr>';
}
mysqli_free_result($result);
echo '</table>';
mysqli_close($conn);

?>

    </body>
</html>

