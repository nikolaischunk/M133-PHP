<?php 
namespace controller;
use model\UserModel;

abstract class Controller{
    public function __construct()
    {
        session_start();
    }

    public function isLoggedIn()
    {
        return isset($_SESSION["username"]);
    }

    public function getUser(){
        return new UserModel($_SESSION["username"], $_SESSION["password"]);
    }
}
