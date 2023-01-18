<!DOCTYPE html>
<html>
<head>
  <title>Edit Teacher Profile</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <style>
    #edit-form {
      display: none;
    }
    .header {
      background-color: black;
    }
    .header .navbar .navbar-brand {
      color: white;
    }
    .header .navbar .nav-item .nav-link {
      color: white;
    }
    .header .navbar .nav-item .nav-link:hover {
      color: #ccc;
    }
    .header .navbar .navbar-collapse {
      justify-content: flex-end;
    }
    .header .navbar .navbar-collapse .navbar-nav .nav-item .nav-link {
      padding: 10px;
    }
    .edit-profile-heading {
      text-align: center;
      padding-top: 30px;
    }
    .edit-form .form-group .form-control {
      margin-bottom: 20px;
    }
    .edit-form .form-group .form-control[type="submit"] {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">Department Name</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <h2 class="edit-profile-heading">Edit Teacher Profile</h2>
  <form method="post" class="form-inline">
    <div class="form-group">
<label for="id">Teacher ID:</label>
<input type="text" id="id" name="id" class="form-control mx-sm-3">
<input type="submit" value="Search" class="btn btn-black">
</div>

  </form>
  <?php
    require_once 'teacher.php';
    require_once 'teacherbusiness.php';
    if (isset($_POST['id'])) {
      $id = $_POST['id'];
      $teacherBusiness = new TeacherBusiness();
      $teacher = $teacherBusiness->getTeacher($id);
  }
  ?>
  
    <form action="update_teacher.php" method="post" id="edit-form" class="edit-form">
      <input type="hidden" name="id" value="<?php echo $teacher->getId(); ?>">
      <div class="form-group">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" value="<?php echo $teacher->getFirstName(); ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" value="<?php echo $teacher->getLastName(); ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" value="<?php echo $teacher->getContact(); ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="degree">Degree:</label>
        <input type="text" id="degree" name="degree" value="<?php echo $teacher->getDegree(); ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="specialization">Specialization:</label>
        <input type="text" id="specialization" name="specialization" value="<?php echo $teacher->getSpecialization(); ?>" class="form-control">
      </div>
      <div class="form-group">
        <input type="submit" name="update" value="Update Teacher" class="btn btn-black">
      </div>
    </form>
    <script>
      var form = document.getElementById("edit-form");
      form.style.display = "block";
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>  