<?php
require_once 'teacher.php';
require_once 'teacherbusiness.php';

$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$contact = $_POST['contact'];
$degree = $_POST['degree'];
$specialization = $_POST['specialization'];

$teacher = new Teacher();
$teacher->setter($id, $firstName, $lastName, $contact, $degree, $specialization);

$teacherBusiness = new TeacherBusiness();
$result = $teacherBusiness->addTeacher($teacher);

if ($result) {
  echo "Teacher added successfully.";
} else {
  echo "Error adding teacher.";
}
