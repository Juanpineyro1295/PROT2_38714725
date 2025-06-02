<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" >

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ver Contactos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    
    <?php
     if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="contacto-list">
       <thead>
          <tr>
             <th></th>
             <th>Remitente</th>
             <th>Email Remitente</th>
             <th>Asunto</th>
             <th>Contacto</th>
             <th>Leído</th>
             <th>Action</th>

          </tr>
       </thead>
       <tbody>
          <?php if($contacto): ?>
          <?php foreach($contacto as $key => $contacto): ?>
          <tr>
             <td><?php echo $key+1; ?></td>
             <td><?php echo $contacto['Nombre']; ?></td>
             <td><?php echo $contacto['EmailUsuario']; ?></td>
             <td><?php echo $contacto['Asunto']; ?></td>
             <td><?php echo $contacto['Contacto']; ?></td>
             <td> <?php if($contacto['Contestado']=="1"){echo ("Sí");}
                       if($contacto['Contestado']=="0"){echo ("No");}?></td>
             <td><a href="<?php echo base_url('contactos/update/'.$contacto['ID']);?>" class="btn btn-primary btn-sm">Marcar como Leído</a></td>          
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
      $('#contacto-list').DataTable();
    });
</script>
</body>
</html>