<?php

namespace controller;

class LogoutController extends Controller
{
    public function logOut(){
        session_destroy();
        header("Location:login.php");
    }
}
