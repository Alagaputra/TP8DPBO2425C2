<?php

require_once __DIR__ . "/../models/Lecturer.php";

class LecturersController {

    private $lecturer;

    public function __construct($db) {
        $this->lecturer = new Lecturer($db);
    }

    public function index() {
        $data = $this->lecturer->all();
        include __DIR__ . "/../views/lecturers/index.php";
    }

    public function create() {
        include __DIR__ . "/../views/lecturers/create.php";
    }

    public function store() {
        $this->lecturer->create($_POST);
        header("Location: index.php?route=lecturers");
        exit;
    }

    public function edit() {
        $row = $this->lecturer->find($_GET['id']);
        include __DIR__ . "/../views/lecturers/edit.php";
    }

    public function update() {
        $this->lecturer->update($_POST);
        header("Location: index.php?route=lecturers");
        exit;
    }

    public function delete() {
        $this->lecturer->delete($_GET['id']);
        header("Location: index.php?route=lecturers");
        exit;
    }
}
