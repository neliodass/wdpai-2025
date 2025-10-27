<?php
require_once 'AppController.php';
class SecurityController extends AppController {
    public function login(){
        //TODO zwroc widok logowania, przetworz dane
        return $this->render('login',["message"=>"Błędne hasło"]);
    }
    public function register(){
        //TODO zwroc widok logowania, przetworz dane
        return $this->render('register',["message"=>"Błędne hasło"]);
    }
}