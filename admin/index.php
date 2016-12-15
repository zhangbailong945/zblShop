<?php
//admin
include '../src/config.php';
$url_path=$config['url_path'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>zblShop后台管理系统</title>

<link type="text/css" rel="stylesheet" href="<?php echo $url_path;?>plugins/bootstrap/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo $url_path;?>plugins/bootstrap/css/bootstrap-theme.css">
<link type="text/css" rel="stylesheet" href="<?php echo $url_path;?>resources/css/directory.css">
</head>
<body>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">zblShop后台管理</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="#">主页</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">admin<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									 <a href="#">个人信息</a>
								</li>
								<li class="divider">
								</li>
								<li>
									 <a href="#">退出</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>				
			</nav>
			
			<div class="row clearfix">
			
				<div class="col-md-3 column">
						<div class="panel-group" id="panel-868231">
							<div class="panel panel-default">
								<div class="panel-heading">
									 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-868231" href="#panel-element-143261">用户管理</a>
								</div>
								<div id="panel-element-143261" class="panel-collapse collapse">
									<div class="panel-body">
                                       <button type="button" class="btn btn-block btn-default">用户列表</button>
                                       <button type="button" class="btn btn-block btn-default">添加用户</button>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									 <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-868231" href="#panel-element-27570">产品管理</a>
								</div>
								<div id="panel-element-27570" class="panel-collapse collapse">
									<div class="panel-body">
									   <button type="button" class="btn btn-block btn-default">产品列表</button>
                                       <button type="button" class="btn btn-block btn-default">添加产品</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-9 column">
						<div class="panel panel-default">
							<div class="panel-body">
								<button type="button" class="btn btn-default btn-primary">按钮</button>
							</div>
						</div>
						<table class="table table-bordered table-condensed">
							<thead>
								<tr>
									<th>
										编号
									</th>
									<th>
										产品
									</th>
									<th>
										交付时间
									</th>
									<th>
										状态
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										1
									</td>
									<td>
										TB - Monthly
									</td>
									<td>
										01/04/2012
									</td>
									<td>
										Default
									</td>
								</tr>
								<tr class="success">
									<td>
										1
									</td>
									<td>
										TB - Monthly
									</td>
									<td>
										01/04/2012
									</td>
									<td>
										Approved
									</td>
								</tr>
								<tr class="error">
									<td>
										2
									</td>
									<td>
										TB - Monthly
									</td>
									<td>
										02/04/2012
									</td>
									<td>
										Declined
									</td>
								</tr>
								<tr class="warning">
									<td>
										3
									</td>
									<td>
										TB - Monthly
									</td>
									<td>
										03/04/2012
									</td>
									<td>
										Pending
									</td>
								</tr>
								<tr class="info">
									<td>
										4
									</td>
									<td>
										TB - Monthly
									</td>
									<td>
										04/04/2012
									</td>
									<td>
										Call in to confirm
									</td>
								</tr>
							</tbody>
						</table>
						<ul class="pagination">
								<li>
									 <a href="#">首页</a>
								</li>
								<li>
									 <a href="#">1</a>
								</li>
								<li>
									 <a href="#">2</a>
								</li>
								<li>
									 <a href="#">3</a>
								</li>
								<li>
									 <a href="#">4</a>
								</li>
								<li>
									 <a href="#">5</a>
								</li>
								<li>
									 <a href="#">尾页</a>
								</li>
							</ul>
					</div>
				<script type="text/javascript">(function(){document.write(unescape('%3Cdiv id="bdcs"%3E%3C/div%3E'));var bdcs = document.createElement('script');bdcs.type = 'text/javascript';bdcs.async = true;bdcs.src = 'http://znsv.baidu.com/customer_search/api/js?sid=1184422539262168441' + '&plate_url=' + encodeURIComponent(window.location.href) + '&t=' + Math.ceil(new Date()/3600000);var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(bdcs, s);})();</script>
			</div>
			
			<div class="panel panel-default navbar-fixed-bottom">
				<div class="panel-heading">
						<center>zblShop后台管理©<a href="http://zhangbailong.com" target="_blank">zhangbailong.com</a></center>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- jquery必须放在最前 -->
<script type="text/javascript" src="<?php echo $url_path;?>plugins/jquery/jquery-3.1.1.js"></script>
<!-- bootstrap js -->
<script type="text/javascript" src="<?php echo $url_path;?>plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>