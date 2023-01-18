<?php
require_once 'coursedata.php';
class CourseBusiness {
    private $courseData;

    public function __construct() {
        $this->courseData = new CourseData();
    }

    public function getCoursesByProgramId($programId) {
        return $this->courseData->getCoursesByProgramId($programId);
    }

    public function createCourse($course) {
        return $this->courseData->createCourse($course);
    }
}


?>