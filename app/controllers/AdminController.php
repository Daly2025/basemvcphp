<?php
namespace formacom\controllers;
use formacom\core\Controller;
use formacom\models\Customer;
use formacom\models\Address;

class AdminController extends Controller{
    public function index(...$params){
        $data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
        $this->view('home', $data);
    }
   
}
?>