@extends('layout.default')
@section('judul')
	{{ $data->judul }} - 
@endsection
@section('isi')
	<div class="panel panel-default">
		<div class="panel-heading">{{ $data->judul }}</div>
		<div class="panel-body bawah-dikit">{!! $data->isi_markdown !!}</div>
		<div class="panel-footer">
			<small>
				<div class="waktu waktu-{{ $data->slug }}"></div>
				<script type="text/javascript">
					setInterval(function(){
						$('.waktu-{{ $data->slug }}').html(moment('{{ $data->created_at }}').fromNow())
					}, 1000)
				</script>
			</small>
		</div>
	</div>
@endsection