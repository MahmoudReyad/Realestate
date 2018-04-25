<?php
/**
 * Created by PhpStorm.
 * User: MahmoudReyad
 * Date: 4/18/2018
 * Time: 10:57 PM
 */
session_start();
session_unset();
session_destroy();
header('Location:index.php');
exit();