<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>主页</title>
    <link href="<?php echo base_url(); ?>resource/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>resource/css/index.css" rel="stylesheet">
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
        <form class="navbar-form navbar-right" role="search">
            <a href="<?php echo base_url('index.php/user/login'); ?>" class="btn btn-md btn-primary">登录</a>
            <a href="<?php echo base_url('index.php/user/register'); ?>" class="btn btn-md btn-success">注册</a>
        </form>
    </div>
</nav>


<!-- <div class="container">
  <h1>Word百宝箱</h1>
  <div class="row">
    <a href="#"><button class="btn btn-lg btn-primary col-sm-offset-3 col-sm-6" type="submit">登录</button></a>
  </div>
  <div class="row">
    <a href="#"><button class="btn btn-lg btn-success col-sm-offset-3 col-sm-6" type="submit">注册</button></a>
  </div>
</div> -->

<script src="<?php echo base_url(); ?>resource/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>resource/js/bootstrap.min.js"></script>
<!-- <script src="../js/bootstrap.min.js"></script> -->
</body>
</html>