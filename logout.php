<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 13-05-2017
 * Time: 21:25
 */
session_start();
session_destroy();
header ("Refresh: 1; index.php");
?>