<?php

include_once './function.php';
$lunghezza = isset($_GET['lunghezza']) ? $_GET['lunghezza'] : 'null';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid text-center my-3 d-flex flex-column align-items-center">
        <h1>Password Generata</h1>


        <?php

        if ($lunghezza > 0) {
            echo "<div class='alert alert-success mt-3'>

            La tua password sicura è: <strong> " . randompassword($lunghezza) . "</strong>

        </div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Devi inserire una lunghezza valida per la password.</div>";
        }

        ?>

        <a href="index.php" class="btn btn-primary">Genera nuova password</a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>