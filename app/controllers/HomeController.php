<?php
namespace formacom\controllers;
use formacom\core\Controller;

class HomeController extends Controller{
    public function index(...$params){
        $this->view("home");
    }
    
    public function about(...$params){
        $this->view("about");
    }
    
    public function contact(...$params){
        $this->view("contact");
    }
    
    public function services(...$params){
        $this->view("services");
    }
}