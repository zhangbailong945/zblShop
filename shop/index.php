<?php
//shop index
include '../src/session.php';
include '../src/config.php';
$url_path=$config['url_path'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ZBL购物商场</title>
<link type="text/css" rel="stylesheet" href="<?php echo $url_path;?>plugins/bootstrap/css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $url_path;?>resources/css/style.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $url_path;?>plugins/navcar/css/nav.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $url_path;?>plugins/layer/skin/default/layer.css"/>
</head>
<body>
<div class="container">
   <h1>zblShop</h1>
   <div class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand">菜单</a>
            </div>
            <div id="navbar-menu" class="collapse navbar-collapse">
            
                <!-- 左边 -->
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">首页</a></li>
                    <li><a href="#">产品分类</a></li>
                    <li><a href="#">我的购物车</a></li>
                </ul>
                
               <!-- 右边 -->
			    <ul class="nav navbar-nav navbar-right">
			      <li>
			      <form class="navbar-form navbar-left" role="search">
			      <div class="form-group">
			        <input type="text" class="form-control" placeholder="请输入产品信息">
			      </div>
			      <button type="submit" class="btn btn-default">搜索</button>
			    </form>
			      </li>
			      <li><a href="#">其他</a></li>
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                                  if(!empty($_SESSION['user']))
                                  {
                                      echo $_SESSION['user'];
                                  }
                                  else
                                  {
                                      echo "你还没有登录？ ";
                                  }
                                ?> 
                                <b class="caret"></b></a><ul class="dropdown-menu">
			          <li><a href="<?php echo $url_path;?>/shop/login.php">登录</a></li>
			          <li><a href="#">注册</a></li>
			          <li><a href="#">我的订单</a></li>
			        </ul>
			      </li>
			    </ul>
            </div>
            
  </nav>
  </div>
  
    <!-- 内容start -->
      <!-- 产品start-->
     <div class="col-md-9">
       	<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">推荐产品</h3>
			  </div>
			  <div class="panel-body">
			      <div class="row">
			      
			      <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">			      
				      <img src="<?php echo $url_path;?>resources/images/product-01.jpg" alt="产品">
				      <div class="caption">
				        <h3>产品1</h3>
				        <p>这个产品很不错，我很喜欢这个产品。真是太好了.....</p>
				        <p><a href="javascript:voud(0);" class="btn btn-primary" role="button">加入购物车</a></p>
				      </div>
				    </div>
				  </div>
				  
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="<?php echo $url_path;?>resources/images/product-02.jpg" alt="产品">
				      <div class="caption">
				        <h3>产品1</h3>
				        <p>这个产品很不错，我很喜欢这个产品。真是太好了.....</p>
				        <p><a href="javascript:voud(0);" class="btn btn-primary" role="button">加入购物车</a></p>
				      </div>
				    </div>
				  </div>
				  
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="<?php echo $url_path;?>resources/images/product-03.jpg" alt="产品">
				      <div class="caption">
				        <h3>产品1</h3>
				        <p>这个产品很不错，我很喜欢这个产品。真是太好了.....</p>
				        <p><a href="javascript:voud(0);" class="btn btn-primary" role="button">加入购物车</a></p>
				      </div>
				    </div>
				  </div>
				  
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="<?php echo $url_path;?>resources/images/product-04.jpg" alt="产品">
				      <div class="caption">
				        <h3>产品1</h3>
				        <p>这个产品很不错，我很喜欢这个产品。真是太好了.....</p>
				        <p><a href="javascript:voud(0);" class="btn btn-primary" role="button">加入购物车</a></p>
				      </div>
				    </div>
				  </div>
				  
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="<?php echo $url_path;?>resources/images/product-02.jpg" alt="产品">
				      <div class="caption">
				        <h3>产品1</h3>
				        <p>这个产品很不错，我很喜欢这个产品。真是太好了.....</p>
				        <p><a href="javascript:voud(0);" class="btn btn-primary" role="button">加入购物车</a></p>
				      </div>
				    </div>
				  </div>
				  
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="<?php echo $url_path;?>resources/images/product-03.jpg" alt="产品">
				      <div class="caption">
				        <h3>产品1</h3>
				        <p>这个产品很不错，我很喜欢这个产品。真是太好了.....</p>
				        <p><a href="javascript:voud(0);" class="btn btn-primary" role="button">加入购物车</a></p>
				      </div>
				    </div>
				  </div>
				  
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="<?php echo $url_path;?>resources/images/product-01.jpg" alt="产品">
				      <div class="caption">
				        <h3>产品1</h3>
				        <p>这个产品很不错，我很喜欢这个产品。真是太好了.....</p>
				        <p><a href="javascript:voud(0);" class="btn btn-primary" role="button">加入购物车</a></p>
				      </div>
				    </div>
				  </div>
				  
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="<?php echo $url_path;?>resources/images/product-04.jpg" alt="产品">
				      <div class="caption">
				        <h3>产品1</h3>
				        <p>这个产品很不错，我很喜欢这个产品。真是太好了.....</p>
				        <p><a href="javascript:voud(0);" class="btn btn-primary" role="button">加入购物车</a></p>
				      </div>
				    </div>
				  </div>
				  
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="<?php echo $url_path;?>resources/images/product-02.jpg" alt="产品">
				      <div class="caption">
				        <h3>产品1</h3>
				        <p>这个产品很不错，我很喜欢这个产品。真是太好了.....</p>
				        <p><a href="javascript:voud(0);" class="btn btn-primary" role="button">加入购物车</a></p>
				      </div>
				    </div>
				  </div>

			      </div>
			  </div>
		</div>
     </div>
     <!-- 产品展示 end -->
     <!-- 右侧边栏 start -->
     <div class="col-md-3">
          
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">订单排行榜</h3>
		  </div>
		  <div class="panel-body">
		  
		      <div class="col-sm-12 col-md-12">
				    <div class="thumbnail">
				      <img src="<?php echo $url_path;?>resources/images/product-02.jpg" alt="产品">
				      <div class="caption">
				        <h3>产品1</h3>
				        <p>这个产品很不错，我很喜欢这个产品。真是太好了.....</p>
				        <p><a href="javascript:voud(0);" class="btn btn-primary" role="button">加入购物车</a></p>
				      </div>
				    </div>
				  </div>
				  
				  <div class="col-sm-12 col-md-12">
				    <div class="thumbnail">
				      <img src="<?php echo $url_path;?>resources/images/product-02.jpg" alt="产品">
				      <div class="caption">
				        <h3>产品1</h3>
				        <p>这个产品很不错，我很喜欢这个产品。真是太好了.....</p>
				        <p><a href="javascript:voud(0);" class="btn btn-primary" role="button">加入购物车</a></p>
				      </div>
				    </div>
				  </div>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">浏览排行榜</h3>
		  </div>
		  <div class="panel-body">
		  
		      <div class="col-sm-12 col-md-12">
				    <div class="thumbnail">
				      <img src="<?php echo $url_path;?>resources/images/product-02.jpg" alt="产品">
				      <div class="caption">
				        <h3>产品1</h3>
				        <p>这个产品很不错，我很喜欢这个产品。真是太好了.....</p>
				        <p><a href="javascript:voud(0);" class="btn btn-primary" role="button">加入购物车</a></p>
				      </div>
				    </div>
				  </div>
				  
				  <div class="col-sm-12 col-md-12">
				    <div class="thumbnail">
				      <img src="<?php echo $url_path;?>resources/images/product-02.jpg" alt="产品">
				      <div class="caption">
				        <h3>产品1</h3>
				        <p>这个产品很不错，我很喜欢这个产品。真是太好了.....</p>
				        <p><a href="javascript:voud(0);" class="btn btn-primary" role="button">加入购物车</a></p>
				      </div>
				    </div>
				  </div>
		  </div>
		</div>
		
		
     </div>    
     <!-- 右侧边栏 end --> 
     <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
        <div class="footer">
         <a href="http://zhangbailong.com" target="_blank">www.zhangbailong.com</a>
        </div>
      </nav>
    
</div>
<!-- 右侧购物车 start -->
<div class="J-global-toolbar">
	<div class="toolbar-wrap J-wrap">
		<div class="toolbar">
			<div class="toolbar-panels J-panel">
				<div style="visibility: hidden;" class="J-content toolbar-panel tbar-panel-cart toolbar-animate-out">
					<h3 class="tbar-panel-header J-panel-header">
						<a href="" class="title"><i></i><em class="title">购物车</em></a>
						<span class="close-panel J-close"></span>
					</h3>
					<div class="tbar-panel-main">
						<div class="tbar-panel-content J-panel-content">
							<div id="J-cart-tips" class="tbar-tipbox hide">
								<div class="tip-inner">
									<span class="tip-text">还没有登录，登录后商品将被保存</span>
									<a href="#none" class="tip-btn J-login">登录</a>
								</div>
							</div>
							<div id="J-cart-render">
								<div class="tbar-cart-list">
									<div class="tbar-cart-item" >
										<div class="jtc-item-promo">
											<em class="promo-tag promo-mz">满赠<i class="arrow"></i></em>
											<div class="promo-text">已购满600元，您可领赠品</div>
										</div>
										<div class="jtc-item-goods">
											<span class="p-img"><a href="#" target="_blank"><img src="http://img14.360buyimg.com/n5/g10/M00/00/14/rBEQWFEAilIIAAAAAACGm9ueTbUAAAH7gB8kskAAIaz106.jpg" alt="美的（Midea） BCD-206TM(E) 206升静音/省电/三门冰箱（闪白银）" height="50" width="50" /></a></span>
											<div class="p-name">
												<a href="#">美的（Midea） BCD-206TM(E)206升静音/省电/三门冰箱（闪白银）</a>
											</div>
											<div class="p-price"><strong>¥1398.00</strong>×1 </div>
											<a href="#none" class="p-del J-del">删除</a>
										</div>
									</div>
									<div class="tbar-cart-item">
										<div class="jtc-item-promo">
											<em class="promo-tag promo-mz">满赠<i class="arrow"></i></em>
											<div class="promo-text">已购满600元，您可领赠品</div>
										</div>
										<div class="jtc-item-goods">
											<span class="p-img">
												<a href="#" target="_blank"><img src="http://img14.360buyimg.com/n5/g10/M00/00/14/rBEQWFEAilIIAAAAAACGm9ueTbUAAAH7gB8kskAAIaz106.jpg" alt="美的（Midea） BCD-206TM(E) 206升静音/省电/三门冰箱（闪白银）" height="50" width="50" /></a>
											</span>
											<div class="p-name">
												<a href="#">美的（Midea） BCD-206TM(E)206升静音/省电/三门冰箱（闪白银）</a>
											</div>
											<div class="p-price"><strong>¥1398.00</strong>×1 </div>
											<a href="#none" class="p-del J-del">删除</a> 
										</div>
									</div>
									<div class="tbar-cart-item" >
										<div class="jtc-item-promo">
											<em class="promo-tag promo-mz">满赠<i class="arrow"></i></em>
											<div class="promo-text">已购满600元，您可领赠品</div>
										</div>
										<div class="jtc-item-goods">
											<span class="p-img"><a href="#" target="_blank"><img src="http://img14.360buyimg.com/n5/g10/M00/00/14/rBEQWFEAilIIAAAAAACGm9ueTbUAAAH7gB8kskAAIaz106.jpg" alt="美的（Midea） BCD-206TM(E) 206升静音/省电/三门冰箱（闪白银）" height="50" width="50" /></a></span>
											<div class="p-name"><a href="#">美的（Midea） BCD-206TM(E)206升静音/省电/三门冰箱（闪白银）</a> </div>
											<div class="p-price"> <strong>¥1398.00</strong>×1 </div>
											<a href="#none" class="p-del J-del">删除</a>
										</div>
									</div>
									<div class="tbar-cart-item" >
										<div class="jtc-item-promo">
											<em class="promo-tag promo-mz">满赠<i class="arrow"></i></em>
											<div class="promo-text">已购满600元，您可领赠品</div>
										</div>
										<div class="jtc-item-goods">
											<span class="p-img"><a href="#" target="_blank"><img src="http://img14.360buyimg.com/n5/g10/M00/00/14/rBEQWFEAilIIAAAAAACGm9ueTbUAAAH7gB8kskAAIaz106.jpg" alt="美的（Midea） BCD-206TM(E) 206升静音/省电/三门冰箱（闪白银）" height="50" width="50" /> </a> </span>
											<div class="p-name"><a href="#">美的（Midea） BCD-206TM(E)206升静音/省电/三门冰箱（闪白银）</a> </div>
											<div class="p-price"> <strong>¥1398.00</strong>×1 </div>
											<a href="#none" class="p-del J-del">删除</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tbar-panel-footer J-panel-footer">
						<div class="tbar-checkout">
							<div class="jtc-number"> <strong class="J-count">0</strong>件商品 </div>
							<div class="jtc-sum"> 共计：<strong class="J-total">¥113</strong> </div>
							<a class="jtc-btn J-btn" href="#none" target="_blank">去购物车结算</a>
						</div>
					</div>
				</div>

				<div style="visibility: hidden;" data-name="follow" class="J-content toolbar-panel tbar-panel-follow">
					<h3 class="tbar-panel-header J-panel-header">
						<a href="#" target="_blank" class="title"> <i></i> <em class="title">我的关注</em> </a>
						<span class="close-panel J-close"></span>
					</h3>
					<div class="tbar-panel-main">
						<div class="tbar-panel-content J-panel-content">
							<div class="tbar-tipbox2">
								<div class="tip-inner"> <i class="i-loading"></i> </div>
							</div>
						</div>
					</div>
					<div class="tbar-panel-footer J-panel-footer"></div>
				</div>
				
				<div style="visibility: hidden;" class="J-content toolbar-panel tbar-panel-history toolbar-animate-in">
					<h3 class="tbar-panel-header J-panel-header">
						<a href="#" target="_blank" class="title"> <i></i> <em class="title">我的足迹</em> </a>
						<span class="close-panel J-close"></span>
					</h3>
					<div class="tbar-panel-main">
						<div class="tbar-panel-content J-panel-content">
							<div class="jt-history-wrap">
								<ul>
									<li class="jth-item">
										<a href="#" class="img-wrap"> <img src="http://img10.360buyimg.com/n0/s100x100_g9/M03/0C/18/rBEHalCKCk8IAAAAAAD5nbR5xOAAACfgQENi_wAAPm1269.jpg" height="100" width="100" /> </a>
										<a class="add-cart-button" href="#" target="_blank">加入购物车</a>
										<a href="#" target="_blank" class="price">￥498.00</a>
									</li>
									<li class="jth-item">
										<a href="#" class="img-wrap"> <img src="http://img10.360buyimg.com/n0/s100x100_g9/M03/0C/18/rBEHalCKCk8IAAAAAAD5nbR5xOAAACfgQENi_wAAPm1269.jpg" height="100" width="100" /></a>
										<a class="add-cart-button" href="#" target="_blank">加入购物车</a>
										<a href="#" target="_blank" class="price">￥498.00</a>
									</li>
								</ul>
								<a href="#" class="history-bottom-more" target="_blank">查看更多足迹商品 &gt;&gt;</a>
							</div>
						</div>
					</div>
					<div class="tbar-panel-footer J-panel-footer"></div>
				</div>
			</div>
			
			<div class="toolbar-header"></div>
			
			<div class="toolbar-tabs J-tab">
				<div class="toolbar-tab tbar-tab-cart">
					<i class="tab-ico" id="end"></i>
					<em class="tab-text ">购物车</em>
					<span class="tab-sub J-count ">1</span>
				</div>
				<div class=" toolbar-tab tbar-tab-follow">
					<i class="tab-ico"></i>
					<em class="tab-text">我的关注</em>
					<span class="tab-sub J-count hide">0</span> 
				</div>
				<div class=" toolbar-tab tbar-tab-history ">
					<i class="tab-ico"></i>
					<em class="tab-text">我的足迹</em>
					<span class="tab-sub J-count hide">0</span>
				</div>
			</div>
			
			<div class="toolbar-footer">
				<div class="toolbar-tab tbar-tab-top"> <a href="#"> <i class="tab-ico  "></i> <em class="footer-tab-text">顶部</em> </a> </div>
				<div class=" toolbar-tab tbar-tab-feedback"> <a href="#" target="_blank"> <i class="tab-ico"></i> <em class="footer-tab-text ">反馈</em> </a> </div>
			</div>
			
			<div class="toolbar-mini"></div>
			
		</div>
		
		<div id="J-toolbar-load-hook"></div>
		
	</div>
</div>
<!-- 右侧购物车 end -->

<script type="text/javascript" src="<?php echo $url_path;?>plugins/jquery/jquery-3.1.1.js"></script>
<script type="text/javascript" src="<?php echo $url_path;?>plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $url_path;?>plugins/flycar/js/jquery.fly.min.js"></script>
<script type="text/javascript" src="<?php echo $url_path;?>plugins/navcar/js/nav.js"></script>
<script type="text/javascript" src="<?php echo $url_path;?>plugins/layer/layer.js"></script>

<script>

//点击购物车事件
$(".caption a").on('click',function(){
	  //获取当前元素的图片元素
	  var img=$(this).parent().parent().prev().attr('src');
	  var imgOffSet=$(this).parent().parent().prev().offset();
	  //偏移右侧购物车的位置
	  var offset = $("#end").offset(),flyer = $('<img class="u-flyer" src="'+img+'" />');
	  //修复fly插件bug
	  var scrollX=$(window).scrollTop();
      if(scrollX==0)
      {
		  flyer.fly({
		    start: {
		      left: imgOffSet.left, //当前点击的x轴
		      top: imgOffSet.top, //当期点击的y轴
		      width:100,height:100
		    },
		    end: {
		      left: offset.left,
		      top: offset.top, 
		      width: 20,height: 20
		    }
		  });
      }
      else
      {
    	  flyer.fly({
  		    start: {
  		      left: imgOffSet.left, //当前点击的x轴
  		      top: imgOffSet.top-scrollX, //当期点击的y轴减去滚动条的距离
  		      width:100,height:100
  		    },
  		    end: {
  		      left: offset.left,
  		      top: offset.top-scrollX, 
  		      width: 20,height: 20
  		    }
  		  });
      }
      layer.msg('加入成功！',{icon:6,time:1000});
      
});
</script>


</body>
</html>