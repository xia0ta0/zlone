<?php include 'header.lite.html.php';?>
<div class="header">
  <div class="container clearfix">
    <h1 class="logo"><span class="hidden">有图</span></h1>
    <ul class="nav">
      <li class="active"><a href="/"><span class="icon-home"></span><span>主页</span></a></li>
      <li><a href="/explore"><span class="icon-explore"></span><span>发现</span></a></li>
      <li><a href="/upload"><span class="icon-upload"></span><span>上传</span></a></li>
    </ul>
    <div class="action">
      <div class="search">
        <form action="/search" method="get">
          <input class="search-input" name="q" autocomplete="off" placeholder="搜索" />
        </form>
      </div>
      <ul class="settings">
        <li><a href="#" id="dropdown"><span class="hidden">设置</span></a></li>
        <li></li>
      </ul>
    </div>
  </div>
</div>
<div id="page">
  <div class="container">
    <div class="main">
      <div class="box">
        <div class="box-header">
          图片 
        </div>
      </div>
    </div>
  </div>
</div>
