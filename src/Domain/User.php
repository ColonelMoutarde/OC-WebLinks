<?php

namespace WebLinks\DAO;

/**
 * Description of User
 *
 * @author luc
 */
class User {
    /**
     *
     * @var int
     */
    private $userId;
    /**
     *
     * @var string
     */
    private $userName;
    /**
     *
     * @var string
     */
    private $userPassword;
    /**
     *
     * @var string
     */
    private $userSalt;
    /**
     *
     * @var string
     */
    private $UserRole;
    /**
     * 
     * @return int
     */
    public function getUserId() {
        return $this->userId;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getUserPassword() {
        return $this->userPassword;
    }

    public function getUserSalt() {
        return $this->userSalt;
    }

    public function getUserRole() {
        return $this->UserRole;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
        return $this;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
        return $this;
    }

    public function setUserPassword($userPassword) {
        $this->userPassword = $userPassword;
        return $this;
    }

    public function setUserSalt($userSalt) {
        $this->userSalt = $userSalt;
        return $this;
    }

    public function setUserRole($UserRole) {
        $this->UserRole = $UserRole;
        return $this;
    }

}
