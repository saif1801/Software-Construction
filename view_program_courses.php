<!DOCTYPE html>
<html>
<head>
    <title>Programs and Courses</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Department Name</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu Option 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu Option 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu Option 3</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <h1 class="text-center">Programs and Courses</h1>
    <form method="post" class="text-center">
        <div class="form-group">
<label for="programs">Select a program:</label>
<select class="form-control" name="program" id="programs">
<?php
                 require_once'programbusiness.php';
                 $programBusiness = new ProgramBusiness();
                 $programs = $programBusiness->getAllPrograms();
                 foreach ($programs as $program) {
                     echo '<option value="' . $program->getProgramId() . '">' . $program->getName() . '</option>';
                 }
             ?>
</select>
</div>
<br>
<input type="submit" class="btn btn-primary" value="Submit">
</form>
<br>
<?php
     require_once 'coursebusiness.php';
     if (isset($_POST['program'])) {
         $programId = $_POST['program'];
         $courseBusiness = new CourseBusiness();
         $courses = $courseBusiness->getCoursesByProgramId($programId);
         if (!empty($courses)) {
             echo '<table class="table table-bordered">';
             echo '<thead class="thead-light">';
             echo '<tr><th>Course Name</th><th>Course Code</th><th>Credit Hours</th></tr>';
             echo '</thead>';
             echo '<tbody>';
             foreach ($courses as $course) {
                 echo '<tr><td>' . $course->getName() . '</td><td>' . $course->getCode() . '</td><td>' . $course->getCreditHours() . '</td></tr>';
             }
             echo '</tbody>';
             echo '</table>';
         } else {
             echo '<p class="text-center">No courses found for the selected program.</p>';
         }
     }
 ?>

</body>
</html>
