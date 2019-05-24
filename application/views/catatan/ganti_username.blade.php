@extends('layout.default')
@section('isi')
	<form method="post" action="{{ base_url() }}index.php/catatan/ganti_do">
		<div class="form-group">
			<label for="">Username</label>
			<input type="text" name="username" value="{{ $data->username }}" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="text" name="password" value="{{ $data->password }}" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" value="Ubah" class="btn btn-danger">
		</div>
	</form>
@endsection