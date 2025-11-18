<?php

class Course {

    private $conn;
    private $table = "courses";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function all() {
        $sql = "SELECT * FROM $this->table ORDER BY id DESC";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);   // <-- SANGAT PENTING
    }

    public function create($data) {
        $name = $data['name'];
        $sks = $data['sks'];

        $sql = "INSERT INTO $this->table (name, sks)
                VALUES ('$name', '$sks')";
        return $this->conn->query($sql);
    }

    public function find($id) {
        $sql = "SELECT * FROM $this->table WHERE id=$id";
        return $this->conn->query($sql)->fetch_assoc();
    }

    public function update($data) {
        $id = $data['id'];
        $name = $data['name'];
        $sks = $data['sks'];

        $sql = "UPDATE $this->table 
                SET name='$name', sks='$sks'
                WHERE id=$id";

        return $this->conn->query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM $this->table WHERE id=$id";
        return $this->conn->query($sql);
    }
}
