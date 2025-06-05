<?php
session_start();

include_once './function.php';

// Converti in intero e usa 0 come default
$lunghezza = isset($_GET['lunghezza']) ? (int)$_GET['lunghezza'] : 0;

if ($lunghezza > 0) {
    /* $password_creata = randompassword($lunghezza); // Salva il risultato in una variabile */
    $_SESSION['password_generata'] = randompassword($lunghezza); // Usa la variabile per la sessione
    header('Location: result.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid text-center my-3">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>

        <form action="" method="get" class="my-4">
            <div class="d-flex flex-column align-items-center">
                <label for="">Inserisci qui la lunghezza della password desiderata</label>
                <input type="number" min="1" max="10" id="lunghezza" name="lunghezza" placeholder="0">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Genera Password</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>