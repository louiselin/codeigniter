<?php require_once VIEWPATH.'_layouts/header.php' ?>
<section class="container">
	<fieldset>
		<h1>成果展示
			<a id="addArticleLink" class="btn btn-success">文章總覽</a>
		</h1>
	</fieldset>
	<hr>
	<script type="text/javascript">
		document.getElementById('addArticleLink').onclick = function() {
			window.location.href = window.location.origin + '/Bitbuck/codeIgniter/index.php/result'
		}
	</script>
	<form action="" method="post">
		<div class="form-group">
			<label for="">標題</label>
			<input type="text" class="form-control" name="title" value="<?= $query->title ?>" required>
		</div>
		<div class="form-group">
			<label for="">內容</label>
			<textarea name="content" id="summernote" cols="30" rows="10" class="form-control" required><?= $query->content?></textarea>
		</div>
		<div class="form-group">
			<label for="">PDF連結</label>
			<input type="text" class="form-control" value="<?= $query->pdflink ?>" name="pdflink">
		</div>
		<input type="text" class="form-control" name="timestamp" style="display:none;" required>
		<div class="form-group">
			<label for=""></label>
			<input type="submit" name="送出"	 class="btn btn-primary">
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
