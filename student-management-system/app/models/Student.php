<?php

class Student {
    private $id;
    private $name;
    private $enrolledCourses;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
        $this->enrolledCourses = [];
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function enrollCourse($course) {
        $this->enrolledCourses[] = $course;
    }

    public function getEnrolledCourses() {
        return $this->enrolledCourses;
    }

    public function removeCourse($courseId) {
        foreach ($this->enrolledCourses as $key => $course) {
            if ($course->getId() === $courseId) {
                unset($this->enrolledCourses[$key]);
                break;
            }
        }
    }
}