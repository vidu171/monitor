<?php
/**
 * Created by PhpStorm.
 * User: vidu
 * Date: 15/4/18
 * Time: 6:22 PM
 */
session_start();
session_destroy();
header('Location: ' . "/", true, ($permanent === true) ? 301 : 302);


?>