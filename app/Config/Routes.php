<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('ControlPagina');
$routes->setDefaultMethod('principal');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

//Rutas de front
$routes->get('/', 'ControlPagina::principal');
$routes->get('/comercializacion', 'ControlPagina::comercio');
$routes->get('/quienes_somos', 'ControlPagina::quienes');
$routes->get('/terminos', 'ControlPagina::terminos');
$routes->get('/congelados', 'ControlPagina::congelados');
$routes->get('/reposteria', 'ControlPagina::reposteria');
$routes->get('/sandwiches', 'ControlPagina::sandwiches');
$routes->get('/adm', 'ControlPagina::administrador');

$routes->get('/cuenta', 'ControlPagina::cuenta');

/*
//Rutas de front para clientes
//$routes->get('/1', 'ControlPaginaCliente::principal');
//$routes->get('/comercializacion1', 'ControlPaginaCliente::comercio');
//$routes->get('/quienes_somos1', 'ControlPaginaCliente::quienes');
//$routes->get('/terminos1', 'ControlPaginaCliente::terminos');
//$routes->get('/catalogo1', 'ControlPaginaCliente::catalogo');

//rutas de producto

$routes->get('products', 'ControlProducto::index');
$routes->get('products/create', 'ControlProducto::create');
$routes->post('products/store', 'ControlProducto::store');
$routes->get('products/edit/(:num)', 'ControlProducto::edit/$1');
$routes->post('products/update', 'ControlProducto::update');
$routes->get('products/anular/(:num)', 'ControlProducto::anular/$1');
$routes->get('products/recargar/(:num)', 'ControlProducto::recargar/$1');
$routes->post('products/anulo', 'ControlProducto::anulo');
$routes->post('products/recargo', 'ControlProducto::recargo');


//prueba

//$routes->get('products', 'ProductController::index');
//$routes->get('products/create', 'ProductController::create');
//$routes->post('products/store', 'ProductController::store');
//$routes->get('products/edit/(:num)', 'ProductController::edit/$1');
//$routes->post('products/update', 'ProductController::update');
//$routes->get('products/delete/(:num)', 'ProductController::delete/$1');

//rutas de usuario
//$routes->get('/registrate', 'ControlUsuario::registro');

//$routes->post('/envioPost', 'CrearUsuario::validacion');


//Usuario

$routes->get('usuario_a', 'ControlUsuario::index');
$routes->get('usuario_a/registrar', 'ControlUsuario::createA');
$routes->get('registrate', 'ControlUsuario::create');
$routes->post('usuario_a/store', 'ControlUsuario::storeA');
$routes->post('usuario/store', 'ControlUsuario::store');
$routes->get('usuario/edit/(:num)', 'ControlUsuario::edit/$1');
$routes->get('usuario/edit_a/(:num)', 'ControlUsuario::editA/$1');
$routes->post('usuario/update', 'ControlUsuario::update');
$routes->post('usuario/valida/', 'ControlUsuario::valida');
$routes->get('usuario/baja/(:num)', 'ControlUsuario::baja/$1');
$routes->get('usuario/alta/(:num)', 'ControlUsuario::alta/$1');
$routes->post('usuario/alta2', 'ControlUsuario::alta2');
$routes->post('usuario/delete', 'ControlUsuario::delete');
$routes->get('login', 'ControlUsuario::login');
$routes->get('logout', 'ControlUsuario::logout');

//Contacto

$routes->get('contactos', 'ControlContacto::index');
$routes->get('contacto', 'ControlContacto::contacto');
$routes->post('contactos/store', 'ControlContacto::store');
$routes->get('contactos/edit/(:num)', 'ControlContacto::edit/$1');
$routes->get('contactos/update/(:num)', 'ControlContacto::update/$1');
$routes->get('contactos/delete/(:num)', 'ControlContacto::delete/$1');

//Consulta

$routes->get('consultas', 'ControlConsulta::index');
$routes->get('consulta', 'ControlConsulta::consulta');
$routes->post('consultas/store', 'ControlConsulta::guardoConsulta');
$routes->get('consultas/edit/(:num)', 'ControlConsulta::edit/$1');
$routes->get('consultas/update/(:num)', 'ControlConsulta::update/$1');
$routes->get('consultas/delete/(:num)', 'ControlConsulta::delete/$1');


//Carrito

//$routes->post('/Carrito/construc/', 'ControlCarrito::__construct');
$routes->get('/Carrito', 'ControlCarrito::verCarrito');
$routes->post('/agregarCarrito', 'ControlCarrito::agregarCarrito');
//$routes->post('/Carrito/realizarVenta/', 'ControlCarrito::realizarVenta');
//$routes->get('/Carrito/remover', 'ControlCarrito::removerProducto');
//$routes->post('/Carrito/actualizarCarrito/', 'ControlCarrito::actualizarCarrito');
//$routes->get('/Carrito/vaciar', 'ControlCarrito::vaciarCarrito');


//Facturas

$routes->get('/facturas', 'ControlVentas::verFacturas');
$routes->get('/ventas', 'ControlVentas::verVentas');
$routes->get('/compras', 'ControlVentas::verCompras');



//Ventas

$routes->get('detalle/(:num)', 'ControlVentas::verDetalle/$1');*/