<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo POO-MVC-PHP</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <style>
    input {
      margin-top: 5px;
      margin-bottom: 5px;
    }

    .right {
      float: right;
    }
  </style>

</head>

<body>
  <form action="<?php echo $helper->url("users", "create"); ?>" method="post" class="col-lg-5">
    <h3>Añadir usuario</h3>
    <hr />
    Nombre: <input type="text" name="name" class="form-control" />
    Apellido: <input type="text" name="lastName" class="form-control" />
    Email: <input type="text" name="email" class="form-control" />
    Contraseña: <input type="password" name="password" class="form-control" />
    <input type="submit" value="enviar" class="btn btn-success" />
  </form>

  <div class="col-lg-7">
    <h3>Usuarios</h3>
    <hr />
  </div>
  <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
    <?php foreach ($allusers as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades 
    ?>
      <?php echo $user->id; ?> -
      <?php echo $user->name; ?> -
      <?php echo $user->lastName; ?> -
      <?php echo $user->email; ?>
      <div class="right">
        <a href="<?php echo $helper->url("users", "delete"); ?>&id=<?php echo $user->id; ?>" class="btn btn-danger">Borrar</a>
      </div>
      <hr />
    <?php } ?>
  </section>
  <footer class="col-lg-12">
    <hr />
    Ejemplo PHP MySQLi POO MVC > - Copyright &copy; <?php echo  date("Y"); ?>
  </footer>

</body>

</html>