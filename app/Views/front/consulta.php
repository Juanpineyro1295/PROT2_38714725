<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/CI_proyecto_pineyro_23/assets/css/miestilo.css" rel="stylesheet" >
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Consultas</title>
</head>




<body>
  <div class="container">
    <h2>Contacta con Nosotros</h2>
  <p>Puedes encontrarnos en: San Lorenzo 1356</p>
  <p>Establecimiento: Espacio 1356</p>
  <p>Celular de contacto: +54 9 379 4 051503</p>
  <p>Dirección de Correo: maflopi89@gmail.com</p>
	<p>Estamos a dispocición.</p>
  </div>

  <div class="container">
    <h3>Envíanos cualquier consulta:</h3>

   
    
<div class="mb-3">
  <form method="post"  id="createConsulta" action="<?= site_url('/consultas/store') ?>">

      <input class="form-control" type="hidden" name="nombre" id="nombre" value="<?php echo session()->Nombre ?>">
      <input class="form-control" type="hidden" name="email" id="email" value="<?php echo session()->email ?>">
  
  <label for="Asunto" class="form-label"><p>Asunto</p></label>
  <input type="text" name="Asunto" id="Asunto">
  <label for="Consulta" class="form-label"><p>Escriba el mensaje aquí</p></label>
  <textarea class="form-control" name="Consulta"  id="Consulta" rows="10"></textarea>
</div>
<button type="submit" class="btn btn-primary" style="border-color: black; background-color: #454545;">Enviar</button>
  </form>
   </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#createConsulta").length > 0) {
      $("#createConsulta").validate({
        rules: {
          Consulta: {
            required: true,

          },
        },
        messages: {
          Consulta: {
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