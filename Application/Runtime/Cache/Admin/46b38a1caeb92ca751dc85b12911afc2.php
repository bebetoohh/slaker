<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="ch">
    <!-- container-fluid -->
<head>
    <title>Unicorn Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/slaker/Public/admin/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/slaker/Public/admin/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/slaker/Public/admin/css/fullcalendar.css" />
    <link rel="stylesheet" href="/slaker/Public/admin/css/unicorn.main.css" />
    <link rel="stylesheet" href="/slaker/Public/admin/css/unicorn.grey.css" class="skin-color" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

    <div id="header">
			<h1><a href="./dashboard.html">Unicorn Admin</a></h1>		
		</div>

		<div id="search">
			<input type="text" placeholder="Search here..." /><button type="submit" class="tip-right" title="Search"><i class="icon-search icon-white"></i></button>
		</div>

		<div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav btn-group">
                <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
                <li class="btn btn-inverse dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#">new message</a></li>
                        <li><a class="sInbox" title="" href="#">inbox</a></li>
                        <li><a class="sOutbox" title="" href="#">outbox</a></li>
                        <li><a class="sTrash" title="" href="#">trash</a></li>
                    </ul>
                </li>
                <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
                <li class="btn btn-inverse"><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
            </ul>
        </div>

    <div id="sidebar">
			<a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
			<ul>
				<li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>系统首页</span></a></li>
				<li class="submenu">
					<a href="#"><i class="icon icon-th-list"></i> <span>基础数据</span> <span class="label">3</span></a>
					<ul>
						<li><a href="form-common.html">Common elements</a></li>
						<li><a href="form-validation.html">Validation</a></li>
						<li><a href="form-wizard.html">Wizard</a></li>
					</ul>
				</li>
				<li><a href="buttons.html"><i class="icon icon-tint"></i> <span>网站数据</span></a></li>
				<li><a href="interface.html"><i class="icon icon-pencil"></i> <span>中心数据</span></a></li>
				<li><a href="tables.html"><i class="icon icon-th"></i> <span>联盟数据</span></a></li>
				<li><a href="<?php echo U('User/index');?>"><i class="icon icon-th"></i> <span>hellohello</span></a></li>
				<li><a href="grid.html"><i class="icon icon-th-list"></i> <span>Grid Layout</span></a></li>
				<li class="submenu">
					<a href="#"><i class="icon icon-file"></i> <span>用户权限</span> <span class="label">4</span></a>
					<ul>
						<li><a href="<?php echo U('User/index');?>">用户列表(index)</a></li>
						<li><a href="<?php echo U('User/roleList');?>">角色管理(roleList)</a></li>
						<li><a href="<?php echo U('User/addRole');?>">添加角色(addRole)</a></li>
						<li><a href="<?php echo U('User/nodeList');?>">节点管理(nodeList)</a></li>
						<li><a href="<?php echo U('User/addNode');?>">添加节点(addNode)</a></li>
						<li><a href="<?php echo U('User/index');?>">模块管理</a></li>
					</ul>
				</li>
				<li>
					<a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a>
				</li>
				<li>
					<a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a>
				</li>
			</ul>
		
</div>

    <div id="style-switcher"> <i class="icon-arrow-left icon-white"></i>
        <span>Style:</span>
        <a href="#grey" style="background-color: #555555;border-color: #aaaaaa;"></a>
        <a href="#blue" style="background-color: #2D2F57;"></a>
        <a href="#red" style="background-color: #673232;"></a>
    </div>

    <div id="content">
        <div id="content-header">

        </div>
        <div id="breadcrumb">
            <a href="#" title="Go to Home" class="tip-bottom">
                <i class="icon-home"></i>
                Home
            </a>
            <a href="#">用户权限</a>
            <a href="#" class="current">添加编辑节点</a>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span8">
                                        <div class="widget-box">
                                            <div class="widget-title">
                                                <span class="icon">
                                                    <i class="icon-align-justify"></i>                                  
                                                </span>
                                                <h5>添加编辑节点</h5>
                                            </div>
                                            <div class="widget-content nopadding">
                                                <form action="" method="post" class="form-horizontal">
                                                    <div class="control-group">
                                                        <label class="control-label">名称：</label>
                                                        <div class="controls">
                                                            <input type="text" name="name">
                                                            <span class="help-block">英文，为MODEL_NAME的时候，首字母大写</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">显示名：</label>
                                                        <div class="controls">
                                                            <input type="text" name="title">
                                                            <span class="help-block">中英文均可</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">状态：</label>
                                                        <div class="controls">
                                                            <select name="status">
                                                                <option value="1">启用</option>
                                                                <option value="0">禁用</option>
                                                            </select>
                                                            <span class="help-block">如果禁用，那么只有超级管理员才可以访问，其他用户均不可访问</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">类型：</label>
                                                        <div class="controls">
                                                            <select name="level">
                                                                <option value="1">模块</option>
                                                                <option value="2">控制器</option>
                                                                <option value="3">操作</option>
                                                            </select>
                                                            <span class="help-block">模块(MODULE_NAME),控制器(CONTROLLER_NAME),操作(ACTION_NAME)</span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">父级节点：</label>
                                                        <div class="controls">
                                                            <select name="pid">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <lable class="control-label">显示排序：</lable>
                                                        <div class="controls">
                                                            <input type="text" name="sort" />
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">描述：</label>
                                                        <div class="controls">
                                                            <textarea name="remark"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>                      
                                    </div>

            </div>


            <div class="row-fluid">
	<div id="footer" class="span12">
		2012 &copy; Unicorn Admin. Brought to you by
		<a href="https://wrapbootstrap.com/user/diablo9983">diablo9983</a>
	</div>
</div>
        </div>
    </div>

    <script src="/slaker/Public/admin/js/excanvas.min.js"></script>
    <script src="/slaker/Public/admin/js/jquery.min.js"></script>
    <script src="/slaker/Public/admin/js/jquery.ui.custom.js"></script>
    <script src="/slaker/Public/admin/js/bootstrap.min.js"></script>
    <script src="/slaker/Public/admin/js/jquery.flot.min.js"></script>
    <script src="/slaker/Public/admin/js/jquery.flot.resize.min.js"></script>
    <script src="/slaker/Public/admin/js/jquery.peity.min.js"></script>
    <script src="/slaker/Public/admin/js/fullcalendar.min.js"></script>
    <script src="/slaker/Public/admin/js/unicorn.js"></script>
    <script src="/slaker/Public/admin/js/unicorn.dashboard.js"></script>
</body>
</html>