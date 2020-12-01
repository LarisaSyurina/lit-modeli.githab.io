@extends('layouts.master')

<!-- 1. PRODUCTS Каталог разделов продукции -->

@section('content')
<div class="row">
<br>	
<h1 style="margin-left: 15px; margin-top: 0%; font-size: 30px;"><a href="{{url('/catalogue')}}" style="color: black;">Каталог разделов продукции</a></h1>
	@foreach($categories as $item)
		<div class="col s12 m4 l4">
		    <h5 style="font-weight: bold; text-align: center; margin-top: 5px;"><a href="/catalogue/{{$item->category_id}}"style="color: black;">{{$item->name}}</a></h5>
		    <a href="/catalogue/{{$item->category_id}}"><img src="{{$item->imagePath}}" style="margin-top: 10px; width: 100%;"></a>
		</div>
	@endforeach											
</div>
@endsection