<?php

class Program {
    private $programId;
    private $duration;
    private $name;

    public function __construct($programId, $duration, $name) {
        $this->programId = $programId;
        $this->duration = $duration;
        $this->name = $name;
    }

    public function getProgramId() {
        return $this->programId;
    }

    public function getDuration() {
        return $this->duration;
    }

    public function getName() {
        return $this->name;
    }
}
?>