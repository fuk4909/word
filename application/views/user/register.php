<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注册页</title>
    <link href="<?php echo base_url(); ?>resource/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>resource/css/login.css" rel="stylesheet">
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
        <a class="navbar-brand" href="<?php echo base_url('index.php/user/index'); ?>">Word百宝箱</a>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url('index.php/user/index'); ?>">主页</a></li>
            <li><a href="<?php echo base_url('index.php/user/upload'); ?>">文件上传</a></li>
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
<div class="container">
    <form action="<?php echo base_url('index.php/user/handle_register'); ?>" class="form-login" method="POST">
        <h2>注册</h2>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus=""
               name="email">
        <input type="text" id="inputName" class="form-control" placeholder="Name" required="" name="name">
        <input type="text" id="inputQQ" class="form-control" placeholder="QQ" required="" name="qq">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required=""
               name="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">sign in</button>
    </form>
</div>


<script src="<?php echo base_url(); ?>resource/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>resource/js/bootstrap.min.js"></script>
<!-- <script src="../js/bootstrap.min.js"></script> -->
</body>
</html>