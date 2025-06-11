<?php
require_once 'config.php';

class Database extends Config
{
    public function insert($kind, $part, $protein, $kcal)
    {
        $sql = "INSERT INTO food(kind, part, protein, kcal) VALUES(:kind, :part, :protein, :kcal)";
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'kind' => $kind,
                'part' => $part,
                'protein' => $protein,
                'kcal' => $kcal
            ]);
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function read()
    {
        $sql = "SELECT * FROM food ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function readOne($id)
    {
        $sql = "SELECT * FROM food WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function update($id, $kind, $part, $protein, $kcal)
    {
        $sql = "UPDATE food SET kind = :kind, part = :part, protein = :protein, kcal = :kcal WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'kind' => $kind,
            'part' => $part,
            'protein' => $protein,
            'kcal' => $kcal,
            'id' => $id,
        ]);
        return true;

    }
    public function delete($id)
    {
        $sql = "DELETE FROM food WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return true;
    }
}


?>