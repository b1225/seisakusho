<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ログイン&nbps;|&nbps;大阪情報製作所</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<script type="text/javscript" charset="utf-8" src="asset/js/jquery-1.11.0.min.js"></script>
	<script type="text/javscript" charset="utf-8" src="asset/js/script.js"></script>
</head>
<body>

<section>
<?php include_once("./asset/inc/_header.php"); ?>

<article id="login">
	<div id="loginWrap">
		<form id="loginForm">
			<fieldset>
				<legend>作者管理画面</legend>
				<p id="loginUserAccountWrap">
					<label>メールアドレス</label>
					<input type="text" name="loginUserAccount" />
				</p>
				<p id="loginUserPasstWrap"
					<label>パスワード</label>
					<input type="text" name="loginUserPass" />
				</p>
			</fieldset>
			<div id="loginFormSubmit">
				<input type="submit" id="grobalSearchSubmitButton" name="grobalSearchSubmitButton"/>
			</div>
		</form>
	</div>
</article>


<?php include_once("./asset/inc/_footer.php"); ?>
</section>

</body>
</html>