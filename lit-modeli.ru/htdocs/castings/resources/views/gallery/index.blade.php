@extends('layouts.master')


@section('content')
<div class="row">
<h1 class="title" style="text-align:left; margin: 1% 2% -1% 2%;font-size: 30px;">Примеры работ</h1>
	@foreach($photos as $item)
	<div class="col s12 m4 l3">
		<img src="{{$item -> imagePath}}" style="margin-top: 40px; width: 100%;">
	</div>
	@endforeach											
</div>
@endsection