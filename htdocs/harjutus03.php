<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>karl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">

        <form>
            a <input type="num" name="a"><br>
            b <input type="num" name="b"><br>
            h <input type="num" name="h"><br>
            <input type="submit" value="Saada"><br>
        </form>
        <?php
        // Ülesanne03
        // Karl Jugapuu
        // 24.01.2023

        // trapetsi pindala
        $a = $_GET['a'];
        $b = $_GET['b'];
        $h = $_GET['h'];

        $S = ($a + $b) / 2 * $h;
        printf('Trapetsi pindala on %0.1f<br>', $S);

        ?>
        <form>
            arvuta rombi ümbermõõt <br>
            a <input type="num" name="a2"><br>
            <input type="submit" value="Saada">
        </form>
        <?php
        // rombi ümbermõõt
        $a2 = $_GET['a2'];

        $C = 4 * $a2;
        $vast2 = printf('Rombi ümbermõõt on %0.1f', $C);

        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>