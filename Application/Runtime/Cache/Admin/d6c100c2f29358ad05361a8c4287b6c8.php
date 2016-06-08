<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="ch">
	<!-- container-fluid -->
<head>
	<title>基础数据</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./Application/Admin/View/Public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./Application/Admin/View/Public/css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" href="./Application/Admin/View/Public/css/fullcalendar.css" />
	<link rel="stylesheet" href="./Application/Admin/View/Public/css/unicorn.main.css" />
	<link rel="stylesheet" href="./Application/Admin/View/Public/css/unicorn.grey.css" class="skin-color" />
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
				<li><a href="grid.html"><i class="icon icon-th-list"></i> <span>Grid Layout</span></a></li>
				<li class="submenu">
					<a href="#"><i class="icon icon-file"></i> <span>Sample pages</span> <span class="label">4</span></a>
					<ul>
						<li><a href="invoice.html">Invoice</a></li>
						<li><a href="chat.html">Support chat</a></li>
						<li><a href="calendar.html">Calendar</a></li>
						<li><a href="gallery.html">Gallery</a></li>
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
			<h1>部门数据</h1>
			<div class="btn-group">
				<a class="btn btn-large tip-bottom" title="Manage Files"> <i class="icon-file"></i>
				</a>
				<a class="btn btn-large tip-bottom" title="Manage Users">
					<i class="icon-user"></i>
				</a>
				<a class="btn btn-large tip-bottom" title="Manage Comments">
					<i class="icon-comment"></i>
					<span class="label label-important">5</span>
				</a>
				<a class="btn btn-large tip-bottom" title="Manage Orders">
					<i class="icon-shopping-cart"></i>
				</a>
			</div>
		</div>
		<div id="breadcrumb">
			<a href="#" title="Go to Home" class="tip-bottom">
				<i class="icon-home"></i>
				Home
			</a>
			<a href="#" >基础数据</a>
			<a href="#" class="current">部门数据</a>
		</div>

		<div class="container-fluid">
			<div class="row-fluid">
					<div class="span8">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
								<h5>Static table with checkboxes in box with padding</h5>
								<span class="label label-info">Featured</span>
							</div>
							<div class="widget-content">
								<table class="table table-bordered table-striped with-check">
									<thead>
										<tr>
											<th><div class="checker" id="uniform-title-table-checkbox"><span><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" style="opacity: 0;"></span></div></th>
											<th>Column name</th>
											<th>Column name</th>
											<th>Column name</th>
											<th>Column name</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><div class="checker" id="uniform-undefined"><span><input type="checkbox" style="opacity: 0;"></span></div></td>
											<td>Row 1</td>
											<td>Row 2</td>
											<td>Row 3</td>
											<td>Row 4</td>
										</tr>
										<tr>
											<td><div class="checker" id="uniform-undefined"><span><input type="checkbox" style="opacity: 0;"></span></div></td>
											<td>Row 1</td>
											<td>Row 2</td>
											<td>Row 3</td>
											<td>Row 4</td>
										</tr>
										<tr>
											<td><div class="checker" id="uniform-undefined"><span><input type="checkbox" style="opacity: 0;"></span></div></td>
											<td>Row 1</td>
											<td>Row 2</td>
											<td>Row 3</td>
											<td>Row 4</td>
										</tr>
										<tr>
											<td><div class="checker" id="uniform-undefined"><span><input type="checkbox" style="opacity: 0;"></span></div></td>
											<td>Row 1</td>
											<td>Row 2</td>
											<td>Row 3</td>
											<td>Row 4</td>
										</tr>
										<tr>
											<td><div class="checker" id="uniform-undefined"><span><input type="checkbox" style="opacity: 0;"></span></div></td>
											<td>Row 1</td>
											<td>Row 2</td>
											<td>Row 3</td>
											<td>Row 4</td>
										</tr>
										<tr>
											<td><div class="checker" id="uniform-undefined"><span><input type="checkbox" style="opacity: 0;"></span></div></td>
											<td>Row 1</td>
											<td>Row 2</td>
											<td>Row 3</td>
											<td>Row 4</td>
										</tr>
									</tbody>
								</table>							
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-th-list"></i>
								</span>
								<h5>Span6</h5>
							</div>
							<div class="widget-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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

	<script src="./Application/Admin/View/Public/js/excanvas.min.js"></script>
	<script src="./Application/Admin/View/Public/js/jquery.min.js"></script>
	<script src="./Application/Admin/View/Public/js/jquery.ui.custom.js"></script>
	<script src="./Application/Admin/View/Public/js/bootstrap.min.js"></script>
	<script src="./Application/Admin/View/Public/js/jquery.flot.min.js"></script>
	<script src="./Application/Admin/View/Public/js/jquery.flot.resize.min.js"></script>
	<script src="./Application/Admin/View/Public/js/jquery.peity.min.js"></script>
	<script src="./Application/Admin/View/Public/js/fullcalendar.min.js"></script>
	<script src="./Application/Admin/View/Public/js/unicorn.js"></script>
	<script src="./Application/Admin/View/Public/js/unicorn.dashboard.js"></script>
</body>
</html>