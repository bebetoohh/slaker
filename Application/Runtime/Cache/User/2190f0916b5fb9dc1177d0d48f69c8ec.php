<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?php echo ($meta_title); ?></title>
    
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
					<?php echo ($meta_title); ?>					
				</h1>
				

				
				
				<div class="widget widget-table">
										
					<div class="widget-header">
						<i class="icon-th-list"></i>
						<h3>投稿状态</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
					
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th style="width:20px;"></th>
									<th style="width:40px;">编号</th>
									<th style="width:60px;">类型</th>
									<th>标题</th>
									<th style="width:120px;">最后更新</th>
									<th>操作</th>
								</tr>
							</thead>
							
							<tbody>
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
									<td><input type="checkbox" name="ids[]" value="<?php echo ($vo["id"]); ?>"></td>
									<td><?php echo ($vo["id"]); ?></td>
									<td><?php echo get_submission_model($vo['model'],'title');?></td>
									<td><?php echo ($vo["title"]); ?></td>
									<td><?php echo (time_format($vo["update_time"])); ?></td>
									
									<td class="action-td">
										<a href="<?php echo U('Submission/edit?id='.$vo['id']);?>" class="btn btn-small btn-warning">
											<i class="icon-ok"></i>	编辑							
										</a>					
										<a href="<?php echo U('Submission/del?id='.$vo['id']);?>" class="btn btn-small">
											<i class="icon-remove"></i>	删除					
										</a>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
					
					</div> <!-- /widget-content -->
					
				</div> <!-- /widget -->
					<!-- 分页 -->
				    <div class="page">
				        <?php echo ($_page); ?>
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