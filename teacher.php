<?php
  class Teacher {
    private $id;
    private $firstName;
    private $lastName;
    private $contact;
    private $degree;
    private $specialization;
    public function setter($id, $firstName, $lastName, $contact, $degree, $specialization) {
      $this->id = $id;
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->contact = $contact;
      $this->degree = $degree;
      $this->specialization = $specialization;
  }
    public function getId() {
      return $this->id;
    }
    public function setId($id) {
      $this->id = $id;
    }
    public function getFirstName() {
      return $this->firstName;
    }
    public function setFirstName($firstName) {
      $this->firstName = $firstName;
    }
    public function getLastName() {
      return $this->lastName;
    }
    public function setLastName($lastName) {
      $this->lastName = $lastName;
    }
    public function getContact() {
      return $this->contact;
    }
    public function setContact($contact) {
      $this->contact = $contact;
    }
    public function getDegree() {
      return $this->degree;
    }
    public function setDegree($degree) {
      $this->degree = $degree;
    }
    public function getSpecialization() {
      return $this->specialization;
    }
    public function setSpecialization($specialization) {
      $this->specialization = $specialization;
    }

    public function update($data) {
      $this->id = $data['id'];
      $this->firstName = $data['firstName'];
      $this->lastName = $data['lastName'];
      $this->contact = $data['contact'];
      $this->degree = $data['degree'];
      $this->specialization = $data['specialization'];
  }
  }
