<?php if(!class_exists("View", false)) exit("no direct access allowed");?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include $_view_obj->compile('backend/lib/meta.html'); ?>
<link rel="stylesheet" type="text/css" href="public/theme/backend/css/verydows.css" />
<link rel="stylesheet" type="text/css" href="public/theme/backend/css/main.css" />
<link rel="stylesheet" type="text/css" href="public/theme/backend/css/setting.css" />
<link rel="stylesheet" type="text/css" href="public/theme/backend/umeditor/themes/default/css/umeditor.min.css" />
<script type="text/javascript" src="public/script/jquery.js"></script>
<script type="text/javascript" src="public/theme/backend/js/verydows.js"></script>
<script type="text/javascript">
$(function(){
  $('#tabs').vdsTabsSwitch();
});
</script>
</head>
<body>
<div class="content">
  <div class="loc"><h2><i class="icon"></i>系统设置</h2></div>
  <div class="box">
    <div class="tabs mt10">
      <ul id="tabs">
        <li class="cur">全局</li>
        <li>首页</li>
        <li>商品</li>
        <li>用户</li>
        <li>伪静态</li>
        <li>邮件服务</li>
        <li>验证码</li>
        <li>模板主题</li>
        <li>其他</li>
      </ul>
    </div>
    <div class="module swcon mt5"><?php include $_view_obj->compile('backend/setting/global.html'); ?></div>
    <div class="module swcon mt5 hide"><?php include $_view_obj->compile('backend/setting/home.html'); ?></div>
    <div class="module swcon mt5 hide"><?php include $_view_obj->compile('backend/setting/goods.html'); ?></div>
    <div class="module swcon mt5 hide"><?php include $_view_obj->compile('backend/setting/user.html'); ?></div>
    <div class="module swcon mt5 hide"><?php include $_view_obj->compile('backend/setting/rewrite.html'); ?></div>
    <div class="module swcon mt5 hide"><?php include $_view_obj->compile('backend/setting/mail_server.html'); ?></div>
    <div class="module swcon mt5 hide"><?php include $_view_obj->compile('backend/setting/captcha.html'); ?></div>
    <div class="module swcon mt5 hide"><?php include $_view_obj->compile('backend/setting/theme.html'); ?></div>
    <div class="module swcon mt5 hide"><?php include $_view_obj->compile('backend/setting/other.html'); ?></div>
  </div>
</div>
</body>
</html>