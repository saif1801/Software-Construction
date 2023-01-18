<?php
  require_once 'teacherdata.php';
  class TeacherBusiness {
    private $teacherData;
    public function __construct() {
      $this->teacherData = new TeacherData();
    }
    public function getAllTeachers() {
      return $this->teacherData->getAllTeachers();
    }
    public function addTeacher(Teacher $teacher) {
      return $this->teacherData->addTeacher($teacher);
    }
    public function getTeacher($id) {
      return $this->teacherData->getTeacher($id);
    }
    public function updateTeacher(Teacher $teacher) {
      return $this->teacherData->updateTeacher($teacher);
    }
}
