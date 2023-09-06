<?php

include 'error_reporting.php';

session_start();

if(isset($_GET['reset'])) {
    session_destroy();
    header('Location: aufgabe1.php');
}

if(isset($_POST['produkt'])) {
    $_SESSION['produkte'][] = trim(htmlspecialchars($_POST['produkt'], ENT_QUOTES, 'UTF-8')); // Die eckigen Klammern nach $_SESSION['produkte'] sind essentiel für die Funktion, da sonst nur das letzte Produkt in der Session gespeichert wird. So wird jedes Produkt nach und nach an die nächste freie Stelle des Arrays gespeichert.
}

// $cnt = ($_SESSION['produkte']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aufgabe 1</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">

</head>
<body>
    <main class="container mt-3">
        <form action="aufgabe1.php" method="post">
                <div class="mb-3">
                    <label for="produkt" class="form-label">Produkt hinzufügen: </label>
                    <input type="text" name="produkt" id="produkt" class="form-control">
                </div>
                
                <div>
                    <button type="submit" class="btn btn-secondary mb-1">Add</button>
                </div>

                <div>
                    <a class="btn btn-warning mb-1" href="aufgabe1.php?reset" role="button">Reset</a>
                </div>

                <div class="mb-3">
                    <h2>Einkaufsliste:</h2>
                        <ul>
                        <?php foreach($_SESSION['produkte'] as $produkt) { ?>
                                <li><?php echo $produkt ?> <a href="aufgabe1.php?reset">Delete this</a></li>
                                <?php } ?>
                        </ul>
                </div>
        </form>
    </main>
</body>
</html>

