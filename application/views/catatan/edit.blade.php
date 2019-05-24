@extends('layout.default')
@section('isi')
	<form action="{{ base_url() }}index.php/catatan/edit_do/{{ $data->slug }}" method="post">
		<div class="form-group"><label for="">Judul</label><input type="text" class="form-control" name="judul" value="{{ $data->judul }}"></div>
		<div class="form-group"><label for="">Isi Catatan</label><textarea name="isi" class="form-control" id="" cols="30" rows="10">{{ $data->isi }}</textarea></div>
		<div class="form-group"><input type="submit" value="Perbarui" class="btn btn-default"></div>
	</form>
@endsection