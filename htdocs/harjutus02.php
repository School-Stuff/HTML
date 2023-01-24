<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Ülesanne 2
        // Karl Jugapuu
        // 24.01.2023

        $arv1 = 4;
        $arv2 = 22;
        echo "$arv1 + $arv2<br>";

        $mm = 213;
        $cm = $mm / 10;
        $m = $cm / 10;

        printf('%0.2f mm on %0.2f cm ja %0.2f m<br>', $mm, $cm, $m);

        $a = 12;
        $b = $a;
        $c = 16.97;
        $P = $a + $b + $c;
        $S = ($a * $b) / 2;


        printf('%0.0f kolmnurga pindala on %0.0f ja ümbermõõt on %0.0f', $c, $P, $S);
    ?>
    
</body>
</html>