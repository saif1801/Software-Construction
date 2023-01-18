<?php
require_once 'notification.php';
class NotificationData {
    private $conn;
    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "tss");
    }
    public function getAllNotifications() {
        $query = "SELECT * FROM Notification";
        $result = mysqli_query($this->conn, $query);
        $notifications = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $notification = new Notification();
                $notification->setId($row['notification_id']);
                $notification->setType($row['type']);
                $notification->setDescription($row['description']);
                $notification->setFileLink($row['file_link']);
                array_push($notifications, $notification);
            }
        }
        mysqli_close($this->conn);
        return $notifications;
    }
    public function createNotification($notification_id,$type, $description, $fileLink) {
        $query = "INSERT INTO Notification (notification_id,type, description, file_link) VALUES ('$notification_id','$type', '$description', '$fileLink')";
        return mysqli_query($this->conn, $query);
    }
  }
  ?>
  