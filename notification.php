<?php
    class Notification {
      private $id;
      private $type;
      private $description;
      private $fileLink;
      public function getId() {
        return $this->id;
      }
      public function setId($id) {
        $this->id = $id;
      }
      public function getType() {
        return $this->type;
      }
      public function setType($type) {
        $this->type = $type;
      }
      public function getDescription() {
        return $this->description;
      }
      public function setDescription($description) {
        $this->description = $description;
      }
      public function getFileLink() {
        return $this->fileLink;
      }
      public function setFileLink($fileLink) {
        $this->fileLink = $fileLink;
      }
    }
?>