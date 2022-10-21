<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Operator Menghitung Volume Kubus</title>
</head>
<body>
    <div class="input-nilai">
        <form class="inputan" action="index.php" method="POST">
            <h2>Belajar Menghitung Volume Kubus</h2>
            <input type="number" name="panjangsisi" placeholder="Masukkan Panjang Sisi Kubus">
            <input type="submit" name="hitung" value="Hitung Volume">
        </form>

        <div class="hasil">
            <?php
                $panjang_sisi=$_POST["panjangsisi"];
                $volum=$panjang_sisi*$panjang_sisi*$panjang_sisi;

                echo "Diketahui Panjang Sisi Kubus = $panjang_sisi cm <br/>";
                echo "Volume = $volum cm3";
            exit();
            ?>
        </div>
    </div>
</body>
</html>