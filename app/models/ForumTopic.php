<?php
namespace formacom\models;
use PDO;

class ForumTopic {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM forum_topic ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($user_id, $title, $content, $image = null) {
        $stmt = $this->db->prepare("INSERT INTO forum_topic (user_id, title, content, image, created_at) VALUES (?, ?, ?, ?, NOW())");
        return $stmt->execute([$user_id, $title, $content, $image]);
    }
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM forum_topic WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
