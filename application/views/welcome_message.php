<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: left;
		font-size: 8px;
		border-top: 1px solid #D0D0D0;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>校務研究後台</h1>

	<div id="body">
		<a id="addArticleLink" class="btn btn-success">最新消息</a>
		<a id="addProgramLink" class="btn btn-success">執行專案</a>
		<a id="addResultLink" class="btn btn-success">成果展示</a>
	</div>

	<p class="footer">
		網站著作權屬於國立政治大學校務研究辦公室<br>
		電話：(02)29393091#62760<br>
		地址：(116)台北市文山區指南路二段64號行政大樓807室<br>
		Email：oir@nccu.edu.tw<br>
		感謝國立政治大學資訊科學系學生團隊建置<br>
		Copyright © 2016 NCCUCS PLSM All rights reserved若需轉載或對本辦公室有任何建議，請與我們聯繫。<br>
	</p>
</div>
<script type="text/javascript">
	document.getElementById('addArticleLink').onclick = function() {
		window.location.href = window.location.origin + '/codeigniter/index.php/article'
	}
	document.getElementById('addProgramLink').onclick = function() {
		window.location.href = window.location.origin + '/codeigniter/index.php/program'
	}
	document.getElementById('addResultLink').onclick = function() {
		window.location.href = window.location.origin + '/codeigniter/index.php/result'
	}
</script>
</body>
</html>
