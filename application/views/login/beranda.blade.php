<!DOCTYPE html>
<html>
<head>
	<title>Zen</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ base_url() }}aset/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ base_url() }}aset/app/login.css">
</head>
<body>
	<div class="container">
		@if ($status == 'salah')
			<div class="alert alert-danger">Maaf, username dan password salah</div>
		@endif
		<form action="{{ base_url() }}index.php/login/masuk_do" method="post">
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" name="password">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-default" name="" value="Masuk">
			</div>
		</form>
	</div>
</body>
</html>