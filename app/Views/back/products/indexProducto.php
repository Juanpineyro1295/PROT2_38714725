<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 CRUD App Example Tutorial - codingdriver.com</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" >

</head>
<body> 

<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/products/create') ?>" class="btn btn-success mb-2">Añadir Producto</a>       
   </div>
    <?php
     if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="producto-list">    
       <thead>
          <tr>
             <th></th>
             <th>Categoria</th>
             <th>Nombre</th>
             <th>Descripcion</th>
             <th>Precio</th>
             <th>Imagen</th>
             <th>Imagen2</th>
             <th>Imagen3</th>
             <th>Estado</th>
             <th>Action</th>
          </tr>  
       </thead>
       <tbody>
          <?php if($producto): ?>
          <?php foreach($producto as $key => $producto): ?>
          <tr>
             <td><?php echo $key+1; ?></td>
             <td><?php if($producto['ID_Categoria']=="1"){echo ("Congelados");}
                       if($producto['ID_Categoria']=="2"){echo ("Repostería");}
                       if($producto['ID_Categoria']=="3"){echo ("Sandwichería");}?> </td>
             <td><?php echo $producto['Nombre']; ?></td>
             <td><?php echo $producto['Descripcion']; ?></td>
             <td>$<?php echo $producto['Precio']; ?></td>
             <td><img src="\<?php echo ($producto['Imagen']); ?>" style="height:10rem ; width:12rem;"></td>
             <td><img src="\<?php if ($producto['Imagen2'] == NULL){ 
               echo ('CI_proyecto_pineyro_23/assets/img/no.png'); } 
                else { echo ($producto['Imagen2']); }  ?>" style="height:10rem ; width:12rem;"></td>
             <td><img src="\<?php if ($producto['Imagen3'] == NULL){ 
               echo ('CI_proyecto_pineyro_23/assets/img/no.png'); } 
                else { echo ($producto['Imagen3']); }  ?>" style="height:10rem ; width:12rem;"></td>
             <td><?php if($producto['Activo']=="1"){echo ("Activo");}
                       if($producto['Activo']=="0"){echo ("Inactivo");}?></td>
             <td>
                <?php if($producto['Activo']=="1"){?><a href="<?php echo base_url('products/anular/'.$producto['ID']);?>" class="btn btn-danger btn-sm">Inactivar</a><?php }
                     if($producto['Activo']=="0"){?><a href="<?php echo base_url('products/recargar/'.$producto['ID']);?>" class="btn btn-primary btn-sm">Activar</a><?php } ?>
              <a href="<?php echo base_url('products/edit/'.$producto['ID']);?>" class="btn btn-primary btn-sm">Editar</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#producto-list').DataTable();
    });
</script>
</body>
</html>