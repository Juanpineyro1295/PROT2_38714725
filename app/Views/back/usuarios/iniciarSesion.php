<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Iniciar Sesion</title>
        
        <script src="js/all.js"></script>
    </head>
    <body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Iniciar Sesion</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url();?>/usuario/valida">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name="email" type="text" placeholder="Ingresa tu direccion"/>
                                                <label for="inputEmail">Direccón de Correo</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Password" name="Password" type="password" placeholder="Ingresa tu contraseña" />
                                                <label for="inputPassword">Contraseña</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html"></a>
                                                <button class="btn btn-primary" type="submit" style="border-color: black; background-color: #454545;">Iniciar Sesion</button>
                                            </div>
                                            <?php if(isset($validation)){ ?>
                                            <div class="alert alert-danger">
                                            <?php echo $validation->listErrors(); ?>
                                            </div>
                                            <?php  } ?>
                                            <?php if(isset($error)){ ?>
                                            <div class="alert alert-danger">
                                            <?php echo $error; ?>
                                            </div>
                                            <?php  } ?>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="registrate">No tienes una cuenta? Registrate!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
