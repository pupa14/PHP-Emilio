<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADIVINA EL NUMERO</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      padding: 20px;
    }
  </style>
</head>
<body>

<div class="container">
  <h1 class="mt-4 mb-4">Adivina el número</h1>

  <?php 
    $haria = (int)$_GET["name"];
    $numero = rand(1, 3);

    echo '<div class="alert alert-info" role="alert">';
    echo 'Random Numero: ' . $numero;
    echo '</div>';

    if ($haria == $numero) {
      echo '<div class="alert alert-success" role="alert">';
      echo '¡Felicidades! Tu número es correcto.';
      echo '</div>';
    } elseif ($haria < $numero) {
      echo '<div class="alert alert-warning" role="alert">';
      echo 'Tu número es menor.';
      echo '</div>';
    } else {
      echo '<div class="alert alert-warning" role="alert">';
      echo 'Tu número es mayor.';
      echo '</div>';
    }
  ?>

  <hr>

  <?php
    echo '<div class="alert ';
    echo ($haria % 2 == 0) ? 'alert-primary' : 'alert-danger';
    echo '" role="alert">';
    echo ($haria % 2 == 0) ? 'Es par' : 'Es impar';
    echo '</div>';
  ?>

</div>

<!-- Adding Bootstrap JS and Popper.js for dropdowns and tooltips -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
