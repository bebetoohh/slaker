<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Submission</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />    
    
    <link href="/slaker/Public/assets/user/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/slaker/Public/assets/user/css/bootstrap-responsive.min.css" rel="stylesheet" />
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" />
    <link href="/slaker/Public/assets/user/css/font-awesome.css" rel="stylesheet" />
    
    <link href="/slaker/Public/assets/user/css/adminia.css" rel="stylesheet" /> 
    <link href="/slaker/Public/assets/user/css/adminia-responsive.css" rel="stylesheet" /> 
    
    <link href="/slaker/Public/assets/user/css/pages/dashboard.css" rel="stylesheet" /> 
    

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
			
			<a class="brand" href="./">Slaker 统一投稿平台</a>
			
			<div class="nav-collapse">
			
				<ul class="nav pull-right">
					<!-- <li>
						<a href="#">消息 <span class="badge badge-warning">7</span></a>
					</li> -->
					
					<li class="divider-vertical"></li>
					
					<li class="dropdown">
						
						<a data-toggle="dropdown" class="dropdown-toggle " href="#">
							<?php echo session('user_auth.username');?> <b class="caret"></b>							
						</a>
						
						<ul class="dropdown-menu">
							<li>
								<a href="./account.html"><i class="icon-user"></i> 账户设置  </a>
							</li>
							
							<li>
								<a href="./change_password.html"><i class="icon-lock"></i> 修改密码</a>
							</li>
							
							<li class="divider"></li>
							
							<li>
								<a href="<?php echo U('Home/Member/logout');?>"><i class="icon-off"></i> 注销登录</a>
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
						<img src="/slaker/Public/upload/avter/default.png" alt="" class="thumbnail" />
					</div> <!-- /account-avatar -->
				
					<div class="account-details">
					
						<span class="account-name"><?php echo session('user_auth.username');?></span>
						
						<span class="account-role"><?php echo session('user_auth.organization');?></span>
						
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
						<a href="<?php echo U('Group/index');?>">
							<i class="icon-th-list"></i>
							我的组织		
						</a>
					</li>
					
					<li>
						<a href="<?php echo U('Submission/index');?>">
							<i class="icon-th-large"></i>
							投稿平台	
							<span class="label label-warning pull-right">5</span>
						</a>
					</li>
					
					<li>
						<a href="<?php echo U('Submission/draftBox');?>">
							<i class="icon-signal"></i>
							我的草稿	
						</a>
					</li>
					
					<li>
						<a href="<?php echo U('Profile/index');?>">
							<i class="icon-user"></i>
							个人资料							
						</a>
					</li>
					
					<li>
						<a href="<?php echo U('Home/Member/logout');?>">
							<i class="icon-off"></i>
							退出系统	
						</a>
					</li>
					
				</ul>	
				
				<hr />
				
				<div class="sidebar-extra">
					<p>欢迎使用编辑平台</p>
				</div> <!-- .sidebar-extra -->
				
				<br />
		
			</div> <!-- /span3 -->
			
			
			
			<div class="span9">
				
				<h1 class="page-title">
					<i class="icon-home"></i>
					投稿					
				</h1>
				
				<div class="stat-container">
										
					<div class="stat-holder">						
						<div class="stat">	
							<a href="<?php echo U('Submission/add?model_id=1');?>">
							<span><i class="icon-align-right"></i></span>							
							文章</a>						
						</div> <!-- /stat -->						
					</div> <!-- /stat-holder -->
					
					<div class="stat-holder">				
						<div class="stat">
							<a href="<?php echo U('Submission/add?model_id=2');?>">
							<span><i class="icon-picture"></i></span>							
							组图	
							</a>						
						</div> <!-- /stat -->						
					</div> <!-- /stat-holder -->
					
					<div class="stat-holder">						
						<div class="stat">		
							<a href="<?php echo U('Submission/add?model_id=3');?>">					
							<span><i class="icon-book"></i></span>							
							文学
							</a>							
						</div> <!-- /stat -->						
					</div> <!-- /stat-holder -->
					
					<div class="stat-holder">						
						<div class="stat">
							<a href="<?php echo U('Submission/add?model_id=4');?>">							
							<span><i class="icon-film"></i></span>							
							影音	
							</a>						
						</div> <!-- /stat -->						
					</div> <!-- /stat-holder -->
					
				</div> <!-- /stat-container -->
				
				
				<div class="widget widget-table">
										
					<div class="widget-header">
						<i class="icon-th-list"></i>
						<h3>投稿状态 这里显示已经投稿的文章，不可修改不可撤回，只能看编审状态</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
					
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>编号</th>
									<th>类型</th>
									<th>主题</th>
									<th>日期</th>
									<th>Company</th>
									<th>编审状态</th>
								</tr>
							</thead>
							
							<tbody>
								<tr>
									<td>1</td>
									<td>文章</td>
									<td>这是一个投稿</td>
									<td>2015-04-04</td>
									<td></td>
									<td class="action-td">
										新闻网 通过
										新媒体 未审
										广播台 通过
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Magic</td>
									<td>Johnson</td>
									<td>@mjohnson</td>
									<td>Los Angeles Lakers</td>
									<td class="action-td">
										<a href="javascript:;" class="btn btn-small btn-warning">
											<i class="icon-ok"></i>								
										</a>						
										<a href="javascript:;" class="btn btn-small">
											<i class="icon-remove"></i>						
										</a>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Charles</td>
									<td>Barkley</td>
									<td>@cbarkley</td>
									<td>Phoenix Suns</td>
									<td class="action-td">
										<a href="javascript:;" class="btn btn-small btn-warning">
											<i class="icon-ok"></i>								
										</a>						
										<a href="javascript:;" class="btn btn-small">
											<i class="icon-remove"></i>						
										</a>
									</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Karl</td>
									<td>Malone</td>
									<td>@kmalone</td>
									<td>Utah Jazz</td>
									<td class="action-td">
										<a href="javascript:;" class="btn btn-small btn-warning">
											<i class="icon-ok"></i>								
										</a>					
										<a href="javascript:;" class="btn btn-small">
											<i class="icon-remove"></i>						
										</a>
									</td>
								</tr>
								<tr>
									<td>5</td>
									<td>David</td>
									<td>Robinson</td>
									<td>@drobinson</td>
									<td>San Antonio Spurs</td>
									<td class="action-td">
										<a href="javascript:;" class="btn btn-small btn-warning">
											<i class="icon-ok"></i>								
										</a>						
										<a href="javascript:;" class="btn btn-small">
											<i class="icon-remove"></i>						
										</a>
									</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Reggie</td>
									<td>Miller</td>
									<td>@rmiller</td>
									<td>Indiana Pacers</td>
									<td class="action-td">
										<a href="javascript:;" class="btn btn-small btn-warning">
											<i class="icon-ok"></i>								
										</a>						
										<a href="javascript:;" class="btn btn-small">
											<i class="icon-remove"></i>						
										</a>
									</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Clyde</td>
									<td>Drexler</td>
									<td>@cdrexler</td>
									<td>Portland Trail Blazers</td>
									<td class="action-td">
										<a href="javascript:;" class="btn btn-small btn-warning">
											<i class="icon-ok"></i>								
										</a>						
										<a href="javascript:;" class="btn btn-small">
											<i class="icon-remove"></i>						
										</a>
									</td>
								</tr>
								<tr>
									<td>8</td>
									<td>Hakeem</td>
									<td>Olajuwon</td>
									<td>@holajuwon</td>
									<td>Houston Rockets</td>
									<td class="action-td">
										<a href="javascript:;" class="btn btn-small btn-warning">
											<i class="icon-ok"></i>								
										</a>						
										<a href="javascript:;" class="btn btn-small">
											<i class="icon-remove"></i>						
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					
					</div> <!-- /widget-content -->
					
				</div> <!-- /widget -->
				
				
				
				
				<div class="row">
					
					<div class="span5">
									
						<div class="widget">
							
							<div class="widget-header">
								<h3>5 Column</h3>
							</div> <!-- /widget-header -->
																
							<div class="widget-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div> <!-- /widget-content -->
							
						</div> <!-- /widget -->
						
					</div> <!-- /span5 -->
		
					<div class="span4">
						
						<div class="widget">
							
							<div class="widget-header">
								<h3>4 Column</h3>
							</div> <!-- /widget-header -->
																
							<div class="widget-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</div> <!-- /widget-content -->
							
						</div> <!-- /widget -->
					</div> <!-- /span4 -->
					
				</div> <!-- /row -->
				
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