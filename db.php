<?php
    require_once 'config.php'

    class Database extend Config {
        public function insert($kind, $part, $protein, $kcal) {
            $sql = "INSERT INTO users(kind, part, protein, kcal) VALUES(:kind, :part, :protein, :kcal)"
            $stmt = $this->conn->prepare($sql);
            $stmt->execute ( [
                'kind' => $kind,
                'part' => $part,
                'protein' => $protein,
                'kcal' => $kcal
            ]);
            return true;
        }
        
        public function read() {
            $sql = "SELECT * FROM users ORDER BY id DESC";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }
        
    }
?>
