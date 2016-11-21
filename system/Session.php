<?php

class Session {
    public static function start() {
        session_start();
    }


    public static function get($key) {
        Session::start();
        return $_SESSION[$key];
    }
}
