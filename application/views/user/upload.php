<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>文件上传</title>
    <link href="<?php echo base_url(); ?>resource/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>resource/css/load.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>resource/css/fileinput.min.css" rel="stylesheet">
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
            <li><a href="<?php echo base_url('index.php/user/index'); ?>">主页</a></li>
            <li class="active"><a href="<?php echo base_url('index.php/user/upload'); ?>">文件上传</a></li>
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
            <a href="#">
                <button class="btn btn-md btn-primary" type="submit">登录</button>
            </a>
            <a href="#">
                <button class="btn btn-md btn-success" type="submit">注册</button>
            </a>
        </form>
    </div>
</nav>

<div class="container">
    <h3>
        文件上传支持格式:html,doc,docx,zip,rar,pdf
    </h3>

    <div class="form-group">
        <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
    </div>
</div>

<script src="<?php echo base_url(); ?>resource/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url(); ?>resource/js/fileinput.min.js"></script>
<script src="<?php echo base_url(); ?>resource/js/bootstrap.min.js"></script>
<!-- <script src="../js/fileinput_locale_zh.js" type="text/javascript"></script> -->
<!-- 中文显示 -->
<script type="text/javascript">
    $("#file-1").fileinput({
        uploadUrl: '<?php echo base_url('index.php/user/handle_upload'); ?>', //添加URL
        allowedFileExtensions: ['html', 'doc', 'docx', 'zip', 'rar', 'pdf'],
        overwriteInitial: false,
        maxFileSize: 10000,
        maxFilesNum: 30,
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
//        filebatchuploadsuccess: function (file) {
//            console.log(file);
//        }
    });
</script>
<!-- <script src="../js/bootstrap.min.js"></script> -->
</body>
</html>