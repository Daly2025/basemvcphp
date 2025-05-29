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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_SESSION['user_id'])) {
                $this->view('index', [
                    'exchanges' => $model->getAll(),
                    'error' => 'Debes iniciar sesión para publicar un intercambio de semillas.'
                ]);
                return;
            }
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
                } else {
                    $exchange['title'] = $title;
                    $exchange['description'] = $description;
                    $this->view('edit', ['exchange' => $exchange, 'error' => 'Error al subir la imagen.']);
                    return;
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

    public function create() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . base_url() . 'auth/login');
            exit;
        }
        $this->view('create');
    }

    public function edit($id) {
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . base_url() . 'auth/login');
            exit;
        }

        $db = Capsule::connection()->getPdo();
        $model = new SeedExchange($db);
        $exchange = $model->getById($id);
        error_log('SeedExchangeController: edit method - ID: ' . $id);
        error_log('SeedExchangeController: edit method - Exchange Data: ' . print_r($exchange, true));

        if (!$exchange || $exchange['user_id'] !== $_SESSION['user_id']) {
            header('Location: ' . base_url() . 'seed-exchange');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $description = $_POST['description'] ?? '';
            $image = $_POST['existing_image'] ?? $exchange['image']; // Keep existing image by default or use hidden field

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = __DIR__ . '/../../assets/img/';
                $filename = uniqid() . '_' . basename($_FILES['image']['name']);
                $targetFile = $uploadDir . $filename;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                    $image = 'assets/img/' . $filename;
                } else {
                    $exchange['title'] = $title;
                    $exchange['description'] = $description;
                    $this->view('edit', ['exchange' => $exchange, 'error' => 'Error al subir la imagen.']);
                    return;
                }
            }

            if ($title && $description) {
                try {
                    $model->update($id, $title, $description, $image);
                    header('Location: ' . base_url() . 'seed-exchange/verIntercambio/' . $id);
                    exit;
                } catch (\Exception $e) {
                    $exchange['title'] = $title;
                    $exchange['description'] = $description;
                    $this->view('edit', ['exchange' => $exchange, 'error' => 'Error al actualizar el intercambio: ' . $e->getMessage()]);
                    return;
                }
            } else {
                // If validation fails, reload the form with submitted data and an error message
                $exchange['title'] = $title;
                $exchange['description'] = $description;
                $this->view('edit', ['exchange' => $exchange, 'error' => 'El título y la descripción son obligatorios.']);
                return;
            }
        }

        header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0', false);
        header('Pragma: no-cache');
        $this->view('edit', ['exchange' => $exchange]);
    }

    public function delete($id) {
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . base_url() . 'auth/login');
            exit;
        }

        $db = Capsule::connection()->getPdo();
        $model = new SeedExchange($db);
        $exchange = $model->getById($id);
        error_log('SeedExchangeController: edit method - ID: ' . $id);
        error_log('SeedExchangeController: edit method - Exchange Data: ' . print_r($exchange, true));

        if (!$exchange || $exchange['user_id'] !== $_SESSION['user_id']) {
            header('Location: ' . base_url() . 'seed-exchange');
            exit;
        }

        $model->delete($id);
        header('Location: ' . base_url() . 'seed-exchange');
        exit;
    }

    public function verIntercambio($id) {
        $db = Capsule::connection()->getPdo();
        $exchangeModel = new \formacom\models\SeedExchange($db);
        $commentModel = new \formacom\models\SeedExchangeComment($db);
        $exchange = $exchangeModel->getById($id);
        error_log('SeedExchangeController: verIntercambio method - ID: ' . $id);
        error_log('SeedExchangeController: verIntercambio method - Exchange Data: ' . print_r($exchange, true));
        error_log('SeedExchangeController: verIntercambio method - Is exchange empty? ' . (empty($exchange) ? 'Yes' : 'No'));
        if (empty($exchange)) {
            header('Location: ' . base_url() . 'seed-exchange');
            exit;
        }
        $comments = $commentModel->getByExchange($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $content = $_POST['content'] ?? '';
            if ($content) {
                $user_id = $_SESSION['user_id'] ?? null;
                $author = isset($_SESSION['user_id']) ? null : ($_POST['author'] ?? 'Anónimo');
                $commentModel->create($id, $user_id, $content, $author);
                // Asegura que base_url() termina con una barra
                $baseUrl = rtrim(base_url(), '/') . '/';
                header('Location: ' . $baseUrl . 'seed-exchange/verIntercambio/' . $id);
                exit;
            }
        }
        $this->view('view', compact('exchange', 'comments'));
    }
}
