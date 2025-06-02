<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" >

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ver Facturas</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h1>Ventas Realizadas</h1>
    <?php
     if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="factura-list">
       <thead>
          <tr>
             <th>Nº</th>
             <th>ID Factura</th>
             <th>Usuario</th>
             <th>Monto Total</th>
             <th>Fecha</th>
             <th>Detalle</th>
          </tr>
       </thead>
       <tbody>
          <?php if($factura): ?>
          <?php foreach($factura as $key => $factura): ?>
          <tr>
             <td><?php echo $key+1; ?></td>
             <td><?php echo $factura['ID_Venta'];?></td>
             <td><?php echo $factura['Nombre'];?> <?php echo $factura['Apellido']; ?></td>
             <td>$<?php echo $factura['ImporteTotal']; ?></td>
             <td><?php echo $factura['Fecha']; ?></td>
             <td><a href="<?php echo base_url ('/detalle/'.$factura['ID_Venta']);?>" class="btn btn-primary btn-sm" style="border-color: black; background-color: #454545;">Ver Detalle</a></td>
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
      $('#factura-list').DataTable();
    });
</script>
</body>
</html>