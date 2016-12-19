<?php

include 'session.php';
include 'config.php';
include 'DataBase.php';
/* 
 * zblShop登录类
 */

if(empty($_REQUEST['usernmae'])&&empty($_REQUEST['password']))
{
    echo '1';
}


