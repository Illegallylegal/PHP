<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="php" href="index2.php">
</head>
<body>
    <center>
    <div class="contoh1">
    <H1>Contoh 1</H1>
    <?php     echo "Halo Apa Kabar"."<br>";
                print "halo apa kabar";

    ?></div>
    <div class="contoh2">
    <h2>Contoh 2</h2>
    <?php
            $a = 3;
            $b = 7;
            $a += 5;
            $b = ($c = 11) + 3;
            echo "Nilai Variabel A Adalah = $a";
            echo "<br>";
            echo "Nilai Variabel B Adalah = $b";
            echo "<br>";
            echo "Nilai Variabel C Adalah = $c";
            echo "<br>";

    ?></div>
    <div class="contoh3">
    <h3>Contoh 3</h3>
    <?php
            $a = 3;
            $b = 7;
            print "Nilai variabel A adalah = $a";
            echo "<br>";
            print "Nilai variabel B adalah = $b";
            echo "<br>";
            echo "$a * $b = ";
            print $a * $b;
            echo "<br>";
            echo "<br>";
            echo "$a : $b = ";
            print $a / $b;
            echo "<br>";
            echo "<br>";
            echo "$a % $b = ";
            print $a % $b;
    ?></div></center>
    <h2>Contoh 4</h2>
    <?php
            $nilai = 100;
            $nama = "STEVE REGAN";
            if($nilai >= 80){
                echo $nama." MENDAPAT NILAI A";
            }
            elseif($nilai >= 70){
                echo $nama." MENDAPAT NILAI B";
            }
            elseif($nilai >= 60){
                echo $nama." MENDAPAT NILAI C";
            }
            else{
                echo $nama." MENDAPAT NILAI D";
            }

    ?>
    <br>
    Tanggal lahir : 
    <select name = tanggal>
        <option value= 0 selected> Tanggal
            <?php
                for($i = 1; $i < 31; $i++)
                echo "<option value = $i > $i";


            ?>
        </option></select><br>
        <?php
        $i = 1;
        do
        {
            echo "$i <br>";
            $i++;
        }   while($i <= 10);
        ?>
</body>
</html>