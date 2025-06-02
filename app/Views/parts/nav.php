<!--<nav class="navbar navbar-expand-lg navbar-light " style="justify-content: center;" >
  <div class="container-fluid" style="justify-content: center;" >
    <a class="navbar-brand" href="/PROT1_38714725/">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/PROT1_38714725/quienes_somos">Quienes Somos</a>
        <a class="nav-link active" aria-current="page" href="/PROT1_38714725/comercializacion">Comercialización</a>
        <a class="nav-link active" aria-current="page" href="/PROT1_38714725/terminos">Términos y Usos</a>
        <a class="nav-link active" aria-current="page" href="/PROT1_38714725/contacto">Contacto</a>
        <a class="nav-link active" aria-current="page" href="/PROT1_38714725/consulta">Consulta</a>
          -->




            <ul class="nav justify-content-center" style="background-color: #454545">
              <li class="nav-item">
                <a class="nav-link active" href="/PROT1_38714725" style="color: #F6F1E9; font-size: x-large;"> Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/PROT1_38714725/quienes_somos" style="color: #F6F1E9; font-size: x-large; ">Quienes Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/PROT1_38714725/comercializacion" style="color: #F6F1E9; font-size: x-large; ">Comercialización</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"style="color: #F6F1E9; font-size: x-large; ">Productos</a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/PROT1_38714725/reposteria"style=" font-size: x-large; ">Repostería</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/PROT1_38714725/sandwiches"style=" font-size: x-large; ">Sandwichería</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/PROT1_38714725/congelados"style=" font-size: x-large; ">Congelados</a></li>
              </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/PROT1_38714725/terminos" style="color: #F6F1E9; font-size: x-large; ">Términos y Usos</a>
              </li>
             <?php if (!session()->estaLogeado) { ?>
              <li class="nav-item">
                <a class="nav-link active" href="/PROT1_38714725/contacto" style="color: #F6F1E9; font-size: x-large; ">Contacto</a>
              </li>
              <?php } ?>
              <?php if (session()->estaLogeado) { ?>
               <li class="nav-item">
                <a class="nav-link active" href="/PROT1_38714725/consulta" style="color: #F6F1E9; font-size: x-large; ">Consulta</a>
              </li>
              <?php } ?>
          </ul>


        <!--<a class="nav-link active" aria-current="page" href="/PROT1_38714725/catalogo">Productos</a>
      </div>
    </div>
    <div class="row">
      <div class="col-5">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
    </div> 
  </div>
</nav>-->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
