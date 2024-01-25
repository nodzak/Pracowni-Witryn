<?php
$conn = mysqli_connect("localhost", "root", "", "egzamin5");

if (!$conn) {
    die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <div id="banner1">
            <img src="logo1.png" alt="Mój kalendarz">
        </div>
        <div id="banner2">
            <h1>KALENDARZ</h1>
            <?php
            $sql1 = "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-07-01';";
            $q1 = mysqli_query($conn, $sql1);

            $row = mysqli_fetch_row($q1);
            echo "<h3>miesiąc: $row[0], rok: $row[1]</h3>";
            ?>
        </div>
    </header>
    <main>
        <?php
        $sql2 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec';";
        $q2 = mysqli_query($conn, $sql2);

        while ($row = mysqli_fetch_row($q2)) {
            echo "<section class=\"day\"><h5>$row[0]</h5><p>$row[1]</p></section>";
        }
        ?>
    </main>
    <footer>
        <form action="#" method="post">
            <label>dodaj wpis:</label>
            <input type="text" name="new">
            <input type="submit" value="DODAJ">
        </form>
        <p>Stronę wykonał: Michał Nodżak </p>
    </footer>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $new = mysqli_real_escape_string($conn, $_POST["new"]);
        $sql3 = "UPDATE zadania SET wpis = '$new' WHERE dataZadania = '2020-07-13';";
        mysqli_query($conn, $sql3);
    }
    mysqli_close($conn);
    ?>
</body>
</html>