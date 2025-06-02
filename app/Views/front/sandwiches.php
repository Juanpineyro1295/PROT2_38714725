

<!DOCTYPE html>
<html>
<head>
    <link href="/CI_proyecto_pineyro_23/assets/css/miestilo.css" rel="stylesheet" >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sandwichería</title>
    
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url(); ?>/css/styles.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/css/estilotarjetas2.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/755ec9a4a7.js" crossorigin="anonymous"></script>

    

    
</head>

<body>
    <div class="container">
    <h1>Sandwichería</h1>

<?php
        $cart = \Config\Services::cart();
        $cartsessiondata = \Config\Services::cart();
        $cart = $cart->contents();
    ?>
<?php
     if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
      }
?>
<div class="row">

                    <?php if($producto): ?>
                    <?php foreach($producto as $key => $producto): ?>
                    <?php if($producto['Activo']==1 && $producto['ID_Categoria']==3): ?> 
<div class="col-3">
<div class="card" style="width: 18rem; height: 40rem; padding: 5px;">
  <img src="\<?php echo $producto['Imagen']; ?>" class="card-img-top" alt="" style="height: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $producto['Nombre']; ?></h5>
    <p class="card-text"><?php echo $producto['Descripcion']; ?></p>
    <p class="card-text"><small class="text-muted">Precio: $<?php echo $producto['Precio']; ?></small></p>
     <?php if ((session()->estaLogeado) && (session()->ID_Rol == "1")) { ?>
        <div class="card-body">           
                <?php 
                            echo form_open('agregarCarrito');
                            echo form_hidden('ID', $producto['ID']);
                            echo form_hidden('Nombre', $producto['Nombre']);
                            echo form_hidden('Precio', $producto['Precio']);
                            echo form_hidden('Imagen', $producto['Imagen']);
                ?> <div>
                    <?php 
                            $btn = array(
                                'class' => 'btn btn-secondary fuenteBotones',
                                'value' => 'Agregar al Carrito',
                                'name' => 'action'
                            );
                            echo form_submit($btn);
                            echo form_close();
                    ?>  </div> </div> <?php } ?>    
  </div>
</div>
      </div>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php endif; ?>

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




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>

