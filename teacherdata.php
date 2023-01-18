<?php
  require_once'teacher.php';
  class TeacherData {
    private $conn;
    public function __construct() {
      $this->conn = mysqli_connect("localhost", "root", "", "tss");
    }
    public function getAllTeachers() {
      $query = "SELECT * FROM teacher ORDER BY last_name";
      $result = mysqli_query($this->conn, $query);
      $teachers = array();
      while ($row = mysqli_fetch_assoc($result)) {
        $teacher = new Teacher();
        $teacher->setId($row['teacher_id']);
        $teacher->setFirstName($row['first_name']);
        $teacher->setLastName($row['last_name']);
        $teacher->setContact($row['contact']);
        $teacher->setDegree($row['degree']);
        $teacher->setSpecialization($row['specialization']);
        array_push($teachers, $teacher);
      }
    mysqli_close($this->conn);
      return $teachers;
    }

    public function addTeacher(Teacher $teacher) {
      $query = "INSERT INTO teacher (teacher_id, first_name, last_name, contact, degree, specialization) VALUES ('".$teacher->getId()."','".$teacher->getFirstName()."','".$teacher->getLastName()."','".$teacher->getContact()."','".$teacher->getDegree()."','".$teacher->getSpecialization()."')";
      $result = mysqli_query($this->conn, $query);
      mysqli_close($this->conn);
      return $result;
    }
    public function getTeacher($id) {
      $query = "SELECT * FROM teacher WHERE teacher_id = '$id'";
      $result = mysqli_query($this->conn, $query);
      $teacher = new Teacher();
      while ($row = mysqli_fetch_assoc($result)) {
          $teacher->setId($row['teacher_id']);
          $teacher->setFirstName($row['first_name']);
          $teacher->setLastName($row['last_name']);
          $teacher->setContact($row['contact']);
          $teacher->setDegree($row['degree']);
          $teacher->setSpecialization($row['specialization']);
      }
      mysqli_close($this->conn);
      return $teacher;
    }
    public function updateTeacher(Teacher $teacher) {
      $query = "UPDATE teacher SET first_name = '".$teacher->getFirstName()."', last_name = '".$teacher->getLastName()."', contact = '".$teacher->getContact()."', degree = '".$teacher->getDegree()."', specialization = '".$teacher->getSpecialization()."' WHERE teacher_id = '".$teacher->getId()."'";
      $result = mysqli_query($this->conn, $query);
      mysqli_close($this->conn);
      return $result;
    }
  }
