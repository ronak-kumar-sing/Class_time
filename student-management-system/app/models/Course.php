<?php

class Course {
    private $id;
    private $title;
    private $description;

    public function __construct($id, $title, $description) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function save() {
        // Code to save the course to the database
    }

    public static function find($id) {
        // Code to find a course by its ID
    }

    public static function all() {
        // Code to retrieve all courses
    }

    public function delete() {
        // Code to delete the course from the database
    }
}