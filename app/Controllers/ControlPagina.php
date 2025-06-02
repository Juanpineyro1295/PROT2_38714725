<?php

namespace App\Controllers;

class ControlPagina extends BaseController
{
    public function principal() :String
    {
        echo view('parts/header');
        echo view('parts/nav');
        echo view('front/principal');
        echo view('parts/footer'); 
    }

    public function comercio(){     
                    
                    echo view('parts/header');
                    echo view('parts/nav');
                    echo view('front/comercializacion');
                    //echo view('parts/ofertas');
                    echo view('parts/footer');    }
    
    public function contacto(){     

                    echo view('parts/header');
                    echo view('parts/nav');
                    echo view('front/contacto')
                    //if (session()->estaLogeado) {
                    //echo view('front/consulta');  }
                    //else{ echo view('front/contacto');}
                    //echo view('parts/ofertas');
                    echo view('parts/footer');    }
    
    public function quienes(){      

                    echo view('parts/header');
                    echo view('parts/nav');
                    echo view('front/quienessomos');
                    //echo view('parts/ofertas');
                    echo view('parts/footer');    }
    
    public function terminos(){     

                    echo view('parts/header');
                    echo view('parts/nav');
                    echo view('front/terminos');
                    //echo view('parts/ofertas');
                    echo view('parts/footer');    }
    
    public function congelados() {                             
                    //$producto = new Producto();
                    //$data['producto'] = $producto->orderBy('ID', 'DESC')->findAll();
                    echo view('parts/header');
                    echo view('parts/nav');
                    echo view('front/congelados', $data);
                    echo view('parts/footer');                }  


    public function reposteria() {                             
                    //$producto = new Producto();
                    //$data['producto'] = $producto->orderBy('ID', 'DESC')->findAll();
                    echo view('parts/header');
                    echo view('parts/nav');
                    echo view('front/repostería', $data);
                    echo view('parts/footer');                }  

    public function sandwiches() {                             
                    //$producto = new Producto();
                    //$data['producto'] = $producto->orderBy('ID', 'DESC')->findAll();
                    echo view('parts/header');
                    echo view('parts/nav');
                    echo view('front/sandwiches', $data);
                    echo view('parts/footer');                }  


    public function administrador(){
                    echo view('parts/header');
                    echo view('parts/navA');
                    echo view('front/administrador');
    }                


    public function cuenta(){
        return view('msg/cuenta');
    }

}
