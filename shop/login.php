<?php
//admin login
include '../src/config.php';
$url_path=$config['url_path'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ZBL购物商场</title>
<link type="text/css" rel="stylesheet" href="<?php echo $url_path;?>plugins/bootstrap/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $url_path;?>resources/css/style.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $url_path;?>plugins/navcar/css/nav.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $url_path;?>plugins/layer/skin/default/layer.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $url_path;?>resources/css/signin.css"/>
  </head>

  <body>

    <div class="container">

        <form class="form-signin" role="form" action="<?php echo $url_path;?>src/shop_login.php" onsubmit="return doSubmit();">
        <h2 class="form-signin-heading">登录ZBL商城</h2>
        <input type="text" name="username" id="username" class="form-control" placeholder="输入账号" required autofocus>
        <input type="password" name="password" id="password" class="form-control" placeholder="输入密码" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">记住我
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      </form>

    </div> <!-- /container -->
<script type="text/javascript" src="<?php echo $url_path;?>plugins/jquery/jquery-3.1.1.js"></script>
<script type="text/javascript" src="<?php echo $url_path;?>plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $url_path;?>plugins/flycar/js/jquery.fly.min.js"></script>
<script type="text/javascript" src="<?php echo $url_path;?>plugins/navcar/js/nav.js"></script>
<script type="text/javascript" src="<?php echo $url_path;?>plugins/layer/layer.js"></script>
<script type="text/javascript">
    function doSubmit()
    {
       if(check_name()&&check_password())
       {
           return true;
       }
       else
       {
           return false;
       }
    }
    
    function check_name()
    {
        var name=$('#username').val();
        var patt = new RegExp(/^[a-zA-Z0-9]\w{2,11}[a-zA-Z0-9]$/);
        var flag=patt.test(name);
        if(flag)
        {

            return true;
        }
        else
        { 
           
           layer.msg('账号只能以字母，数字大于0开头，字母或数字结尾，长度大于2小于13位！');      
           $('#username').focus();
           return false;
        }

    }
    
    function check_password()
    {
        var password=$('#password').val();
        var patt = new RegExp(/^[a-zA-Z1-9]\w{2,11}[a-zA-Z0-9]$/);
        var flag=patt.test(password);
        if(flag)
        {
            $('#password').css("border","1px solid green");
            return true;
        }
        else
        {
            
           layer.msg('密码只能以字母，数字大于0开头，字母或数字结尾，长度大于2小于13位！');   
           $('#password').focus();
           return false;
        }
    }

</script>
 </body>
</html>
