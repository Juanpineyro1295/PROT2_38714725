<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" >

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ver Consultas</title>
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
     <table class="table table-bordered" id="consulta-list">
       <thead>
          <tr>
             <th></th>
             <th>Usuario</th>
             <th>Email Usuario</th>
             <th>Asunto</th>
             <th>Consulta</th>
             <th>Leído</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($consulta): ?>
          <?php foreach($consulta as $key => $consulta): ?>
          <tr>
             <td><?php echo $key+1; ?></td>
             <td><?php echo $consulta['Nombre_Usuario']; ?></td>
             <td><?php echo $consulta['Email_Usuario']; ?></td>
             <td><?php echo $consulta['Asunto']; ?></td>
             <td><?php echo $consulta['Consulta']; ?></td>
             <td><?php if($consulta['Contestado']=="1"){echo ("Sí");}
                       if($consulta['Contestado']=="0"){echo ("No");}?></td>
             <td><a href="<?php echo base_url('consultas/update/'.$consulta['ID']);?>" class="btn btn-primary btn-sm">Marcar como Leído</a></td>

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
      $('#consulta-list').DataTable();
    });
</script>
</body>
</html>