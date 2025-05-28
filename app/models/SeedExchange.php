<?php
namespace formacom\models;
use PDO;

class SeedExchange {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM seed_exchange ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($user_id, $title, $description, $image = null) {
        $stmt = $this->db->prepare("INSERT INTO seed_exchange (user_id, title, description, image, created_at) VALUES (?, ?, ?, ?, NOW())");
        return $stmt->execute([$user_id, $title, $description, $image]);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM seed_exchange WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $title, $description, $image = null) {
        $stmt = $this->db->prepare("UPDATE seed_exchange SET title = ?, description = ?, image = ? WHERE id = ?");
        return $stmt->execute([$title, $description, $image, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM seed_exchange WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
