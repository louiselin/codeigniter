<?php require_once VIEWPATH.'_layouts/header.php' ?>
<section class="container">
	<fieldset>
		<h1>成果展示
			<a href="../result" class="btn btn-success">文章總覽</a>
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
		<div class="form-group">
			<label for="">PDF連結</label>
			<input type="text" class="form-control" name="pdflink">
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
          height: 600,
					callbacks: {
          	onImageUpload: function(files, editor, welEditable) {
              	sendFile(files[0]);
          	}
					}
      });
      function sendFile(file) {
          data = new FormData();
          data.append("file", file);//You can append as many data as you want. Check mozilla docs for this
          $.ajax({
              data: data,
              type: "POST",
              url: "savetheuploadedfile",
              cache: false,
              contentType: false,
              processData: false,
              success: function(url) {
								var image = url;
								$('#summernote').summernote("insertImage", image);
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
