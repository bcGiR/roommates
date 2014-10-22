<?php

require('dbadapter.php');

Class User {
    private $userId;
    private $username;
    private $email;
    private $houseId;

    public function __construct($username) {
        $result = getUserByName($username);
        $count = mysql_num_rows($result);

        if (count === 1) { // user exists
            $row = mysql_fetch_row($result);

            $this->userId = $row[0];
            $this->username = $row[1];
            $this->email = $row[2];
            $this->houseId = $row[5];
        } else {
            throw new Exception('Username not found.');
        }
    }

    public function getId() {
        return $this->userId;
    }

    public function getName() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getHouseId() {
        return $this->houseId();
    }
}
