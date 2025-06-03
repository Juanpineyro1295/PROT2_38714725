<?php
namespace App\Controllers;
use App\Models\Usuario;
use CodeIgniter\Controller;
use App\Controllers\BaseController;

class ControlUsuario extends BaseController
{

  // show products list
    public function index() {   
        //$usuario = $this->usuario->where('activo', $activo)->findAll();
        //$data = ['titulo' => 'Usuarios', 'datos' => $usuarios];                          
        $usuario = new Usuario();
        $data['usuario'] = $usuario->orderBy('ID', 'DESC')->findAll();
                   echo view('parts/header');
                   echo view('parts/navA');
                   echo view('back/usuarios/verUsuarios' , $data);
    }

    // show create product form  
    public function create(){  
                   echo view('parts/header');
                   echo view('parts/nav'); 
                   echo view('back/usuarios/registro');
                   echo view('parts/footer');    
    }

    public function createA(){  
                   echo view('parts/header');
                   echo view('parts/navA');
                   echo view('back/usuarios/registroA');   
    }


    // save product data
    public function store() {
    $usuario = new Usuario();
    $validation = \Config\Services::validation();
    $request = \Config\Services::request();
    if ($this->request->getMethod() == "post" ) {
             $validation->setRules([
               'Nombre' => 'required',
               'Apellido' => 'required',
               'DNI' => 'required',
               'Telefono' => 'required',
               'Password' => 'required|min_length[8]',
               'Password2' => 'required|matches[Password]',
               'email'    => 'required|is_unique[usuario.email]',
               'calle' => 'required',
               'numero' => 'required',
               'localidad' => 'required',
               'CodPostal' => 'required',

             ],
             ["Nombre" => ["required" => 'No puede dejar este campo vacio',],
              "Apellido" => ["required" => 'No puede dejar este campo vacio',],
              "DNI" => ["required" => 'No puede dejar este campo vacio',],
              "Telefono" => ["required" => 'No puede dejar este campo vacio',],
              "email" => ["required" => 'No puede dejar este campo vacio',
                          "is_unique" => 'Este correo ya esta registrado',],
              "Password" => ["required" => 'No puede dejar este campo vacio',
                             "min_length" => 'La contraseña debe tener al menos 8 caracteres',],
              "Password2" => ["required" => 'No puede dejar este campo vacio',
                              "matches" => 'Las contraseñas no coinciden'],
              "calle" => ["required" => 'No puede dejar este campo vacio',],
              "numero" => ["required" => 'No puede dejar este campo vacio',],
              "localidad" => ["required" => 'No puede dejar este campo vacio',],
              "CodPostal" => ["required" => 'No puede dejar este campo vacio',],

           ]);
          if ($validation->withRequest($this->request)->run()) {
             $data = [
                'ID_Rol' => 1,
                'Activo' => 1,
                'Nombre' => $this->request->getPost('Nombre'),
                'Apellido'  => $this->request->getPost('Apellido'),
                'DNI' => $this->request->getPost('DNI'),
                'Telefono' => $this->request->getPost('Telefono'),
                'email' => $this->request->getPost('email'),     
                'Password' => password_hash($this->request->getPost('Password'),PASSWORD_BCRYPT),
                'calle' => $this->request->getPost('calle'),
                'numero' => $this->request->getPost('numero'),
                'localidad' => $this->request->getPost('localidad'),
                'CodPostal' => $this->request->getPost('CodPostal')
                   ];              
               $usuario->insert($data);  
                return redirect()->to(base_url() . '/login')->with('Msg', 'Usuario registrado con éxito!');
              }
              else{
                $data['errors'] = $validation->getErrors();
              }
                   echo view('parts/header');
                   echo view('parts/nav'); 
                   echo view('back/usuarios/registro', $data);
                   echo view('parts/footer');    

    }
    }

        //echo view('parts/header', $data);
        //echo view('parts/nav', $data);
        //echo view('front/principal', $data);
        //echo view('parts/ofertas', $data); 
        //echo view('parts/footer', $data); 


      public function storeA() {
        
         $usuario = new Usuario();
    $validation = \Config\Services::validation();
    $request = \Config\Services::request();
    if ($this->request->getMethod() == "post" ) {
             $validation->setRules([
               'Nombre' => 'required',
               'Apellido' => 'required',
               'DNI' => 'required',
               'Telefono' => 'required',
               'Password' => 'required|min_length[8]',
               'Password2' => 'required|matches[Password]',
               'email'    => 'required|is_unique[usuario.email]',
               'calle' => 'required',
               'numero' => 'required',
               'localidad' => 'required',
               'CodPostal' => 'required',

             ],
             ["Nombre" => ["required" => 'No puede dejar este campo vacio',],
              "Apellido" => ["required" => 'No puede dejar este campo vacio',],
              "DNI" => ["required" => 'No puede dejar este campo vacio',],
              "Telefono" => ["required" => 'No puede dejar este campo vacio',],
              "email" => ["required" => 'No puede dejar este campo vacio',
                          "is_unique" => 'Este correo ya esta registrado',],
              "Password" => ["required" => 'No puede dejar este campo vacio',
                             "min_length" => 'La contraseña debe tener al menos 8 caracteres',],
              "Password2" => ["required" => 'No puede dejar este campo vacio',
                              "matches" => 'Las contraseñas no coinciden'],
              "calle" => ["required" => 'No puede dejar este campo vacio',],
              "numero" => ["required" => 'No puede dejar este campo vacio',],
              "localidad" => ["required" => 'No puede dejar este campo vacio',],
              "CodPostal" => ["required" => 'No puede dejar este campo vacio',],

           ]);
          if ($validation->withRequest($this->request)->run()) {
             $data = [
                'ID_Rol' => 2,
                'Activo' => 1,
                'Nombre' => $this->request->getPost('Nombre'),
                'Apellido'  => $this->request->getPost('Apellido'),
                'DNI' => $this->request->getPost('DNI'),
                'Telefono' => $this->request->getPost('Telefono'),
                'email' => $this->request->getPost('email'),     
                'Password' => password_hash($this->request->getPost('Password'),PASSWORD_BCRYPT),
                'calle' => $this->request->getPost('calle'),
                'numero' => $this->request->getPost('numero'),
                'localidad' => $this->request->getPost('localidad'),
                'CodPostal' => $this->request->getPost('CodPostal')
                   ];              
               $usuario->insert($data);  
                return redirect()->to(base_url() . '/usuario_a')->with('Msg', 'Usuario Administrador registrado con éxito!');
              }
              else{
                $data['errors'] = $validation->getErrors();
              }
                   echo view('parts/header');
                   echo view('parts/navA'); 
                   echo view('back/usuarios/registroA', $data);
                    

    }
}




    // show product
    public function edit($ID) {

        $usuario = new Usuario();
        $data['usuario'] = $usuario->where('ID', $ID)->first();

          echo view('parts/header', );
          echo view('parts/nav', );
          echo view('back/usuarios/modificarUsuario', $data);
          echo view('parts/footer', );
                                                  
    }

    // update product data
    
    public function editA($ID) {

        $usuario = new Usuario();
        $data['usuario'] = $usuario->where('ID', $ID)->first();

          echo view('parts/header', );
          echo view('parts/navA', );
          echo view('back/usuarios/modificarUsuario', $data);
                                                  
    }

  
    public function update() {


       $usuario = new Usuario();
       $ID = $this->request->getVar('ID');

       $data = [
            'Nombre' => $this->request->getVar('Nombre'),
            'Apellido'  => $this->request->getVar('Apellido'),
            'DNI' => $this->request->getVar('DNI'),
            'Telefono' => $this->request->getVar('Telefono'),
            'email' => $this->request->getVar('email'),
            'Password' => $this->request->getVar('Password'),     
            'calle' => $this->request->getVar('calle'),
            'numero' => $this->request->getVar('numero'),
            'localidad' => $this->request->getVar('localidad'),
            'CodPostal' => $this->request->getVar('CodPostal')
        ];

        $usuario->update($ID, $data);
        if (session()->ID_Rol == "2") {
        return $this->response->redirect(site_url('/usuario_a'));
         } 
         else{
          return $this->response->redirect(site_url('/'));
         }
    }
  


      public function baja($ID) {

        $usuario = new Usuario();
        $data['usuario'] = $usuario->where('ID', $ID)->first();
        if ( session()->ID_Rol == "1") {
          echo view('parts/header', );
          echo view('parts/nav', );
          echo view('back/usuarios/baja', $data);
          echo view('parts/footer', );   }
          if ( session()->ID_Rol == "2"){
            echo view('parts/header', );
            echo view('parts/navA', );
            echo view('back/usuarios/baja', $data);
          }
                                                  
    }

    // delete product
    public function delete() {
        $usuario = new Usuario();
        $ID = $this->request->getVar('ID');
        $data = [
          'Activo' => 0
        ];
        $usuario->update($ID, $data);
        if (session()->ID_Rol == "2") {
        return $this->response->redirect(site_url('/usuario_a'));
         } 
         else{
               $session = session();
               $session->destroy();
               return redirect()->to(base_url() . '/');         }
    }

public function alta($ID){
      $usuario = new Usuario();
        $data['usuario'] = $usuario->where('ID', $ID)->first();

          echo view('parts/header', );
          echo view('parts/navA', );
          echo view('back/usuarios/alta', $data);
}


public function alta2(){
   $usuario = new Usuario();
        $ID = $this->request->getVar('ID');
        $data = [
          'Activo' => 1
        ];
        $usuario->update($ID, $data);
        return $this->response->redirect(site_url('/usuario_a'));
         
}

public function login()
  {
              echo view('parts/header');
              echo view('parts/nav');
              echo view('back/usuarios/iniciarSesion');
              //echo view('parts/ofertas'); 
              echo view('parts/footer'); 
}



  public function valida()
  {
      $usuario = new Usuario();
      if ($this->request->getMethod() == "post" ) {
      $email = $this->request->getPost('email');
      $Password = $this->request->getPost('Password');
      $datosUsuario = $usuario->where('email', $email)->first();
      if ($datosUsuario != null) {
        if (password_verify($Password, $datosUsuario['Password']) && $datosUsuario['Activo'] == 1) {
          $datosSesion = [
            'ID' => $datosUsuario['ID'],
            'ID_Rol' => $datosUsuario['ID_Rol'],
            'Activo' => $datosUsuario['Activo'],
            'Nombre' => $datosUsuario['Nombre'],
            'Apellido' => $datosUsuario['Apellido'],
            'DNI' => $datosUsuario['DNI'],
            'Telefono' => $datosUsuario['Telefono'],
            'email' => $datosUsuario['email'],
            'Password' => $datosUsuario['Password'],
            'calle' => $datosUsuario['calle'],
            'numero' => $datosUsuario['numero'],
            'localidad' => $datosUsuario['localidad'],
            'CodPostal' => $datosUsuario['CodPostal'],
            'estaLogeado' => true
          ];

          $session = session();
          $session->set($datosSesion);

          if(session()->ID_Rol == "2"){
               echo view('parts/header');
               echo view('parts/navA');
               echo view('front/administrador');
         } 
         else {
             echo view('parts/header' , $datosSesion );
             echo view('parts/nav', $datosSesion);
             echo view('front/principal');
             //echo view('parts/ofertas'); 
             echo view('parts/footer'); 
         }


          

        } else {

          $data['error'] = "La contraseña no coincide";

        return redirect()->back()->withInput()->with('El usuario no existe', $data['error']);


        }
      } else {
        $data['error'] = "El usuario no existe";
        return redirect()->back()->withInput()->with('El usuario no existe', $data['error']);

      }
    } else {
      $data = ['validation' => $this->validator];
       return redirect()->back()->withInput()->with('errors', $data['validation']);
        }
  

  }

  public function logout()
  {

    $session = session();
    $session->destroy();
    return redirect()->to(base_url() . '/');
  }
  
}


/*
public function redireccion(string $Password){
    $usuarios = $this->usuarios->where('Activo', 1)->findAll();
    $data = ['titulo' => 'Usuarios', 'datos' => $usuarios];
    $session = session();
    $userModel = new UsuariosModels();
    $id_user= $userModel->find(session()->id_usuario);
    if ($session->usuario == 'Administrador' && $id_user['contrasenia']) {
      echo view('header');
      echo view('contenido', $data);
      echo view('footer');
    } else {
      //echo view('/usuarios/productos');
      echo view('tienda');
      
    }
  

  */