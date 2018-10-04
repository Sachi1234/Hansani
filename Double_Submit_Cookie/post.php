<?php
/**
 * Created by PhpStorm.
 * User: DELL 1
 * Date: 09/3/2018
 * Time: 11:21 PM
 */

require_once 'csrfToken.php';


$val = $_POST["token"];


if(isset($_POST['updatepost'])){
    if(token::checkToken($val,$_COOKIE['csrfCookie'])){
        echo "hello ".$_POST['updatepost'];
    }
    else{
        echo "wrong".$_COOKIE['csrfCookie'];
    }
}
