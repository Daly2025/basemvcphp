<?php
namespace formacom\models;
use PDO;

class ForumComment {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    public function getByTopic($topic_id) {
        $stmt = $this->db->prepare("SELECT * FROM forum_comment WHERE topic_id = ? ORDER BY created_at ASC");
        $stmt->execute([$topic_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($topic_id, $author, $content) {
        $stmt = $this->db->prepare("INSERT INTO forum_comment (topic_id, author, content, created_at) VALUES (?, ?, ?, NOW())");
        return $stmt->execute([$topic_id, $author, $content]);
    }
}
