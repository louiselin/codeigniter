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
			window.location.href = window.location.origin + '/codeigniter/index.php/result'
		}
	</script>
	<h1 class="text-info text-center"><?= $query->title ?></h1>
	<p style="float: right;"><?= $query->timestamp ?></p>

		<?= $query->content ?>

	<br><br><br><br><br><br>

	<?php
		$link = $query->pdflink;
		if ($link != null) {
			echo '<a class="btn btn-primary" href="'.$link.'" target="_blank">請先預覽pdf連結是否正確</a>';
		}
		else {
			// echo '<a class="btn btn-primary disabled" href="'+$link+'">無pdf連結</a>';
			echo '<a  class="btn btn-primary disabled href="#">無pdf連結</a>';
		}
	?>
</section>
<?php require_once VIEWPATH.'_layouts/footer.php' ?>
