
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
	<link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" >
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url(); ?>/css/styles.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/css/estilotarjetas2.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/755ec9a4a7.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

     <form method="post"  action="<?= site_url('/usuario/delete') ?>">
      <input type="hidden" name="ID" value="<?php echo $usuario['ID']; ?>">

    <div class="row">

        <?php if ( session()->ID_Rol == "1") { ?>
        <div class="col-md-6"><h3>¿Seguro que deseas darte de baja?</h3></div>
        <div class="col-md-3"><button class="btn btn-primary" type="submit">Confirmo</button></div>
        <?php } ?>
        

        <?php if ( session()->ID_Rol == "2") { ?>

        <div class="col-md-6"><h3>¿Seguro que deseas dar de baja a <?php echo $usuario['Nombre']; ?> ?</h3></div>
        <div class="col-md-3"><button class="btn btn-primary" type="submit">Confirmo</button></div>        
        <?php } ?>


    </div>

     </form>

</div>



</body>