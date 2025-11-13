<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 PHP</title>
</head>
<body>
    <h1>Tugas 6 PWD bos</h1>
    <p>Soal 1 loop menampilkan bilangan genap 1-10</p>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo "<p>$i adalah bilangan genap</p>";
        }
    }
    ?>

    <p>Soal 2 loop menampilkan perkalian 1-10</p>
    <table border ="1px solid">
        <tr>
            <th>Bilangan : </th>
            <?php
                for($o = 1; $o<=10; $o++){
                    echo "<td style= background-color:green;>$o</td>";
                }
            ?>
        </tr>
        <?php
            for($i = 1; $i<=10; $i++){
                echo "<tr><td style= background-color:green;>$i</td>";
                for($j = 1; $j<=10; $j++){
                    $hasil = $i * $j;
                    if($hasil % 2 == 0){
                        echo "<td style= background-color:aqua;>$hasil</td>";
                    } else {
                        echo "<td style= background-color:yellow;>$hasil</td>";
                    }
                }
            }
            echo "</tr>";
        ?>
    </table>

</body>
</html>