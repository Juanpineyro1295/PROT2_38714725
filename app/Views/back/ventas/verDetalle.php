<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" >

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Detalle de Compra</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h1>Detalle de Compra</h1>

            
    <h3>A Nombre de: <?php echo $factura['Nombre']; ?> <?php echo $factura['Apellido']; ?></h3>
    <h3>Importe Total: $<?php echo $factura['ImporteTotal']; ?> </h3>
    <h3>Fecha de Compra: <?php echo $factura['Fecha']; ?> </h3>
    
  <div class="mt-3">
     <table class="table table-bordered" id="detallesfactura-list">
       <thead>
          <tr>
             <th>ID Prod</th>
             <th>Producto</th>
             <th>Cantidad</th>
             <th>Precio Unitario</th>
             <th>Subtotal</th>
          </tr>
       </thead>
       <tbody>
          <?php if($detallesfactura): ?>
          <?php foreach($detallesfactura as $key => $detallesfactura): ?>
          <tr>
             <td><?php echo $detallesfactura['ID_Producto']; ?></td>
             <td><?php echo $detallesfactura['Nombre']; ?></td>
             <td><?php echo $detallesfactura['Cantidad_producto']; ?></td>
             <td>$<?php echo $detallesfactura['Precio_Producto']; ?></td>
             <td>$<?php echo $detallesfactura['Subtotal']; ?></td>
             <td></td>
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
      $('#detallesfactura-list').DataTable();
    });
</script>
</body>
</html>