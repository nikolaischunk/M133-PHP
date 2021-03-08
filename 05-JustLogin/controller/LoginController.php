<?php

namespace controller;

use model\UserModel;

class LoginController extends Controller
{
    public function canLogIn(string $username, string $password)
    {
        return (strlen($username) > 0 && strlen($password) > 0);
    }
}
