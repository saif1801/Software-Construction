<!DOCTYPE html>
<html>
  <head>
    <title>List of Teachers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      /* Flex box container styles */
      .teacher-flex-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }
      /* Flex box item styles */
      .teacher-flex-item {
        width: 30%;
        padding: 2%;
        background-color: #f1f1f1;
        box-sizing: border-box;
        text-align: center;
      }
      /* Add space between flex items */
      .teacher-flex-item:not(:nth-of-type(3n)) {
        margin-right: 3%;
      }
      /* Clear floats after every row of flex items */
      .teacher-flex-item:nth-of-type(3n) {
        margin-right: 0;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Department Name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul
class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="nav-link" href="#">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Teachers</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Contact</a>
</li>
</ul>
</div>
</nav>
<div class="container">
<h1>List of Teachers</h1>
<div class="teacher-flex-container">
<?php
require_once 'teacherbusiness.php';
$teacherBusiness = new TeacherBusiness();
$teachers = $teacherBusiness->getAllTeachers();
foreach ($teachers as $teacher) {
?>
<div class="teacher-flex-item">
<div class="card" style="width:100%">
<div class="card-body">
<h5 class="card-title"> <?php echo $teacher->getFirstName() . " " . $teacher->getLastName(); ?> </h5>
<p class="card-text">Contact: <?php echo $teacher->getContact(); ?></p>
<p class="card-text">Degree: <?php echo $teacher->getDegree(); ?></p>
<p class="card-text">Specialization: <?php echo $teacher->getSpecialization(); ?></p>
</div>
</div>
</div>
<?php
         }
       ?>
</div>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>