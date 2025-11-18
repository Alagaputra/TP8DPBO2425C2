<?php

require_once __DIR__ . "/../models/Course.php";

class CoursesController {

    private $course;

    public function __construct($db) {
        $this->course = new Course($db);
    }

    public function index() {
        $data = $this->course->all();
        include __DIR__ . "/../views/courses/index.php";
    }

    public function create() {
        include __DIR__ . "/../views/courses/create.php";
    }

    public function store() {
        $this->course->create($_POST);
        header("Location: index.php?route=courses");
        exit;
    }

    public function edit() {
        $row = $this->course->find($_GET['id']);
        include __DIR__ . "/../views/courses/edit.php";
    }

    public function update() {
        $this->course->update($_POST);
        header("Location: index.php?route=courses");
        exit;
    }
    public function delete() {

    // Jika belum confirm → tampilkan halaman konfirmasi
    if (!isset($_GET['confirm'])) {
        $row = $this->course->find($_GET['id']);
        include __DIR__ . "/../views/courses/delete.php";
        return;
    }

    // Jika sudah confirm → hapus
    $this->course->delete($_GET['id']);
    header("Location: index.php?route=courses");
    exit;
}


}
