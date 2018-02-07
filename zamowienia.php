<html>
    <head>
        <title>title</title>
    </head>
    <body>

        <div class="container">
            <form action="dane.php" method="post" name ="formularz">
                Imię:
                <input type="text" name="imie" class="form-control">
                Nazwisko:
                <input type="text" name="nazwisko" class="form-control">
                Ulica:
                <input type="text" name="ulica" class="form-control">
                Nr domu:
                <input type="number" name="dom" class="form-control">
                Miejscowość:
                <input type="text" name="miejscowosc" class="form-control">

                Róża <input type="checkbox" name="miejscowosc" class="form-control">
                Kaktus <input type="checkbox" name="miejscowosc" class="form-control">
                Tulipan <input type="checkbox" name="miejscowosc" class="form-control">
                <button type="submit" class="btn btn-dark">Dodaj</button>
                <div class="info alert alert-warning"></div>
            </form>
        </div>


        <?php
        ?>
    </body>
</html>
