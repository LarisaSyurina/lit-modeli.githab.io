@extends('layouts.master')


@section('content')
	<div class="row">
	    @foreach($search as $item)
		<div class="col s12 m12 l12">
				<h1 style="font-size: 30px;">{{$item->name}}</h1>
				<a href="/product/{{$item->id}}"><img src="{{$item->imagePath}}" style="margin-top: 10px;width:20%;" alt="{{$item->name}}"></a>
				<p>{{$item->text}}</p>					
		</div>
		@endforeach
	</div>
@endsection