<?php
$char_rips = $_GET['char-rips'] ?? 'yes';
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
      <form action="#">
        <div class="row row-cols-2 justify-content-between align-items-center mb-4">
          <div class="col">
            <label for="password-length" class="form-label">Lunghezza password:</label>
          </div>
          <div class="col">
            <input type="number" name="password-length" id="password-length" class="form-control w-75" min="1" max='68'
              value="<?= $password_length ?>">
          </div>
        </div>
        <div class="row row-cols-2 justify-content-between">
          <p>Consenti ripetizioni di uno o più caratteri:</p>
          <div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="char-rips" value='yes' id="yes" <?php
              if ($char_rips === 'yes')
                echo 'checked' ?>>
                <label class="form-check-label" for="yes">
                  Si
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="char-rips" id="no" value='no' <?php
              if ($char_rips === 'no')
                echo 'checked' ?>>
                <label class="form-check-label" for="no">
                  No
                </label>
              </div>
            </div>
          </div>
          <div class="mt-3">
            <button class="btn btn-primary me-3">Invia</button>
            <a href="index.php" class="btn btn-secondary">Annulla</a>
          </div>
        </form>
      </main>
    </div>
  </body>

  </html>