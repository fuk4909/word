<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>管理后台</title>
    <link href="<?php echo base_url(); ?>resource/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url('index.php/user/index'); ?>">Word百宝箱后台管理</a>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">管理首页</a></li>
            <li><a href="#">模块1</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    模块2<b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">链接1</a></li>
                    <li><a href="#">链接2</a></li>
                    <li><a href="#">链接3</a></li>
                    <li class="divider"></li>
                    <li><a href="#">链接4</a></li>
                    <li class="divider"></li>
                    <li><a href="#">链接5</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item</a></li>
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
                <li><a href="">More navigation</a></li>
            </ul>
        </div>
        <div class="col-sm-9 main">
            <h2 class="sub-header">用户列表</h2>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Email</th>
                        <th>QQ</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $count = 0;
                    foreach ($user_info_list as $user_info) { ?>
                        <tr>
                            <td><?php echo ++$count; ?></td>
                            <td><?php echo $user_info["email"]; ?></td>
                            <td><?php echo $user_info["qq"]; ?></td>
                            <td><?php echo $user_info["name"]; ?></td>
                            <td><?php echo $user_info["password"]; ?></td>
                            <td><?php echo date("Y-m-d H:i:s", $user_info["regtime"]); ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>resource/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>resource/js/bootstrap.min.js"></script>
<!-- <script src="../js/bootstrap.min.js"></script> -->
</body>
</html>