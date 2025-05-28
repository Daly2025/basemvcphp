<?php
namespace formacom\controllers;
use formacom\core\Controller;
use formacom\models\SeedExchange;
use Illuminate\Database\Capsule\Manager as Capsule;

class SeedExchangeController extends Controller {
    public function index(...$params) {
        $db = Capsule::connection()->getPdo();
        $model = new SeedExchange($db);
        // Procesar formulario si es POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            $title = $_POST['title'] ?? '';
            $description = $_POST['description'] ?? '';
            $image = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = __DIR__ . '/../../assets/img/';
                $filename = uniqid() . '_' . basename($_FILES['image']['name']);
                $targetFile = $uploadDir . $filename;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                    $image = 'assets/img/' . $filename;
                }
            }
            if ($title && $description) {
                $model->create($user_id, $title, $description, $image);
                header('Location: ' . base_url() . 'seed-exchange');
                exit;
            }
        }
        $exchanges = $model->getAll();
        $this->view('index', ['exchanges' => $exchanges]);
    }

    public function verIntercambio($id) {
        $db = Capsule::connection()->getPdo();
        $exchangeModel = new \formacom\models\SeedExchange($db);
        $commentModel = new \formacom\models\SeedExchangeComment($db);
        $stmt = $db->prepare('SELECT * FROM seed_exchange WHERE id = ?');
        $stmt->execute([$id]);
        $exchange = $stmt->fetch(\PDO::FETCH_ASSOC);
        if (!$exchange) {
            header('Location: ' . base_url() . 'seed-exchange');
            exit;
        }
        $comments = $commentModel->getByExchange($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
            $content = $_POST['content'] ?? '';
            if ($content) {
                $commentModel->create($id, $_SESSION['user_id'], $content);
                // Asegura que base_url() termina con una barra
                $baseUrl = rtrim(base_url(), '/') . '/';
                header('Location: ' . $baseUrl . 'seed-exchange/verIntercambio/' . $id);
                exit;
            }
        }
        $this->view('view', compact('exchange', 'comments'));
    }
}
