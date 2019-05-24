@extends('layout.default')
@section('isi')
	@foreach ($data as $data)
		<a href="{{ base_url() }}index.php/catatan/detail/{{ $data->slug }}" class="bukan-link">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $data->judul }}</div>
				<div class="panel-body">
					<div>{{ str_limit($data->isi, $limit = 300, $end = '...') }}</div>
				</div>
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
		</a>
	@endforeach
	{!! $pagination !!}
@endsection