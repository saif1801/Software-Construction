<?php
require_once'course.php';

class CourseData {
    private $conn;
    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "tss");
    }

    public function getCoursesByProgramId($programId) {
        $courses = array();
        $query = "SELECT * FROM Course WHERE program_id = " . $programId;
        $result = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $courses[] = new Course($row['course_id'], $row['name'], $row['code'], $row['credit_hours'], $row['program_id']);
        }
        return $courses;
    }
    public function createCourse($course) {
        $courseId = $course->getCourseId();
        $code = $course->getCode();
        $CreditHours = $course->getCreditHours();
        $name = $course->getName();
        $programId = $course->getProgramId();
        
        $query = "INSERT INTO Course (course_id, name, code, credit_hours, program_id) VALUES ('$courseId', '$name', '$code','$CreditHours', '$programId')";
        
        return mysqli_query($this->conn, $query);
    }
}
?>