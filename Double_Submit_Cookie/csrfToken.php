<?php
/**
 * Created by PhpStorm.
 * User: DELL 1
 * Date: 09/5/2018
 * Time: 09:04 PM
 */
class csrfToken {

    public static function checkToken($token,$cookiecsrf){
        if($cookiecsrf == $token){
            return true;
        }
    }


}
?>