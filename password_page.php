<?php
session_start();
if (!isset($_SESSION['password']))
    header('Location: index.php');

if (isset($_POST['reset'])) {
    session_destroy();
    header('Location: index.php');
}

$password = $_SESSION['password'];

?>

<!DOCTYPE html>
<html lang="it">

<?php require('head.php') ?>

<body>
    <div class="container mt-4">
        <h5 class="text-white">La password generata è:</h5>
        <div class="alert alert-success mt-3" role="alert">
            <?= $password ?>
        </div>
        <form method="POST" action="#" class="post">
            <button name='reset' class="btn btn-danger">Torna indietro</button>
        </form>
    </div>
</body>