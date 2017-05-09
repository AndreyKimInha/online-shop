<?php

include_once './DatabaseManagement.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Andrey Kim
 */
class User {

    private $user_id;
    private $name;
    private $password;
    private $email;
    private $phone;
    private $balance;

    public function __construct() {
        $this->user_id = NULL;
        $this->name = NULL;
        $this->password = NULL;
        $this->email = NULL;
        $this->phone = NULL;
        $this->balance = 0.0;
    }

    public function set_user_id($user_id) {
        $this->user_id = $user_id;
    }

    public function get_user_id() {
        return $this->user_id;
    }

    public function set_name($name) {
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_password($password) {
        $this->password = $password;
    }

    public function get_password() {
        return $this->password;
    }

    public function set_email($email) {
        $this->email = $email;
    }

    public function get_email() {
        return $this->email;
    }

    public function set_phone($phone) {
        $this->phone = $phone;
    }

    public function get_phone() {
        return $this->phone;
    }

    public function set_balance($balance) {
        $this->balance = $balance;
    }

    public function get_balance() {
        return $this->balance;
    }

}
