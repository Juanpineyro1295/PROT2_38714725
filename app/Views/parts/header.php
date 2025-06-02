<link href="/PROT1_38714725/assets/css/miestilo.css" rel="stylesheet" >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<header> 
<div class="grid-container">

  <div class="row">
    
  </div>
   
   <div class="titulo2"><h1 style="font-size: 80px;" >Muchas Nueces Vegan</h1></div>


 






<div class="container align-items-center" style="justify-content: center;">
  <?php if (!session()->estaLogeado) { ?>
  <div class="row align-items-center" style="justify-content: center;">
    <div class="col-2" style="justify-content: center;">
      <a href="<?php echo base_url ('/login') ?>"  class="btn btn-primary" style="border-color: black; background-color: #454545;">Iniciar Sesión</a>
    </div>
    <div class="col-2" style="justify-content: center;">
      <p style="text-align: center;">No tienes cuenta?</p>
    </div>
    <div class="col-2" style="justify-content: center;">
      <a href="<?php echo base_url ('/registrate') ?>" class="btn btn-primary" style="border-color: black; background-color: #454545;">Registrate</a>
    </div>
  </div>
</div>

<?php } ?>


      <div class="container align-items-center" style="justify-content: center;" > 
    <?php if ((session()->estaLogeado) && (session()->ID_Rol == "1")) { ?>
        <div class="row align-items-center" style="justify-content: center;">
          <div class="col-2" style="justify-content: center;">
      <img class="log" src="/PROT1_38714725/assets/img/cart.png" style="height: 35px; width: 35px;"><a href="<?php echo base_url ('/Carrito') ?>" class="btn btn-primary" style="border-color: black; background-color: #454545;">Mi Pedido</a>
            </div>
            <div class="col-3" tyle="justify-content: center;"><a href="/PROT1_38714725/compras" class="btn btn-primary" style="border-color: black; background-color: #454545;">Mis Compras Realizadas</a></div>
          <div class="col-2" style="justify-content: center;">
      <a href="<?php echo base_url ('/logout') ?>" class="btn btn-primary" style="border-color: black; background-color: #454545;">Salir</a>
            
          </div>
        </div>
        <div class="row align-items-center" style="justify-content: center; padding-top: 15px;">
          <div class="col-2" style="justify-content: center;">
      <a href="<?php echo base_url('usuario/edit/'.session()->ID);?>" class="btn btn-primary btn-sm" style="border-color: black; background-color: #454545;">Editar mi Información</a>
            
          </div>
          <div class="col-2" style="justify-content: center;">
      <a href="<?php echo base_url('usuario/baja/'.session()->ID);?>" class="btn btn-danger btn-sm">Darme de Baja</a>
            
          </div>
        </div>
   </div>
   <?php } ?>
   <?php if ((session()->estaLogeado) && (session()->ID_Rol == "2")) { ?>
    
                   <div class="titulo3"><a class="btn btn-primary" href="<?php echo base_url(); ?>/adm" style="border-color: black; background-color: #454545;">Administración</a></div> 
      <div class="titulo3" style="justify-content: center; padding-top: 15px;"><a href="<?php echo base_url ('/logout') ?>" class="btn btn-primary" style="border-color: black; background-color: #454545;">Salir</a></div>
                    
                <?php } ?>
    
    

</header>

