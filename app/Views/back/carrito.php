<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/pineyro_juan_P2/assets/css/miestilo.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>

<main>
            <?php
            $cart = \Config\Services::cart();
            $cartsessiondata = \Config\Services::cart();
            $cart = $cart->contents();
            ?>
            <?php if (!session('cart_contents')) : ?>
                <div class="warnings">
                    <br>
                    <?php if (session('msg')) : ?>
                        <p class="alert alert-<?= session('msg.type') ?>" role="alert"><b><?= session('msg.body') ?></b></p>
                    <?php endif; ?>
                    <div class="el-carrito-esta text-center">
                        <h1 class="titulo fs-1 fw-bold">Parece que no has pedido nada aún</h1>
                    </div>
                    <br>
                    <div class="volver-tienda text-center">
                    <div class="row"></div>                       
                        <button class="btn btn-outline-dark flex-shrink-0" type="button" onclick="location.href='<?php echo base_url(); ?>/'">Volver a Inicio</button>
                    </div>
                    <br>
                </div>
            <?php elseif (session('cart_contents')) : ?>
                <section class="h-100 gradient-custom">
                    <div class="container py-5">
                        <div class="row d-flex justify-content-center my-4">
                            <div class="col-md-8">
                                <div class="card mb-4">
                                    <div class="card-header py-3">
                                        <h5 class="mb-0">Carrito - <?= $cartsessiondata->totalItems(); ?> productos
                                            <?php if (session('msg')) : ?>
                                                <p class="alert alert-<?= session('msg.type') ?>" role="alert"><b><?= session('msg.body') ?></b></p>
                                            <?php endif; ?>
                                        </h5>
                                        <br>
                                        <form method="POST" action="<?php echo base_url(); ?>/ControlCarrito/actualizarCarrito">
        
                                            <button type="button" class="btn btn-outline-dark mt-auto btn-warning" onclick="location.href='<?php echo base_url(); ?>/ControlCarrito/vaciarCarrito'"><i class="fa fa-cart-arrow-down" aria-hidden="true"> Vaciar Pedido</i></button>
                                            <button type="submit" class="btn btn-outline-dark mt-auto btn-success"><i class="fa fa-refresh" aria-hidden="true"> Actualizar </i></button>
                                    </div>
                                    <div class="card-body">
                                        <!-- Single item -->
                                        <?php
                                        $i = 1;
                                        $productModel = model('Producto');
                                        foreach ($cart as $item) : ?>
                                            <input type="hidden" name="<?= $i ?>[rowid]" value="<?= $item['rowid'] ?>" />
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                                    <!-- Image -->
                                                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                                        <img src="\<?php echo $item['img']; ?>" class="w-100" alt="producto" />
                                                        <a href="#!">
                                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)">
                                                            </div>
                                                        </a>
                                                    </div>
                                                     <!--Image -->
                                                </div>

                                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                                    <!-- Data -->
                                                    <?php if ($productModel->find($item['id']) != NULL) : ?>
                                                        <p><strong><?= $item['name'] ?></strong></p>
                                                        <!--<p><strong>Stock actual: ?=$item['qty']?></strong></p>-->
                                                        <p><strong>Precio unitario: $<?= number_format($item['price'], 2, ',', '.') ?></strong></p>
                                                    <?php elseif ($productModel->find($item['id']) == NULL) : ?>
                                                        <p><strong><?= $item['name'] ?></strong></p>
                                                        <p><strong>Stock actual: 0</strong></p>
                                                        <p><strong>Precio unitario: $<?= number_format($item['price'], 2, ',', '.') ?></strong></p>
                                                    <?php endif; ?>
                                                    <!-- Data -->
                                                </div>

                                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                                    <!-- Quantity -->
                                                    <div class="d-flex mb-4" style="max-width: 300px">
                                                        <button type="button" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remover producto" onclick="location.href='<?php echo base_url(); ?>/ControlCarrito/removerProducto/<?php echo $item['rowid']; ?>'">
                                                            <i class="fas fa-trash">Quitar</i>
                                                        </button>
                                                        <button class="btn btn-primary px-3 me-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                            <i class="fas fa-minus">-</i>
                                                        </button>

                                                        <div class="form-outline">
                                                            <input id="form01" min="0" name="<?= $i ?>[qty]" value="<?= $item['qty'] ?>" type="number" class="form-control" />
                                                            <label class="form-label" for="form1">Cantidad</label>
                                                        </div>

                                                        <button class="btn btn-primary px-3 ms-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                            <i class="fas fa-plus">+</i>
                                                        </button>
                                                    </div>
                                                    <!-- Quantity -->

                                                    <!-- Price -->
                                                    <p class="text-start text-md-center">
                                                        <strong>Subtotal</strong><br>
                                                        <strong>$<?= number_format($item['subtotal'], 2, ',', '.'); ?></strong>
                                                    </p>
                                                    <!-- Price -->
                                                </div>
                                            </div>
                                        <?php
                                            $i++;
                                        endforeach; ?>
                                        <!-- Single item -->
                                        <hr class="my-4" />
                                    </div>
                                </div>
                                <!-- <div class="card mb-4 mb-lg-0">
                                    <div class="card-body">
                                        <a href="#" data-href="#" data-toggle="modal" data-target="#modelIdTarjeta" class="btn btn-info">Ver Tarjetas Aceptadas <i class="fa-brands fa-cc-visa"></i></a>
                                        <a href="#" data-href="#" data-toggle="modal" data-target="#modelIdEfectivo" class="btn btn-info">Ver Formas de pago en Efectivo <i class="fa-solid fa-sack-dollar"></i></a>
                                        <a href="#" data-href="#" data-toggle="modal" data-target="#modelIdMp" class="btn btn-info">Ver Cuenta de Mercado Pago <i class="fa-solid fa-credit-card"></i></a>

                                    </div>
                                </div> -->
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-header py-3">
                                        <h5 class="mb-0">Total</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                Envío
                                                <span>Gratis</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                                <div>
                                                    <strong>Monto total</strong>
                                                </div>
                                                <span><strong>$<?= number_format($cartsessiondata->total(), 2, ',', '.'); ?></strong></span>
                                            </li>
                                        </ul>
                                        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="location.href='<?php echo base_url(); ?>/ControlCarrito/realizarVenta'">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"> Comprar</i>
                                        </button>
                                        <div class="dropdown">
                                        <button class="btn btn-dark btn-lg btn-block dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Ver más Productos
                                            </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                         <li><a class="dropdown-item" href="/CI_proyecto_pineyro_23/reposteria">Repostería</a></li>
                                            <li><a class="dropdown-item" href="/CI_proyecto_pineyro_23/sandwiches">Sandwichería</a></li>
                                             <li><a class="dropdown-item" href="/CI_proyecto_pineyro_23/congelados">Congelados</a></li>
                                             </ul>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        </main>
    </div>
</body>