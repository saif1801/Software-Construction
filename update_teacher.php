<?php
require_once 'teacher.php';
require_once 'teacherbusiness.php';

$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$contact = $_POST['contact'];
$degree = $_POST['degree'];
$specialization = $_POST['specialization'];

$data = array(
    'id' => $id,
    'firstName' => $firstName,
    'lastName' => $lastName,
    'contact' => $contact,
    'degree'=> $degree,
    'specialization' => $specialization
);

$teacher = new Teacher();
$teacher->update($data);

$teacherBusiness = new TeacherBusiness();
$result = $teacherBusiness->updateTeacher($teacher);

if ($result) {
    echo "Teacher updated successfully.";
} else {
    echo "Error updating teacher.";
}

?>