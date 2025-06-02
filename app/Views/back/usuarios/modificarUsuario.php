<!DOCTYPE html>
<html>

<head>
  <title>Editar Información</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" >
  
  <style>
    

    .error {
      display: block;
      padding-top: 5px;  
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-5" style=" max-width: 500px;">
    <h1>Editar Información</h1>
    <form method="post" id="createUsuario" action="<?= site_url('/usuario/update') ?>">
    <input type="hidden" name="ID" value="<?php echo $usuario['ID']; ?>">
        
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="Nombre" class="form-control" value="<?php echo $usuario['Nombre']; ?>">
        </div>
        <div class="form-group">
            <label>Apellido</label>
            <input type="text" name="Apellido" class="form-control" value="<?php echo $usuario['Apellido']; ?>">   
        </div>
        <div class="form-group">
            <label>DNI</label>
            <input type="number" name="DNI" class="form-control" value="<?php echo $usuario['DNI']; ?>">
        </div>
        <div class="form-group">
            <label>Teléfono</label>
            <input type="number" name="Telefono" class="form-control" value="<?php echo $usuario['Telefono']; ?>">
        </div>
        <div class="form-group">
            <label>Dirección de correo electrónico</label>
            <input type="text" name="email" class="form-control" value="<?php echo $usuario['email']; ?>">
        </div>
        <div class="form-group">
            <label for="Password" class="form-label">Contraseña</label>
            <input type="password" name="Password" class="form-control" value="<?php echo $usuario['Password']; ?>">
        </div>

        <div class="form-group">
            <label>Calle</label>
            <input type="text" name="calle" class="form-control" value="<?php echo $usuario['calle']; ?>">
        </div>
        <div class="form-group">
            <label>Número</label>
            <input type="number" name="numero" class="form-control" value="<?php echo $usuario['numero']; ?>">
        </div>
        <div class="form-group">
            <label>Localidad</label>
            <input type="text" name="localidad" class="form-control" value="<?php echo $usuario['localidad']; ?>">
        </div>
        <div class="form-group">
            <label>Código Postal</label>
            <input type="number" name="CodPostal" class="form-control" value="<?php echo $usuario['CodPostal']; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" style="border-color: black; background-color: #454545; ">Guardar Cambios</button>
        </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#createUsuario").length > 0) {
      $("#createUsuario").validate({
        rules: {
          
          Nombre: {
            required: true,
          },
          Apellido: {
            required: true,
          },
           DNI: {
            required: true,
          },
           Telefono: {
            required: true,
          },
          email: {
            required: true,
          },
          Password: {
            required: true,
          },
          calle: {
            required: true,
          },
          numero: {
            required: true,
          },
          localidad: {
            required: true,
          },
          CodPostal: {
            required: true,
          },
        },
        
        messages: {                                   

          Nombre: {
            required: "Falta Nombre.",
          },
          Apellido: {
            required: "Falta Apellido.",
          },
          DNI: {
            required: "Falta DNI.",
          },
          Telefono: {
            required: "Falta Telefono.",
          },
          email: {
            required: "Falta email.",
          },
          Password: {
            required: "Falta Contraseña.",
          },
          calle: {
            required: "Falta calle.",
          },
          numero: {
            required: "Falta numero.",
          },
          localidad: {
            required: "Falta localidad.",
          },
          CodPostal: {
            required: "Falta CodPostal.",
          },
        },
      })
    }
  </script>
</body>

</html>