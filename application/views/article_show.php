<?php require_once VIEWPATH.'_layouts/header.php' ?>
<section class="container">
	<fieldset>
		<h1>最新消息
			<a id="addArticleLink" class="btn btn-success">文章總覽</a>
		</h1>
	</fieldset>
	<hr>
	<script type="text/javascript">
		document.getElementById('addArticleLink').onclick = function() {
			window.location.href = window.location.origin + '/codeigniter/index.php/article'
		}
	</script>
	<h1 class="text-info text-center"><?= $query->title ?></h1>
	<p style="float: right;"><?= $query->timestamp ?></p>
	<?= $query->content ?>
</section>
<?php require_once VIEWPATH.'_layouts/footer.php' ?>
