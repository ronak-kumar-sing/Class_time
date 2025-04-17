<?php

class Grade {
    private $id;
    private $studentId;
    private $courseId;
    private $score;

    public function __construct($id, $studentId, $courseId, $score) {
        $this->id = $id;
        $this->studentId = $studentId;
        $this->courseId = $courseId;
        $this->score = $score;
    }

    public function getId() {
        return $this->id;
    }

    public function getStudentId() {
        return $this->studentId;
    }

    public function getCourseId() {
        return $this->courseId;
    }

    public function getScore() {
        return $this->score;
    }

    public function setScore($score) {
        $this->score = $score;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'studentId' => $this->studentId,
            'courseId' => $this->courseId,
            'score' => $this->score,
        ];
    }
}