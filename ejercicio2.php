<?php
if ($_POST){
$nom = $_POST['nom'];
$ape = $_POST['ape'];
//echo $nom;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>php2024</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="adso.php">adso</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ejercicio1.php">ejercicio1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ejercicio2.php">ejercicio2</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <h1>hola mundo php</h1>

    
      
    <form action="" method="post">

    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">nombre</label>
    <div class="col-sm-6">
      <input type="tex" class="form-control" id="nom" name = "nom">
    </div>
  </div>
  

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">apellido</label>
    <div class="col-sm-6">
      <input type="tex" class="form-control" id="ape" name = "ape">
    </div>
  </div>

        <button type="submit" class="btn btn-primary">mostrar</button>
        
        <input type="tex" class="form-control" id="" name = "" value="<?php echo $nom," " ,$ape ;?>">
    </form>

    
    

  
    
</body>
</html>