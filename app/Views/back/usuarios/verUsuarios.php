<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Usuarios</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" >

</head>
<body> 

<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/usuario_a/registrar') ?>" class="btn btn-success mb-2">Crear Usuario Administrador</a>       
   </div>
    <?php
     if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="usuario-list">    
       <thead>
          <tr>
             <th></th>
             
             <th>Estado</th>
             <th>Rol</th>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>DNI</th>
             <th>Telefono</th>
             <th>email</th>
             <th>calle</th>
             <th>numero</th>
             <th>localidad</th>
             <th>CodPostal</th>
             <th>Action</th>
          </tr>  
       </thead>
       <tbody>
          <?php if($usuario): ?>
          <?php foreach($usuario as $key => $usuario): ?>
          <tr>
             <td><?php echo $key+1; ?></td>
             <td><?php if($usuario['Activo']=="1"){echo ("Activo");}
                       if($usuario['Activo']=="0"){echo ("Inactivo");}?></td>
             <td><?php if($usuario['ID_Rol']=="1"){echo ("Cliente");}
                       if($usuario['ID_Rol']=="2"){echo ("Administrador");}?></td>
             <td><?php echo $usuario['Nombre']; ?></td>
             <td><?php echo $usuario['Apellido']; ?></td>
             <td><?php echo $usuario['DNI']; ?></td>
             <td><?php echo $usuario['Telefono']; ?></td>
             <td><?php echo $usuario['email']; ?></td>
             <td><?php echo $usuario['calle']; ?></td>
             <td><?php echo $usuario['numero']; ?></td>
             <td><?php echo $usuario['localidad']; ?></td>
             <td><?php echo $usuario['CodPostal']; ?></td>
             
             <td>
               <?php if($usuario['Activo']=="1"){?><a href="<?php echo base_url('usuario/baja/'.$usuario['ID']);?>" class="btn btn-danger btn-sm">Dar de Baja</a><?php }
                     if($usuario['Activo']=="0"){?><a href="<?php echo base_url('usuario/alta/'.$usuario['ID']);?>" class="btn btn-primary btn-sm">Dar de Alta</a><?php } ?>
              <a href="<?php echo base_url('usuario/edit_a/'.$usuario['ID']);?>" class="btn btn-primary btn-sm">Editar</a>
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
      $('#usuario-list').DataTable();
    });
</script>
</body>
</html>