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
    
    <!-- <link href="/slaker/Public/assets/user/css/pages/dashboard.css" rel="stylesheet" />  -->
    <link href="/slaker/Public/assets/user/css/pages/plans.css" rel="stylesheet" /> 
    <link href="/slaker/Public/admin/css/style.css" rel="stylesheet" /> 
    

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
				<!-- 载入相关模型页面 -->
				<?php switch($model["id"]): case "1": ?><div id="top-alert" class="fixed alert alert-error " style="display:none;">
        <button class="close " style="margin-top: 4px;">&times;</button>
        <div class="alert-content ">这是内容</div>
    </div>
    <div id="main">
	<h1 class="page-title">
		<i class="icon-th-large"></i>
		投稿 - 文章					
	</h1>

  
	<div class="row">
		<div class="span9">
			<div class="widget">

				<div class="widget-content">
					<div class="tabbable"> <!-- /tabbable -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#1" data-toggle="tab">基础</a></li>
						  	<li class=""><a href="#2" data-toggle="tab">扩展</a></li>
						</ul>
						<br>
						<form id="form" action="<?php echo U('autoSave');?>" method="POST" class="form-horizontal">
							<!-- <form id="form" action="<?php echo U('User/Submission/update');?>" method="POST" class="form-horizontal"> -->
						<div class="tab-content"> <!-- tab-content -->
							
							<div class="tab-pane active" id="1"> <!-- tab-pane 1 -->
								
									<fieldset>
										<div class="control-group">	
											<label>文档标题</label>
    										<input type="text" name="title" class="input-xxlarge" placeholder="Type something…" value="标题标题标题标题标题标题标题标题标题">
    									</div>
    									<div class="control-group">	
    										<label>文章内容</label>
    										<textarea name="content">hello</textarea>
    										<script charset="utf-8" src="/slaker/Public/assets/kindeditor/kindeditor.js"></script>
											<script charset="utf-8" src="/slaker/Public/assets/kindeditor/lang/zh_CN.js"></script>
											<script>
											        KindEditor.ready(function(K) {
											                window.editor = K.create('textarea[name="content"]',{
											                	width: '100%',
											                	height:'500px',
											                	cssPath:'/slaker/Public/assets/kindeditor/style.css',

											                });
											        });
											</script>
    									</div>


									</fieldset>

							</div> <!-- tab-pane 1 -->
							<div class="tab-pane" id="2"> <!-- tab-pane 2 -->
								
									<fieldset>
									<div class="control-group">
										<label class="control-label" for="accounttype">Account Type</label>
										<div class="controls">
											<label class="radio">
												<input type="radio" name="accounttype" value="option1" checked="checked" id="accounttype">
													POP3
												</label>
											<label class="radio">
												<input type="radio" name="accounttype" value="option2">
													IMAP
											</label>
											</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="accountusername">Account Username</label>
										<div class="controls">
											<input type="text" class="input-large" id="accountusername" value="rod.howard@example.com">
												<p class="help-block">Leave blank to use your profile email address.</p>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="emailserver">Email Server</label>
										<div class="controls">
											<input type="text" class="input-large" id="emailserver" value="mail.example.com">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="accountpassword">Password</label>
										<div class="controls">
											<input type="text" class="input-large" id="accountpassword" value="password">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="accountadvanced">Advanced Settings</label>
										<div class="controls">
										<label class="checkbox">
											<input type="checkbox" name="accountadvanced" value="option1" checked="checked" id="accountadvanced">
												User encrypted connection when accessing this server
											</label>
											<label class="checkbox">
												<input type="checkbox" name="accounttype" value="option2">
												Download all message on connection
											</label>
										</div>
									</div>
									<br>
									</fieldset>
									
							</div><!-- tab-pane 2 -->
							
						</div><!-- tab-content -->

										<div class="form-actions">
											<button type="submit" class="btn btn-primary" id="submit">提交(存草稿)</button> 
											<button class="btn">取消</button>
											<button class="btn" url="<?php echo U('User/Submission/autoSave');?>" target-form="form-horizontal" id="autoSave">存草稿</button>
											<input type="hidden" name="id" value>
											<input type="hidden" name="model" value="<?php echo ($model["id"]); ?>">
											<input type="hidden" name="uid" value="<?php echo (UID); ?>">
											<input type="hidden" name="department" value="<?php echo session('user_auth.department_id');?>">
											<input type="hidden" name="organization" value="<?php echo session('user_auth.organization_id');?>">

										</div> <!-- /form-actions -->

						</form>


					</div> <!-- /tabbable -->
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->
		</div> <!-- /span9 -->
	</div> <!-- /row -->
</div><!--/main--><?php break;?>
					<?php case "2": ?><div id="top-alert" class="fixed alert alert-error " style="display:none;">
        <button class="close " style="margin-top: 4px;">&times;</button>
        <div class="alert-content ">这是内容</div>
    </div>
    <div id="main">
	<h1 class="page-title">
		<i class="icon-th-large"></i>
		投稿 - 组图					
	</h1>

  
	<div class="row">
		<div class="span9">
			<div class="widget">

				<div class="widget-content">
					<div class="tabbable"> <!-- /tabbable -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#1" data-toggle="tab">基础</a></li>
						  	<li class=""><a href="#2" data-toggle="tab">扩展</a></li>
						</ul>
						<br>
						<form id="form" action="<?php echo U('autoSave');?>" method="POST" class="form-horizontal">
							<!-- <form id="form" action="<?php echo U('User/Submission/update');?>" method="POST" class="form-horizontal"> -->
						<div class="tab-content"> <!-- tab-content -->
							
							<div class="tab-pane active" id="1"> <!-- tab-pane 1 -->
								
									<fieldset>
										<div class="control-group">	
											<label>组图标题</label>
    										<input type="text" name="title" class="input-xxlarge" placeholder="Type something…" value="标题标题标题标题标题标题标题标题标题">
    									</div>
    									<div class="control-group">	
											<label>摘要</label>
											<textarea name="abstract" class="span8"   rows="3"></textarea>
    										
    									</div>
    									<div class="control-group">	
    										<label>文章内容</label>
    										<a href="#">上传图片</a>(每张图片不要超过1M)
    										    <ul class="thumbnails">
											        <li class="span2">
												        <div class="thumbnail">
													        <img data-src="holder.js/300x200" alt="">
													        <h3>Thumbnail label</h3>
													        <p>Thumbnail caption...</p>
												        </div>
											        </li>
											        <li class="span2">
												        <div class="thumbnail">
													        <img data-src="holder.js/300x200" alt="">
													        <h3>Thumbnail label</h3>
													        <p>Thumbnail caption...</p>
												        </div>
											        </li>
											        <li class="span2">
												        <div class="thumbnail">
													        <img data-src="holder.js/300x200" alt="">
													        <h3>Thumbnail label</h3>
													        <p>Thumbnail caption...</p>
												        </div>
											        </li>
											        <li class="span2">
												        <div class="thumbnail">
													        <img data-src="holder.js/300x200" alt="">
													        <h3>Thumbnail label</h3>
													        <p>Thumbnail caption...</p>
												        </div>
											        </li>
											    </ul>
    										<textarea name="content">hello</textarea>
    										<script charset="utf-8" src="/slaker/Public/assets/kindeditor/kindeditor.js"></script>
											<script charset="utf-8" src="/slaker/Public/assets/kindeditor/lang/zh_CN.js"></script>
											<script>
											        KindEditor.ready(function(K) {
											                window.editor = K.create('textarea[name="content"]',{
											                	width: '100%',
											                	height:'500px',
											                	cssPath:'/slaker/Public/assets/kindeditor/style.css',

											                });
											        });
											</script>
    									</div>


									</fieldset>

							</div> <!-- tab-pane 1 -->
							<div class="tab-pane" id="2"> <!-- tab-pane 2 -->
								
									<fieldset>
									<div class="control-group">
										<label class="control-label" for="accounttype">Account Type</label>
										<div class="controls">
											<label class="radio">
												<input type="radio" name="accounttype" value="option1" checked="checked" id="accounttype">
													POP3
												</label>
											<label class="radio">
												<input type="radio" name="accounttype" value="option2">
													IMAP
											</label>
											</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="accountusername">Account Username</label>
										<div class="controls">
											<input type="text" class="input-large" id="accountusername" value="rod.howard@example.com">
												<p class="help-block">Leave blank to use your profile email address.</p>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="emailserver">Email Server</label>
										<div class="controls">
											<input type="text" class="input-large" id="emailserver" value="mail.example.com">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="accountpassword">Password</label>
										<div class="controls">
											<input type="text" class="input-large" id="accountpassword" value="password">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="accountadvanced">Advanced Settings</label>
										<div class="controls">
										<label class="checkbox">
											<input type="checkbox" name="accountadvanced" value="option1" checked="checked" id="accountadvanced">
												User encrypted connection when accessing this server
											</label>
											<label class="checkbox">
												<input type="checkbox" name="accounttype" value="option2">
												Download all message on connection
											</label>
										</div>
									</div>
									<br>
									</fieldset>
									
							</div><!-- tab-pane 2 -->
							
						</div><!-- tab-content -->

										<div class="form-actions">
											<button type="submit" class="btn btn-primary" id="submit">提交(存草稿)</button> 
											<button class="btn">取消</button>
											<button class="btn" url="<?php echo U('User/Submission/autoSave');?>" target-form="form-horizontal" id="autoSave">存草稿</button>
											<input type="hidden" name="id" value>
											<input type="hidden" name="model" value="<?php echo ($model["id"]); ?>">
											<input type="hidden" name="uid" value="<?php echo (UID); ?>">
											<input type="hidden" name="department" value="<?php echo session('user_auth.department_id');?>">
											<input type="hidden" name="organization" value="<?php echo session('user_auth.organization_id');?>">

										</div> <!-- /form-actions -->

						</form>


					</div> <!-- /tabbable -->
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->
		</div> <!-- /span9 -->
	</div> <!-- /row -->
</div><!--/main--><?php break; endswitch;?>		
				<!-- 载入模型页面结束 -->
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

<script src="/slaker/Public/assets/user/js/bootstrap.js"></script>
<script src="/slaker/Public/admin/js/common.js"></script>
<script type="text/javascript">
$('#submit').click(function(){
	$('#form').submit();
});
$(function(){
	//保存草稿
	var interval;
	$('#autoSave').click(function(){
		var target_form = $(this).attr('target-form');
		var target = $(this).attr('url');
		var form = $('.'+target_form);
		var query = form.serialize();
		var that = this;
		

		$(that).addClass('disabled').attr('autocomplete','off').prop('disabled',true);
		$.post(target,query).success(function(data){
			if(data.status==1){
				updateAlert(data.info,'alert-success');
				$('input[name=id]').val(data.data.id);
			}else{
				updateAlert(data.info);
			}
			setTimeout(function(){
				$('#top-alert').find('button').click();
				$(that).removeClass('disabled').prop('disabled',false);
			},1500);
		})
		//重新开始定时器
		clearInterval(interval);
        // autoSaveDraft();
        return false;
	})
})
</script>

  </body>
</html>