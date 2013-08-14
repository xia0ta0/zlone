<?php include 'module/common/view/header.lite.html.php';?>
<div class="wrapper">
  <div class="auth">
    <div class="hd">
      <h1>term</h1>
    </div>
    <div class="bd">
      <form class="form" action="/login" method="post">
        <div class="form-item">
          <input type="text" name="account" id="account" tabindex="1" placeholder="用户名">
        </div>
        <div class="form-item">
          <input type="password" name="password" id="password" tabindex="2" placeholder="密码">
        </div>
        <div class="form-item">
          <button type="submit" class="btn-login" tabindex="3">登录</button>
        </div>
        <div class="note">
          <span> <input type="checkbox" checked="checked">自动登录 </span>
        </div>
      </form> 
    </div>
  </div>
</div>
