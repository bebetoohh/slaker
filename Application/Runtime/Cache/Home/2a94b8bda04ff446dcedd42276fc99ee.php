<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Slaker system</title>
	<!-- Bootstrap core CSS -->
    <link href="/slaker/Public/assets/bs/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/slaker/Public/css/home.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/slaker/Public/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
 <body>
 	<div class="container">
	<h1>Slaker System<br/><small>华中农业大学党委宣传部/新闻中心</small></h1>
	<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="/slaker/Public/img/logo1.png" width="20" height="20" alt="Slaker System"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/slaker/">首页</a></li>
              <li><a href="<?php echo U('Home/Reg/Index');?>">业务介绍</a></li>
              <li><a href="#">资讯列表</a></li>
              <li><a href="#">宣传战线</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">开放数据 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">机构数据</a></li>
                  <li><a href="#">网站索引</a></li>
                  <li><a href="#">新媒体</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">投稿统计</a></li>
                  <li><a href="#">网络资源</a></li>
                  <li><a href="#">校园日历</a></li>
                  <li><a href="#">其他</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo U('Home/Public/Login');?>" >登陆</a></li>
              <li><a href="<?php echo U('Home/Reg/Index');?>">注册</a></li>
              <li><a href="../navbar-fixed-top/">帮助</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

</div>

<div id="signinform" class="modal fade">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">用户登陆</h4>
      </div>
        <form action="/slaker/index.php?m=Home&amp;c=Member&amp;a=login" method="post">
      <div class="modal-body">
        
                      <div class="form-group">
                          <label for="exampleInputEmail1">一卡通号/电子邮箱</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Email">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">登录密码</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-default">登录</button>
                      <a href="#" class="btn btn-link">忘记密码?</a>
                      <a href="/slaker/index.php?m=Home&amp;c=Member&amp;a=reg&amp;type=user" class="btn btn-link">注册账号</a>
                      <a href="#" class="btn btn-link" data-toggle="modal" data-target="#signup">注册账号</a>
                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>

<div id="signup" class="modal fade">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">注册账号</h4>
      </div>
        <form action="/slaker/index.php?m=Home&amp;c=Member&amp;a=login" method="post">
      <div class="modal-body">
        
                      <div class="form-group">
                          <label for="exampleInputEmail1">一卡通号/电子邮箱</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Email">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">登录密码</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-default">登录</button>
                      <a href="#" class="btn btn-link">忘记密码?</a>
                      <a href="/slaker/index.php?m=Home&amp;c=Member&amp;a=reg&amp;type=user" class="btn btn-link">注册账号</a>
                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>
 	<div class="container">

 		<div class="row">

 			<div class="col-md-9">
 				<h3>hello, journalists of hzau,welcome using slaker system.</h3>
 				<h3>当前开发: <a href="<?php echo U('Admin/User/index');?>">后台用户权限</a></h3>
 				<ul>
				 	<li><a href="#">Home</a>
				 		<ul>
				 			<li><a href="<?php echo U('Home/index/index');?>">Index - 首页</a></li>
				 			<li><a href="<?php echo U('Home/Reg/index');?>">Reg - 注册</a> <a href="<?php echo U('Member/reg',array('type'=>'user'));?>">记者</a>  <a href="<?php echo U('Member/reg',array('type'=>'audit'));?>">编辑</a></li>
				 			<li><a href="<?php echo U('Home/Baoliao/index');?>">Baoliao - 匿名爆料</a></li>
				 			<li><a href="#" id="js-login">弹出登陆框</a></li>
				 		</ul>
				 	</li>
				 	<li><a href="#">User</a>
				 		<ul>
				 			<li><a href="<?php echo U('User/Index/index');?>">Index - 用户首页</a></li>
				 			<li><a href="<?php echo U('User/Submission/index');?>">Submission - 投稿</a></li>
				 			<li><a href="<?php echo U('User/Profile/index');?>">Profile - 个人资料</a></li>
				 		</ul>
				 	</li>
				 	<li><a href="#">Audit</a>
				 		<ul>
				 			<li><a href="<?php echo U('Audit/Index/index');?>">Index</a></li>
				 		</ul>
				 	</li>
				 	<li>Admin</li>
		 		</ul>
 			</div>
 			<div class="col-md-3">
 				<div>
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    	<li role="presentation" class="active"><a href="#user" aria-controls="user" role="tab" data-toggle="tab">记者登录</a></li>
					    <li role="presentation"><a href="#audit" aria-controls="audit" role="tab" data-toggle="tab">编辑登录</a></li>
				  </ul>
				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="user">
				    	<p>&nbsp;</p>
						<form action="<?php echo U('Home/Member/login');?>" method="post">
							<div class="form-group">
							    <label for="exampleInputEmail1">一卡通号/电子邮箱</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" name='username' placeholder="Email">
							</div>
							<div class="form-group">
							    <label for="exampleInputPassword1">登录密码</label>
							    <input type="password" class="form-control" id="exampleInputPassword1" name='password' placeholder="Password">
							</div>
							<button type="submit" class="btn btn-default">登录</button>
							<a href="#" class="btn btn-link">忘记密码?</a>
							<a href="<?php echo U('Member/reg',array('type'=>'user'));?>" class="btn btn-link">注册账号</a>
						</form>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="audit">
						<form action="<?php echo U('Home/Member/login');?>" method="post">
							<p>&nbsp;</p>
						<form action="<?php echo U('Home/Login/user');?>" method="post">
							<input type="hidden" class="form-control" name="type" value="2" >
							<div class="form-group">
							    <label for="exampleInputEmail1">一卡通号/电子邮箱</label>
							    <input type="text" class="form-control" id="username" name="username" placeholder="Email" value="bebetoo@qq.com">
							</div>
							<div class="form-group">
							    <label for="exampleInputPassword1">登录密码</label>
							    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="123456">
							</div>
							<button type="submit" class="btn btn-default">登录</button>
							<a href="#" class="btn btn-link">忘记密码?</a>
							<a href="<?php echo U('Member/reg',array('type'=>'audit'));?>" class="btn btn-link">注册账号</a>
						</form>
							
						</form>
				    </div>
				  </div>

				</div>
 			</div>
 		</div>
 		
 		
 		
 	</div>
<div class="container">
	
<hr>
<footer>
        <p>© HZAU NEWS CENTER 2015</p>
        <p>华中农业大学新闻中心 大学生新闻中心</p>
</footer>

</div>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="/slaker/Public/js/layer/layer.js"></script>
<script src="/slaker/Public/js/Home/common.js"></script>
<script>
	
</script>
 </body>
 </html>