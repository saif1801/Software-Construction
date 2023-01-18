<?php
require_once 'program.php';
require_once 'programbusiness.php';

$programId = $_POST['programId'];
$duration = $_POST['duration'];
$name = $_POST['name'];

$program = new Program($programId, $duration, $name);
$programBusiness = new ProgramBusiness();
$result = $programBusiness->createProgram($program);

if ($result) {
    echo "Program created successfully.";
} else {
    echo "Error creating program.";
}
?>





