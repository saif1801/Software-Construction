<?php
require_once'program.php';

class ProgramData {
    private $conn;
    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "tss");
    }
    public function getAllPrograms() {
        $programs = array();
        $query = "SELECT * FROM Program";
        $result = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $programs[] = new Program($row['program_id'], $row['duration'], $row['name']);
        }
        return $programs;
    }
    public function createProgram($program) {
        $programId = $program->getProgramId();
        $duration = $program->getDuration();
        $name = $program->getName();
        
        $query = "INSERT INTO Program (program_id, duration, name) VALUES ('$programId', '$duration', '$name')";
        
        return mysqli_query($this->conn, $query);
    }
}
?>