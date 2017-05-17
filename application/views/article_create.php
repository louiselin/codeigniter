<?php require_once VIEWPATH.'_layouts/header.php' ?>
<section class="container">
	<fieldset>
		<h1>最新消息
			<a href="../article" class="btn btn-success">文章總覽</a>
		</h1>
	</fieldset>
	<hr>
	<form action="" method="post">
		<div class="form-group">
			<label for="">標題</label>
			<input type="text" class="form-control" name="title" required>
		</div>
		<div class="form-group">
			<label for="">內容</label>
			<textarea name="content" id="summernote" class="form-control" required></textarea>
		</div>
		<input type="text" class="form-control" name="timestamp" style="display:none;" required>
		<!-- <div id="summernote"></div> -->

		<div class="form-group">
			<label for=""></label>
			<input type="submit" name="送出"	 class="btn btn-info">
		</div>
	</form>
</section>
<script type="text/javascript">
	$(document).ready(function() {
      $('#summernote').summernote({
				height: 600,                 // set editor height
			  minHeight: null,             // set minimum height of editor
			  maxHeight: null,             // set maximum height of editor
			  focus: true
			});
			function addZero(i) {
			    if (i < 10) {
			        i = "0" + i;
			    }
			    return i;
			}
			var today = new Date();
			var y = today.getFullYear();
			var m = addZero(today.getMonth() + 1);
			var d = addZero(today.getDate());
			var h = addZero(today.getHours());
			var min = addZero(today.getMinutes());
			var s = addZero(today.getSeconds());
			$('input[name=timestamp]').val(y+"-"+m+"-"+d+" "+h+":"+min+":"+s);
  });
</script>
<?php require_once VIEWPATH.'_layouts/footer.php' ?>