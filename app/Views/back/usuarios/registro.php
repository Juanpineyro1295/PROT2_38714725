<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" >  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>
  <div class="container">
<h2>Registrate con tus Datos</h2>

<form class="row g-3" method="post" id="createUsuario" action="<?= site_url('/usuario/store') ?>">
  
  <div class="col-md-6"><p style="color: red;">
<?php if (! empty ($errors)){ echo $errors['Nombre']; }?></p>
    <label for="Nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="Nombre" placeholder="Inroduzca su nombre">
  </div>
  
  <div class="col-md-6"> <p style="color: red;">
<?php if (! empty ($errors)){ echo $errors['Apellido']; }?></p>
    <label for="Apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="Apellido" placeholder="Inroduzca su apellido">
  </div>
  
  <div class="col-md-6"><p style="color: red;">
<?php if (! empty ($errors)){ echo $errors['Telefono']; }?></p>
    <label for="Telefono" class="form-label">Teléfono</label>
    <input type="number" class="form-control" name="Telefono" placeholder="Inroduzca algún teléfono">
  </div>

  <div class="col-md-6"><p style="color: red;">
<?php if (! empty ($errors)){ echo $errors['DNI']; }?></p>
    <label for="DNI" class="form-label">DNI</label>
    <input type="number" class="form-control" name="DNI" placeholder="Inroduzca su DNI">
  </div>

  
  <div class="col-12"><p style="color: red;">
<?php if (! empty ($errors)){ echo $errors['email']; }?></p>
    <label for="email" class="form-label">Dirección de Correo Electrónico</label>
    <input type="email" class="form-control" name="email" placeholder="Su direción de Correo Electrónico">
  </div>
  
  <div class="col-md-6"><p style="color: red;">
<?php if (! empty ($errors)){ echo $errors['Password']; }?></p>
    <label for="Password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="Password" placeholder="Establezca una contraseña">
  </div>

   <div class="col-md-6"><p style="color: red;">
<?php if (! empty ($errors)){ echo $errors['Password2']; }?></p>
    <label for="Password2" class="form-label">Confirme su Contraseña</label>
    <input type="password" class="form-control" name="Password2" placeholder="Vuelva a escribir su contraseña">
  </div>
  
  <div class="col-md-6"><p style="color: red;">
<?php if (! empty ($errors)){ echo $errors['calle']; }?></p>
    <label for="calle" class="form-label">Calle</label>
    <input type="text" class="form-control" name="calle" placeholder="Calle en donde reside">
  </div> 

  <div class="col-md-6"><p style="color: red;">
<?php if (! empty ($errors)){ echo $errors['numero']; }?></p>
    <label for="numero" class="form-label">Número</label>
    <input type="number" class="form-control" name="numero" placeholder="Su número de domicilio">
  </div>
  
  <div class="col-md-6"><p style="color: red;">
<?php if (! empty ($errors)){ echo $errors['localidad']; }?></p>
    <label for="localidad" class="form-label">Localidad</label>
    <input type="text" class="form-control" name="localidad" placeholder="Su ciudad o pueblo">
  </div>
  
  <div class="col-md-6"><p style="color: red;">
<?php if (! empty ($errors)){ echo $errors['CodPostal']; }?></p>
    <label for="CodPostal" class="form-label">Código Postal</label>
    <input type="number" class="form-control" name="CodPostal" placeholder="Su código postal">
  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Confirma
      </label>
    </div>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" style="border-color: black; background-color: #454545;">Registrarse</button>
  </div>
</form>

</div>  
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  