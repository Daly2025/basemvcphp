<?php
namespace formacom\core;
// app/core/Controller.php
abstract class Controller
{
    abstract public function index(...$params);

    public function view($view, $data = [])
    {
        $controllerFullName = get_class($this);
        $parts = explode('\\', $controllerFullName);
        $className = end($parts);
        // Convertimos a minúsculas y removemos la palabra "Controller" para obtener el nombre de la carpeta
        // Convertir SeedExchange a seed-exchange
        $controllerName = strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', str_replace("Controller", "", $className)));
        require_once './app/views/partials/header.php';
        require_once './app/views/'.$controllerName.'/'. $view . '.php';
        require_once './app/views/partials/footer.php';
    }
}
