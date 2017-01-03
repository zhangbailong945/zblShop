<?php
include 'session.php';
include 'config.php';
include 'DataBase.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class shop_login{
       
    function login($dbconfig,$username,$password)
    {
        $db=new DataBase($dbconfig);
        $sql="SELECT * FROM `user_info` WHERE 1=1 and user_name='".$username."' and user_password='".$password."'";
        //echo $sql;
        $data=$db->select($sql);
        return $data;
    }
}

if(!empty($_REQUEST['username'])&&!empty($_REQUEST['password']))
{
  $dbconfig=$config['db'];
  $obj=new shop_login();
  
  $username=$_REQUEST['username'];
  $password=$_REQUEST['password'];  
  //$username='user1';
  //$password='123456';
  $data=$obj->login($dbconfig,$username,$password);
  if(count($data)>0)
  {

      $_SESSION['user']=$data[0]['user_name'];
      header("Location: http://localhost/zblshop/shop/index.php");
      
  }
  else
  {
      //echo '失败！';
      header("Location: http://localhost/zblshop/shop/login.php");
  }
}
