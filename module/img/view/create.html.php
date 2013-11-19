<?php include 'module/common/view/header.html.php';?>
<div class="container">
  <div class="main">
    <div class="uploader box">
      <div class="uploader-header">
        上传图片 
      </div>
      <form id="upload" method="post" action="/upload" enctype="multipart/form-data">
      <div class="uploader-board">
        <div class="drag-drop">
          <input id="image-file" name="image" type="file" title="上传图片" /> 
        </div>
      </div>
      </form>
    </div>
    <div class="box comment">
      <div class="comment-header">
        添加一条评论
      </div>
      <div class="comment-body">
        <textarea class="post"></textarea>
        <div class="action">
          <input type="submit" value="上传" class="btn-upload">
        </div>
      </div>
      <div class="comment-footer">
      </div>
    </div>
  </div>
</div>
<?php include 'module/common/view/footer.html.php';?>
