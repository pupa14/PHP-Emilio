<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

  <form class="form-inline" action="FORMULARIO.php" method="get">
    <div class="form-group mb-2">
      <label for="staticEmail2" class="sr-only">Email</label>
      <input type="text" readonly class="form-control-plaintext" id="name" value="Numero que quieres jugar">
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <label for="inputPassword2" class="sr-only">Introduce el numero</label>
      <input type="text" class="form-control" name = "name" placeholder="Introduce el numero">
    </div>
    <button type="submit" class="btn btn-primary mb-2">¡Jugar!</button>
  </form>



</body>
</html>
