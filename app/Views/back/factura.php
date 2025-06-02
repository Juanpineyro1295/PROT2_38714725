<?php 
		$session_data = $this->session->userdata('estaLogueado');
	     $data['usuario'] = $session_data['usuario'];

		$compra=FALSE; ?>

		<?php foreach($ventas_cabecera->result() as $row){ 
			 if($data['usuario'] == $row->usuario){ 
		           $compra=TRUE; 
                }
            }?>


<?php if (!$compra) { ?>

	<div class="container">
		<br>
		<div class="well">
			<h1>No hay Compras</h1>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<!-- <br>
			<br>
			<br> -->

		</div>	
	</div>

<?php } else { ?>

	<div class="container">
		<br>
		<div class="well">
			<h1>Todas las Compras</h1>
		</div>	
		<br>
        
      <div class="table-responsive">
		<table id="tablaUsuarios"  class="table table-dark table-striped table-hover">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Nombre </th>
					<th>apellido</th>
					<th>descripcion</th>
					<th>Precio</th>				
					<th>cantidad</th>
					<th>total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
			  <?php foreach($ventas_cabecera->result() as $row){ ?>
			  	<?php if($data['usuario'] == $row->usuario){ ?>	
                    <td ><?php echo $row->fecha;  ?></td>
					<td ><?php echo $row->nombre;  ?></td>
					<td ><?php echo $row->apellido;  ?></td>
					<td ><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->precio; ?></td>
					<td ><?php echo $row->cantidad;  ?></td>
					<td ><?php echo $row->total;  ?></td>
        
				</tr>

			  	<?php } ?>

				<?php } ?>
			</tbody>
		</table>	
	</div>
		<br> <br><br><br>          
	</div>

<?php } ?>