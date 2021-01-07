<?php
class Helper {
    public static function hashPassword($password) {
        $salt = '$1$hHXfCc0W$2xD/5qYtzUc3Mo98lX82S1';
        return crypt($password, $salt);
    }

    public static function comparePassword($password_input, $password_user) {
        return hash_equals($password_user, crypt($password_input, $password_user));
    }
}