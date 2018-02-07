<html>
    <head>
        <title>title</title>
    </head>
    <body>
<?php
echo '<table>';
echo '<tr>';
echo '<th>Asortyment</th>';
echo '<th>Cena</th>';
echo '<th>Zdjęcie</th>';
echo '</tr>';
$result = mysqli_query($conn, 'SELECT Asortyment, Cena, `Zdjęcie` FROM Oferta');
while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
    echo '<tr>';
    echo '<td>' . $row['Asortyment'] . '</td>';
    echo '<td>' . $row['Cena'] . '</td>';
    echo '<td>' . $row['Zdjęcie'] . '</td>';
    echo '</tr>';
}
mysqli_free_result($result);
echo '</table>';
?>

    </body>
</html>

