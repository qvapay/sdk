<?php

namespace Qvapay\sdk\Models;

class User
{
    private $username;
    private $name;
    private $lastname;
    private $email;
    private $logo;
    private $bio;
    private $uuid;

    /**
     * Returns the Logged In Username
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Returns the Logged In Name
     */
    public function getName() {
        return $this->name;
    }
    /**
     * Returns the Logged In Lastname
     */
    public function getLastname() {
        return $this->lastname;
    }
    /**
     * Returns the Logged In email
     */
    public function getEmail() {
        return $this->email;
    }
    /**
     * Returns the Logged In Logo
     */
    public function getLogo() {
        return $this->logo;
    }
    /**
     * Returns the Logged In Bio
     */
    public function getBio() {
        return $this->bio;
    }
    /**
     * Returns the Logged In uuid
     */
    public function getUuid() {
        return $this->uuid;
    }
}
