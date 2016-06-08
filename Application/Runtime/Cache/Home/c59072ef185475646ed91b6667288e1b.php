<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑账号注册</title>
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
	<h1>Slaker System<br/><small>新闻中心中央厨房</small></h1>
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
              <li class="active"><a href="/slaker/">主页</a></li>
              <li><a href="<?php echo U('Home/Reg/Index');?>">注册</a></li>
              <li><a href="#">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

</div>

	<div class="container">
		<h3>编辑注册</h3>
		<form class="form-horizontal">
			<div class="form-group">
		   	 	<label for="ecard" class="col-sm-2 control-label">一卡通号</label>
		    	<div class="col-sm-2">
		      		<input type="num" class="form-control" id="ecard" placeholder="登录账号">
		    	</div>
		  	</div>
		  	<div class="form-group">
		   	 	<label for="name" class="col-sm-2 control-label">姓名</label>
		    	<div class="col-sm-2">
		      		<input type="email" class="form-control" id="name" placeholder="请与一卡通上姓名保持一致">
		    	</div>
		  	</div>
		  	<div class="form-group">
			    <label for="email" class="col-sm-2 control-label">电子邮箱</label>
			    <div class="col-sm-4">
			      	<input type="email" class="form-control" id="email" placeholder="电子邮箱">
			    </div>
		 	</div>
		 	<div class="form-group">
		   	 	<label for="organization" class="col-sm-2 control-label">所属媒体</label>
		    	<div class="col-sm-4">
		      		<select id="organization" class="form-control">
		      			<option>请选择……</option>
					  	<option>南湖新闻网</option>
						<option>校报编辑部</option>
					  	<option>官方微博</option>
					  	<option>官方微信</option>
					  	<option>广播台</option>
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
		      		<input type="email" class="form-control" id="mobile" placeholder="手机号">
		    	</div>
		  	</div>
		  	<div class="form-group">
			    <label for="password" class="col-sm-2 control-label">密码</label>
			    <div class="col-sm-2">
			      	<input type="password" class="form-control" id="password" placeholder="密码">
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