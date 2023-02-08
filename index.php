<?php
$password_length = $_GET['password-length'] ?? '';
$words = 'abcdefghijklmnopqrstuvwxyz';
$up_words = strtoupper($words);
$numbers = '0123456789';
$symbols = '!?.-+/';

$total_char = $words . $up_words . $numbers . $symbols;

function get_random_word($string, $length)
{
  $random_word = '';
  $max_value = strlen($string);
  do {
    $index = rand(0, $max_value);
    $random_word .= substr($string, $index, 1);
  } while (strlen($random_word) < $length);
  return $random_word;
}

if ($password_length)
  $password = get_random_word($total_char, $password_length);

?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Password generator</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <!-- Style -->
  <link rel="stylesheet" href="./css/style.css">
</head>

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
      <?php if (isset($password)): ?>
        <div class="alert alert-success mt-3" role="alert">
          <h6>La password generata è:</h6>
          <?= $password ?>
        <?php endif ?>
      </div>
    </main>
  </div>
</body>

</html>