<!DOCTYPE html>
<html>
  <head>
    <title>Notifications</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
              <a class="nav-link" href="#">Notifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="container-fluid mt-5">
      <h1 class="text-center">Notifications</h1>
      <div class="row">
        <?php
          require_once 'notificationbusiness.php';
          $notificationBusiness = new NotificationBusiness();
          $notifications = $notificationBusiness->getAllNotifications();
          foreach ($notifications as $notification) {
            echo '<div class="col-md-4 mb-3">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">ID: ' . $notification->getId() . '</h5>';
            echo '<p class="card-text">Type: ' . $notification->getType() . '</p>';
            echo '<p class="card-text">Description: ' . $notification->getDescription() . '</p>';
            echo '<a href="' . $notification->getFileLink() . '" class="btn btn-primary">File Link</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
        ?>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
