<!DOCTYPE html>
<html>

<head>
  <title>Codeigniter 4 Crud with Validation Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" >
  
  <style>
    .container {
      max-width: 500px; 
    }

    .error {
      display: block;
      padding-top: 5px;  
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form method="post" id="createProducto" action="<?= site_url('/products/update') ?>">
    <input type="hidden" name="ID" value="<?php echo $producto['ID']; ?>">
        <div class="form-group">
        <label>Categoria</label>
      
        <select type="number" name="ID_Categoria"class="form-select" aria-label="Default select example">
            <option selected><?php $id = $producto['ID_Categoria'];
                                    switch($id){
                                      case '1': echo "Congelados";
                                      break;
                                      case '2': echo "Reposteria";
                                      break;
                                      case '3': echo "Sandwichería";
                                      break;
                                    } ?></option>
              <option value="1">Congelados</option>
              <option value="2">Reposteria</option>
              <option value="3">Sandwichería</option>
        </select>
        </div>
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="Nombre" class="form-control" value="<?php echo $producto['Nombre']; ?>">
        </div>
        <div class="form-group">
            <label>Descripcion</label>
            <input type="text" name="Descripcion" class="form-control" value="<?php echo $producto['Descripcion']; ?>">   
        </div>
        <div class="form-group">
            <label>Precio</label>
            <input type="number" name="Precio" class="form-control" value="<?php echo $producto['Precio']; ?>">
        </div>
        <div class="form-group">
            <label>Imagen</label>
            <input type="text" name="Imagen" class="form-control" value="<?php echo $producto['Imagen']; ?>">
        </div>
        <div class="form-group">
            <label>Imagen 2</label>
            <input type="text" name="Imagen2" class="form-control" value="<?php echo $producto['Imagen2']; ?>">
        </div>
        <div class="form-group">
            <label>Imagen 3</label>
            <input type="text" name="Imagen3" class="form-control" value="<?php echo $producto['Imagen3']; ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Guardar</button>
        </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#createProducto").length > 0) {
      $("#createProducto").validate({
        rules: {
          ID_Categoria: {
            required: true,
          },
          Nombre: {
            required: true,
          },
          Descripcion: {
            required: true,
          },
           Precio: {
            required: true,
          },
           Cantidad: {
            required: true,
          },
          Imagen: {
            required: true,
          },
          Activo: {
            required: true,
          },
        },
        
        messages: {                                   

          ID_Categoria: {
            required: "Falta ID_Categoria.",
          },
          Nombre: {
            required: "Falta required.",
          },
          Descripcion: {
            required: "Falta Descripcion.",
          },
          Precio: {
            required: "Falta Precio",
          },
          Cantidad: {
            required: "Falta Cantidad.",
          },
          Imagen: {
            required: "Falta Imagen.",
          },
        },
      })
    }
  </script>
</body>

</html>