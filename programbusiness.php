<?php
require_once 'programdata.php';
class ProgramBusiness {
    private $programData;

    public function __construct() {
        $this->programData = new ProgramData();
    }

    public function getAllPrograms() {
        return $this->programData->getAllPrograms();
    }
    public function createProgram($program) {
        return $this->programData->createProgram($program);
    }
    
}
?>