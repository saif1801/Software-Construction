<?php
require_once 'notificationdata.php';
class NotificationBusiness {
    private $notificationData;
    public function __construct() {
        $this->notificationData = new NotificationData();
    }
    public function getAllNotifications() {
        return $this->notificationData->getAllNotifications();
    }
  public function createNotification($notification_id, $type, $description, $fileLink) {
    return $this->notificationData->createNotification($notification_id,$type, $description, $fileLink);
}
}
?>