<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    
    <title>hello</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />    
    
    <link href="/slaker/Public/assets/user/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/slaker/Public/assets/user/css/bootstrap-responsive.min.css" rel="stylesheet" />
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" />
    <link href="/slaker/Public/assets/user/css/font-awesome.css" rel="stylesheet" />
    
    <link href="/slaker/Public/assets/user/css/adminia.css" rel="stylesheet" /> 
    <link href="/slaker/Public/assets/user/css/adminia-responsive.css" rel="stylesheet" /> 
    
    <link href="/slaker/Public/assets/user/css/pages/dashboard.css" rel="stylesheet" /> 
	
    
    <link href="/slaker/Public/assets/user/css/audit.css" rel="stylesheet" /> 
	
    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
	
	
    
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 				
			</a>
			
			<a class="brand" href="./">Slaker 统一编审平台</a>
			
			<div class="nav-collapse">
			
				<ul class="nav pull-right">
					<li>
						<a href="#"><span class="badge badge-warning">7</span></a>
					</li>
					
					<li class="divider-vertical"></li>
					
					<li class="dropdown">
						
						<a data-toggle="dropdown" class="dropdown-toggle " href="#">
							Rod Howard <b class="caret"></b>							
						</a>
						
						<ul class="dropdown-menu">
							<li>
								<a href="./account.html"><i class="icon-user"></i> Account Setting  </a>
							</li>
							
							<li>
								<a href="./change_password.html"><i class="icon-lock"></i> Change Password</a>
							</li>
							
							<li class="divider"></li>
							
							<li>
								<a href="<?php echo U('Home/Member/logout');?>"><i class="icon-off"></i> Logout</a>
							</li>
						</ul>
					</li>
				</ul>
				
			</div> <!-- /nav-collapse -->
			
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
	



<div id="content">
	
	<div class="container">
		
		<div class="row">
			
			<div class="span3">
				
    			
								<div class="account-container">
				
					<div class="account-avatar">
						<img src="./img/headshot.png" alt="" class="thumbnail" />
					</div> <!-- /account-avatar -->
				
					<div class="account-details">
					
						<span class="account-name">Rod Howard</span>
						
						<span class="account-role">Administrator</span>
						
						<span class="account-actions">
							<a href="javascript:;">Profile</a> |
							
							<a href="javascript:;">Edit Settings</a>
						</span>
					
					</div> <!-- /account-details -->
				
				</div> <!-- /account-container -->
				
				<hr />
				
				<ul id="main-nav" class="nav nav-tabs nav-stacked">
					
					<li class="active">
						<a href="<?php echo U('Index/index');?>">
							<i class="icon-home"></i>
							我的主页 		
						</a>
					</li>
					
					<li>
						<a href="<?php echo U('Training/index');?>">
							<i class="icon-pushpin"></i>
							业务培训	
						</a>
					</li>
					
					<li>
						<a href="<?php echo U('Editing/index');?>">
							<i class="icon-th-list"></i>
							编审平台		
						</a>
					</li>
					
					<li>
						<a href="<?php echo U('Media/index');?>">
							<i class="icon-th-large"></i>
							所属媒体	
							<span class="label label-warning pull-right">5</span>
						</a>
					</li>
					
					<li>
						<a href="./charts.html">
							<i class="icon-signal"></i>
							Charts	
						</a>
					</li>
					
					<li>
						<a href="<?php echo U('Profile/index');?>">
							<i class="icon-user"></i>
							个人资料							
						</a>
					</li>
					
					<li>
						<a href="./login.html">
							<i class="icon-off"></i>
							Login	
						</a>
					</li>
					
				</ul>	
				
				<hr />
				
				<div class="sidebar-extra">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
				</div> <!-- .sidebar-extra -->
				
				<br />
				
		
			</div> <!-- /span3 -->
			
			
			
			<div class="span9">
				
				
	<div class="row">
		<div class="span5">
			<div class="widget">
				<div class="widget-header">
					<h3>通知公告</h3>
				</div>
				<div class="widget-content">
					<ul>
						<li><a href="#">注册通知</a></li>
						<li><a href="#">注册通知</a></li>
						<li><a href="#">注册通知</a></li>
						<li><a href="#">注册通知</a></li>
						<li><a href="#">注册通知</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="widget-header">
				<h3>所属媒体</h3>
			</div>
			<div class="widget-content">
				<p>南湖新闻网 logo</p>
				<p>现有成员 ## 人</p>
				<p>目前还有多少篇投稿未处理</p>
			</div>
			
		</div>
	</div>

			</div> <!-- /span9 -->
			
			
		</div> <!-- /row -->
		
	</div> <!-- /container -->
	
</div> <!-- /content -->
					
	
<div id="footer">
	
    
		<div class="container">				
		<hr />
		<p>&copy; 2012 Go Ideate.</p>
	</div> <!-- /container -->
	
	
</div> <!-- /footer -->


    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/slaker/Public/assets/user/js/jquery-1.7.2.min.js"></script>
<script src="/slaker/Public/assets/user/js/excanvas.min.js"></script>
<script src="/slaker/Public/assets/user/js/jquery.flot.js"></script>
<script src="/slaker/Public/assets/user/js/jquery.flot.pie.js"></script>
<script src="/slaker/Public/assets/user/js/jquery.flot.orderBars.js"></script>
<script src="/slaker/Public/assets/user/js/jquery.flot.resize.js"></script>


<script src="/slaker/Public/assets/user/js/bootstrap.js"></script>
	
    
		<script src="/slaker/Public/assets/user/js/charts/bar.js"></script>
	

  </body>
</html>