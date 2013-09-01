<?php include 'header.lite.html.php';?>
<div class="header">
  <div class="container clearfix">
    <h1 class="logo"><a href="/">Term</a></h1>
    <div class="search">
      <form action="/search" method="get">
        <input id ="serach-input" name="q" autocomplete="off" placeholder="Search" />
      </form>
    </div>
    <ul class="nav">
      <li><a href="/help">帮助</a></li>
    </ul>
    <ul class="user">
      <li><a href="/home">个人主页</a></li>
      <li><a href="/projects/new">创建项目</a></li>
      <li><a href="/settings">设置</a></li>
      <li><a href="/logout">退出</a></li>
    </ul>
  </div>
</div>
