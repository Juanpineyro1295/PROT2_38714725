<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/CI_proyecto_pineyro_23/assets/css/miestilo.css" rel="stylesheet" >
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Contacto</title>
</head>




<body>
  <div class="container">
    <h1>Contacta con Nosotras</h1>
  <p>Puedes encontrarnos en: San Lorenzo 1356 </p>
  <p>Establecimiento: Espacio 1356</p>
  <p>Celular de contacto: +54 9 379 4 051503</p>
  <p>Dirección de Correo: maflopi89@gmail.com</p>
	<p>Estamos a dispocición.</p>
  </div>

  <div class="container">
    <h1>Envíanos cualquier consulta:</h1>
    <form method="post" id="createContacto" action="<?= site_url('/contactos/store') ?>"> 
  <div class="mb-3">
  <label for="Nombre" class="form-label"><p>Escriba su Nombre</p></label>
  <input type="text" name ='Nombre' class="form-control">
</div>
    <div class="mb-3">
  <label for="EmailUsuario" class="form-label"><p>Dirección de Correo</p></label>
  <input type="email" name ='EmailUsuario' class="form-control" placeholder="nombre@example.com">
</div>
  <div class="mb-3">
  <label for="Asunto" class="form-label"><p>Asunto</p></label>
  <input type="text" name ='Asunto' class="form-control">
</div>
<div class="mb-3">
  <label for="Contacto" class="form-label"><p>Escriba el mensaje aquí</p></label>
  <textarea name="Contacto" class="form-control"  rows="10"></textarea>
</div>
<button  type="submit" class="btn btn-primary" style="border-color: black; background-color: #454545;"  >Enviar</button>
  </form>
    </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#createContacto").length > 0) {
      $("#createContacto").validate({
        rules: {
          EmailUsuario: {
            required: true,
          },
          Contacto: {
            required: true,
          },
          
        },
        messages: {
          EmailUsuario: {
            required: "Por favor escriba su dirección de correo",
          },
          Contacto: {
            required: "Su mensaje esta vacio",
          },
        },
      })
    }
  </script>


</body>
	


 <script src="/CI_proyecto_pineyro_23/assets/js/bootstrap.bundle.min.js "></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>