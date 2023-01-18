<?php
class Course {
    private $courseId;
    private $name;
    private $code;
    private $creditHours;
    private $programId;

    public function __construct($courseId, $name, $code, $creditHours, $programId) {
        $this->courseId = $courseId;
        $this->name = $name;
        $this->code = $code;
        $this->creditHours = $creditHours;
        $this->programId = $programId;
    }

    public function getCourseId() {
        return $this->courseId;
    }

    public function getName() {
        return $this->name;
    }

    public function getCode() {
        return $this->code;
    }

    public function getCreditHours() {
        return $this->creditHours;
    }

    public function getProgramId() {
        return $this->programId;
    }
}

?>