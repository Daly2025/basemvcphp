<?php
namespace formacom\models;
use PDO;

class SeedExchangeComment {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    public function getByExchange($exchange_id) {
        $stmt = $this->db->prepare("
            SELECT 
                c.*, 
                COALESCE(u.username, c.author_name) as username 
            FROM seed_exchange_comment c 
            LEFT JOIN user u ON c.user_id = u.user_id 
            WHERE exchange_id = ? 
            ORDER BY created_at ASC
        ");
        $stmt->execute([$exchange_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($exchange_id, $user_id, $content, $author_name = null) {
        $stmt = $this->db->prepare("INSERT INTO seed_exchange_comment (exchange_id, user_id, content, author_name, created_at) VALUES (?, ?, ?, ?, NOW())");
        return $stmt->execute([$exchange_id, $user_id, $content, $author_name]);
    }
}
