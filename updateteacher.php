<?php
require_once 'teacherbusiness.php';

$id = $_POST['teacher_id'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$contact = $_POST['contact'];
$degree = $_POST['degree'];
$specialization = $_POST['specialization'];

$teacher = new Teacher($id, "", $firstName, $lastName, $contact, $degree, $specialization);

$teacherBusiness = new TeacherBusiness();
$result = $teacherBusiness->updateTeacher($teacher);

if ($result) {
    header("location: teachers.php");
} else {
    echo "Error: " . mysqli_error($conn);
}