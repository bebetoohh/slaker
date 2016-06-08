<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>记者账号注册</title>
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
		<h3>记者注册</h3>
		<form class="form-horizontal" method="post" action="<?php echo U('Home/Reg/addUser');?>" >
			<div class="form-group">
		   	 	<label for="ecard" id="ecard" class="col-sm-2 control-label">一卡通号</label>
		    	<div class="col-sm-2">
		      		<input type="num" class="form-control" name="ecard" placeholder="登录账号" value="105042003111">
		    	</div>
		  	</div>
		  	<div class="form-group">
		   	 	<label for="name" id="name" class="col-sm-2 control-label">姓名</label>
		    	<div class="col-sm-2">
		      		<input  class="form-control" name="name" placeholder="请与一卡通上姓名保持一致" value="黄辉">
		    	</div>
		  	</div>
		  	<div class="form-group">
			    <label for="email" name="email" class="col-sm-2 control-label">电子邮箱</label>
			    <div class="col-sm-4">
			      	<input type="email" class="form-control" id="email" name="email" placeholder="电子邮箱" value="bebetoo@qq.com">
			    </div>
		 	</div>
		 	<div class="form-group">
		   	 	<label for="organization" class="col-sm-2 control-label">所属组织</label>
		    	<div class="col-sm-4">
		      		<select id="organization" name="organization" class="form-control">
		      			<option value="">请选择……</option>
					  	<option value="1">学生通讯社</option>
						<option value="2">青年传媒中心</option>
					  	<option value="3">学工信息中心</option>
					  	<option value="4">教务信息中心</option>
					  	<option value="5">后勤信息中心</option>
					  	<option value="6">植物科技学院学生通讯社</option>
					  	<option value="7">文法学院新闻中心</option>
					</select>
		    	</div>
		  	</div>
		  	<div class="form-group">
		   	 	<label for="department" class="col-sm-2 control-label">所属部门/学院</label>
		    	<div class="col-sm-2">
		      		<input type="hidden" id="class_next" name="class_next" value="department">
 					<input type="hidden" id="department_next" name="department_next" value="">
		      		<select id="class" name="class" class="form-control cascade_drop_down">
						<option value="">请选择</option>
		      			<option value="dangqun">党群系统</option>
					  	<option value="xingzheng">行政系统</option>
						<option value="yuanxi">学院系部</option>
					  	<option value="yewu">直属单位</option>
					</select>
					
		    	</div>
		    	<div class="col-sm-2">
		    		<select id="department" name="department" class=" form-control cascade_drop_down">
					</select>
		    	</div>
		    	
		  	</div>
		  	<div class="form-group">
		   	 	<label for="mobile" class="col-sm-2 control-label">手机号</label>
		    	<div class="col-sm-4">
		      		<input  class="form-control" id="mobile" name="mobile" placeholder="手机号" value="13720132680">
		    	</div>
		  	</div>
		  	<div class="form-group">
			    <label for="password" class="col-sm-2 control-label">密码</label>
			    <div class="col-sm-2">
			      	<input type="password" class="form-control" id="password" name="password" placeholder="密码" value="123456">
			    </div>
		  	</div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <div class="checkbox">
		        <label>
		          <input type="checkbox"> Remember me
		        </label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Sign in</button>
		    </div>
		  </div>
		</form>
	</div>
	<div class="container">
	
<hr>
<footer>
        <p>© HZAU NEWS CENTER 2015</p>
        <p>华中农业大学新闻中心 大学生新闻中心</p>
</footer>

</div>
	<script type="text/javascript" src="/slaker/Public/assets/user/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
 $(document).ready(function(){
     
     $(".cascade_drop_down").change(
         function () {
             var name = $(this).attr("name") + "_next";
             var next = $("#" + name).val();
             if (next == null || next == '') {
                 return;
             }
             
             $("#" + next).empty();
 
             $.ajax({
                 type:'post',
                 url: '/slaker/api/'+ $(this).val() + '.txt',
                 data:'name=' + name + '&val=' + $(this).val(),
                 dataType:'text',
                 success:function(msg){
                     ops = msg.split("\n");
                     for (i = 0; i < ops.length; i++) {
                         $("#" + next).append(ops[i]);
                     }
                 },
                 error:function(){
                     alert("failed.");
                 }
             });
         }
     )
     
 });
 
 </script>
</body>
</html>