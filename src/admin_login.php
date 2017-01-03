<?php

include 'session.php';
include 'config.php';
include 'DataBase.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class admin_login{
       
    function login($dbconfig,$username,$password)
    {
        $db=new DataBase($dbconfig);
        $sql="SELECT * FROM `admin` WHERE 1=1 and admin_name='".$username."' and admin_password='".$password."'";
        //echo $sql;
        $data=$db->select($sql);
        return $data;
    }
}

if(!empty($_POST['username'])&&!empty($_POST['password']))
{
  $dbconfig=$config['db'];
  $obj=new admin_login();
  
  $username=$_POST['username'];
  $password=$_POST['password'];  

  //$username='admin';
  //$password='admin';
  $data=$obj->login($dbconfig,$username,$password);
 
  if(count($data)>0)
  {

      $_SESSION['admin']=$data[0]['admin_name'];
      echo '1';
      
  }
  else
  {
      echo '0';

  }
   

}


