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

    <div class="container">
        <form>
            <div class="mb-3">
                <label class="form-label">Arv1</label>
                <input type="number" class="form-control" name="arv1">
            </div>
            <div class="mb-3">
                <label class="form-label">Arv2</label>
                <input type="number" class="form-control" name="arv2">
            </div>
            <button type="submit" class="btn btn-primary" name="jaga">Submit</button>
        </form>
        <?php
        // Ülesanne 4
        // Karl Jugapuu
        // 24.01.2023


        if (!empty($_GET['arv1'] and $_GET['arv2'])) {
            $arv1 = $_GET['arv1'];
            $arv2 = $_GET['arv2'];
            $vastus1 = $arv1 / $arv2;

            printf('Vastus on %0.2f', $vastus1);
        }

        ?>

        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Vanus1</label>
                <input type="text" class="form-control" id="validationCustom01" name="vanus1" required>
                <div class="valid-feedback">
                    
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Vanus2</label>
                <input type="text" class="form-control" id="validationCustom02" name="vanus2" required>
                <div class="valid-feedback">
                    
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="van">Submit</button>
            </div>
        </form>

        <?php



        $vanus1 = $_GET['vanus1'];
        $vanus2 = $_GET['vanus2'];

        if (!empty($_GET['vanus1'] and $_GET['vanus2'])) {

            if ($vanus1 > $vanus2) {
                printf('Vanus 1: %d on vanem kui vanus 2: %d', $vanus1, $vanus2);
            } else if ($vanus1 == $vanus2) {
                printf('Vanus 1: %d on sama vana kui vanus 2: %d', $vanus1, $vanus2);
            } else {
                printf('Vanus 2: %d on vanem kui vanus 1: %d', $vanus2, $vanus1);
            }
        }


        ?>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>