<?php
include('functions.php');
?>

<!DOCTYPE html>
<html lang="it">

<?php require('head.php') ?>

<body>
  <div class="container">
    <header>
      <h1 class="text-center text-secondary my-5">Password Generator</h1>
    </header>
    <main>
      <h2 class="text-white text-center mb-4">Genera una password sicura</h2>
      <form action="">
        <div class="d-flex justify-content-between align-items-center">
          <label for="password-length" class="form-label">Lunghezza password:</label>
          <input type="number" name="password-length" id="password-length" class="form-control w-25" min="1"
            value="<?= $password_length ?>">
        </div>
        <div class="mt-3">
          <button class="btn btn-primary ">Invia</button>
          <a href="index.php" class="btn btn-secondary">Annulla</a>
        </div>
      </form>
    </main>
  </div>
</body>

</html>