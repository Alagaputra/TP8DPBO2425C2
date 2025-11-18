<?php

class Lecturer {

    private $conn;
    private $table = "lecturers";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function all() {
        $sql = "SELECT * FROM $this->table ORDER BY id DESC";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($data) {
        $name = $data['name'];
        $nidn = $data['nidn'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];

        $sql = "INSERT INTO $this->table (name, nidn, phone, join_date)
                VALUES ('$name','$nidn','$phone','$join_date')";
        return $this->conn->query($sql);
    }

    public function find($id) {
        $sql = "SELECT * FROM $this->table WHERE id=$id";
        return $this->conn->query($sql)->fetch_assoc();
    }

    public function update($data) {
        $id = $data['id'];
        $name = $data['name'];
        $nidn = $data['nidn'];
        $phone = $data['phone'];
        $join_date = $data['join_date'];

        $sql = "UPDATE $this->table 
                SET name='$name', nidn='$nidn', phone='$phone', join_date='$join_date'
                WHERE id=$id";
        return $this->conn->query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM $this->table WHERE id=$id";
        return $this->conn->query($sql);
    }
}
