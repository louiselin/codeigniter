<?php require_once VIEWPATH.'_layouts/header.php' ?>
<section class="container">
	<fieldset>
		<h1>常用連結
			<a id="addLink" class="btn btn-success">文章總覽</a>
		</h1>
	</fieldset>
	<hr>
	<script type="text/javascript">
		document.getElementById('addLink').onclick = function() {
			window.location.href = window.location.origin + '/codeigniter/link'
		}
	</script>
	<form action="" method="post">
		<div class="form-group">
			<label for="">標題</label>
			<input type="text" class="form-control" name="title" value="<?= $query->title ?>" required>
		</div>
		<div class="form-group">
			<label for="">圖片</label>
			<textarea name="picture" id="summernote" class="form-control" value="<?php $query->picture ?>"></textarea>
		</div>
		<div class="form-group">
			<label for="">URL</label>
			<input type="text" class="form-control" name="url" value="<?= $query->url ?>" required>
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
          	height: 400,
						toolbar : [
								 ['picture',['picture']]
						 ],
						callbacks: {
			          		onImageUpload: function(files, editor, welEditable) {
			              		sendFile(files[0], editor, welEditable);
			          		}
						}
      });
      function sendFile(file, editor, welEditable) {
          data = new FormData();
          data.append("file", file);//You can append as many data as you want. Check mozilla docs for this
          $.ajax({
              data: data,
              type: "POST",
              url: "/codeigniter/link/savetheuploadedfile",
              cache: false,
              contentType: false,
              processData: false,
              success: function(url) {
					console.log(url)
					$('#summernote').summernote("insertImage", url);
				},
				error: function (data) {
								console.log("error");
				                console.log(data);
            	}
          });
      }

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
