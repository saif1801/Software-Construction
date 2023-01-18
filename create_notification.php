<?php
require_once 'notificationbusiness.php';
$notification_id = $_POST['notificationId'];
$type = $_POST['type'];
$description = $_POST['description'];
$fileLink = $_POST['fileLink'];

$notificationBusiness = new NotificationBusiness();
$notificationBusiness->createNotification($notification_id,$type, $description, $fileLink);

?>