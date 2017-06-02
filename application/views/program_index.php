<?php require_once '_layouts/header.php' ?>
<section class="container">
	<fieldset>
		<h1>執行專案
			<a id="indexLink" class="btn btn-info">後台首頁</a>
			<a id="addArticleLink" class="btn btn-success">新增文章</a>
		</h1>
	</fieldset>
	<hr>
	<script type="text/javascript">
		document.getElementById('addArticleLink').onclick = function() {
			window.location.href = window.location.origin + '/codeigniter/index.php/program/create'
		}
		document.getElementById('indexLink').onclick = function() {
			window.location.href = window.location.origin + '/codeigniter/index.php'
		}
	</script>
	<table class="table table-hover">
		<tr	class="success">
			<td>標題</td>
			<td>發布時間</td>
			<td>編輯</td>
			<td>刪除</td>
		</tr>
		<?php foreach ($query as $key => $value): ?>
			<tr>
				<td><a href="<?= base_url('index.php/program/show/'.$value->id)?>"><?= $value->title?></a></td>
				<td><?= $value->timestamp?></td>
				<td><a href="<?= base_url('index.php/program/edit/'.$value->id)?>" class="btn btn-warning">編輯</a></td>
				<td><a href="<?= base_url('index.php/program/delete/'.$value->id)?>" class="btn btn-danger">刪除</a></td>
			</tr>
		<?php endforeach ?>
	</table>

</section>
<?php require_once '_layouts/footer.php' ?>
