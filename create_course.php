<?php
require_once 'course.php';
require_once 'coursebusiness.php';
$courseId = $_POST['courseId'];
$programId = $_POST['programId'];
$name = $_POST['name'];
$credithours = $_POST['credithours'];
$code = $_POST['code'];

$course = new Course($courseId, $name, $code, $credithours, $programId);
$courseBusiness = new CourseBusiness();
$result = $courseBusiness->createCourse($course);

if ($result) {
    echo "Course created successfully.";
} else {
    echo "Error creating Course.";
}
?>