<?php
namespace formacom\controllers;
use formacom\core\Controller;
use formacom\models\SeedExchange;
use Illuminate\Database\Capsule\Manager as Capsule;

class SeedExchangeController extends Controller {
    public function index(...$params) {
        $db = Capsule::connection()->getPdo();
        $model = new SeedExchange($db);
        $exchanges = $model->getAll();
        $this->view('seed_exchange/index', ['exchanges' => $exchanges]);
    }
    public function create(...$params) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $db = Capsule::connection()->getPdo();
            $model = new SeedExchange($db);
            $user_id = $_SESSION['user_id'] ?? null;
            $title = $_POST['title'] ?? '';
            $description = $_POST['description'] ?? '';
            if ($user_id && $title && $description) {
                $model->create($user_id, $title, $description);
                header('Location: ' . base_url() . 'seed-exchange');
                exit;
            }
        }
        $this->view('seed_exchange/create');
    }
}
