<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <div id="baner">
        <h1>Portal Dla Wędkarzy</h1>
    </div>

    <div id="lewy1">
        <h3>Ryby Zamieszkujące Rzeki</h3>
        <ol>

            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'wedkowanie');

            $query1 = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby,  lowisko WHERE ryby.id=lowisko.Ryby_id and lowisko.rodzaj = 3";
            $result1 = mysqli_query($conn, $query1);
            while($line1 = mysqli_fetch_row($result1)){
                echo "<li>$line1[0] pływa w rzece $line1[1], $line1[2]</li>";
            }
            ?>

        </ol>
    </div>

    <div id="prawy">
        <img src="ryba1.jpg" alt="Sum"><br>
        
        <a href="kwerendy.txt">Pobierz Kwerendy</a>
    </div>
    
    <div id="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>LP</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>

            <?php
                $query2 = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1";
                $result2 = mysqli_query($conn, $query2);
                while($line2 = mysqli_fetch_row($result2)){
                    echo "<tr>
                            <td>$line2[0]</td>
                            <td>$line2[1]</td>
                            <td>$line2[2]</td>
                          </tr>";
                }
                mysqli_close($conn);
            ?>

        </table>
    </div>

    <div id="stopka">
        <p>Stronę wykonał Michał Nodżak</p>
    </div>

</body>
</html>