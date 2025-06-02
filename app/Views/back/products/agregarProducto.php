<!DOCTYPE html>
<html>

<head>
  <title>Añadir Productos</title>
  <link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
    <form method="post" id="createProducto" action="<?= site_url('/products/store') ?>">    
      
        

       <div class="form-group">
        <label>Categoria</label>
      
        <select type="number" name="ID_Categoria"class="form-select" aria-label="Default select example">
            <option selected>Selecione</option>
              <option value="1">Congelados</option>
              <option value="2">Reposteria</option>
              <option value="3">Sadwicheria</option>
              
        </select>
      </div>



      <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" class="form-control">
      </div>

      <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="Descripcion" class="form-control">
      </div>

      <div class="form-group">
        <label>Precio</label>
        <input type="number" name="Precio" class="form-control">
      </div>


      <div class="form-group">
        <label>Imagen</label>
        <input type="text" name="Imagen" class="form-control" placeholder="Direccion de la imagen ">
      </div>

            <div class="form-group">
        <label>Imagen 2 (opcional)</label>
        <input type="text" name="Imagen2" class="form-control" placeholder="Direccion de la imagen ">
      </div>

            <div class="form-group">
        <label>Imagen 3 (opcional)</label>
        <input type="text" name="Imagen3" class="form-control" placeholder="Direccion de la imagen ">
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
          
         
        },

        messages: {
          ID_Categoria: {
            required: "ID_Categoria is required.",
          },
          Nombre: {
            required: "Nombre is required.",
          },
          Descripcion: {
            required: "Descripcion is required.",
          },
          Precio: {
            required: "Precio is required.",
          },
          Cantidad: {
            required: "Cantidad is required.",
          },
          Imagen: {
            required: "Imagen is required.",
          },
          
        },
      })
    }
  </script>
</body>

</html>