<?php
require_once('include/head.php');
require_once('include/header.php');?>

<div id="podpiska row">
<a name="subscriber col-12"></a>
	<form action="">
	<span>Имя Подписчика</span>
		<input type="search">
		<br>
		<span>e-mail:</span>
		<input type="email" required>
		<br>
		Согласен с нашими правилами
		<input type="checkbox" required>
		<br>
		<select name="" id="">
			<option value="USA">USA</option>
			<option value="UA">Ukraine</option>
			<option value="RU">Russia</option>
			<option value="GEO">Georgia</option>
		</select>
		<br>
		<textarea name="" id="" cols="30" rows="10"></textarea>
		
		<br>
		<input type="submit">

	</form>
</div>

<?php require_once('include/footer.php');
?>