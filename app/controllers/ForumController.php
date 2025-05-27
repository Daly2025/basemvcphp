<?php
namespace formacom\controllers;
use formacom\core\Controller;
use Illuminate\Database\Capsule\Manager as Capsule;
use formacom\models\ForumTopic;

class ForumController extends Controller {
    public function index(...$params) {
        $db = Capsule::connection()->getPdo();
        $model = new ForumTopic($db);
        $topics = $model->getAll();
        $this->view('index', ['topics' => $topics]);
    }
    public function create(...$params) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $db = Capsule::connection()->getPdo();
            $model = new ForumTopic($db);
            $user_id = $_SESSION['user_id'] ?? null;
            $title = $_POST['title'] ?? '';
            $content = $_POST['content'] ?? '';
            $image = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = __DIR__ . '/../../assets/img/';
                $filename = uniqid() . '_' . basename($_FILES['image']['name']);
                $targetFile = $uploadDir . $filename;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                    $image = 'assets/img/' . $filename;
                }
            }
            if ($user_id && $title && $content) {
                $model->create($user_id, $title, $content, $image);
                header('Location: ' . base_url() . 'forum');
                exit;
            }
        }
        $this->view('create');
    }
    public function verTema($id) {
        $db = \Illuminate\Database\Capsule\Manager::connection()->getPdo();
        $topicModel = new \formacom\models\ForumTopic($db);
        $commentModel = new \formacom\models\ForumComment($db);
        // Obtener el tema
        $stmt = $db->prepare('SELECT * FROM forum_topic WHERE id = ?');
        $stmt->execute([$id]);
        $topic = $stmt->fetch(\PDO::FETCH_ASSOC);
        if (!$topic) {
            header('Location: ' . base_url() . 'forum');
            exit;
        }
        $comments = $commentModel->getByTopic($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $author = $_POST['author'] ?? 'Anónimo';
            $content = $_POST['content'] ?? '';
            if ($content) {
                $commentModel->create($id, $author, $content);
                header('Location: ' . base_url() . 'forum/verTema/' . $id);
                exit;
            }
        }
        $this->view('view', ['topic' => $topic, 'comments' => $comments]);
    }
}
