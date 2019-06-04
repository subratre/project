<html>
	<head>

		</head>
		<body>
			<div class="body">
				<form method="post">
				<textarea name="url" id="name"></textarea>
				<input type="submit" name="geturl" value="open" id="bu">
			</form>
			</div>
		</body>
</html>

<script>
	var val = document.getElementById('name');
	var buttb=document.getElementById('bu');
	buttb.addEventListener(myfun());
	alert(val);
</script>