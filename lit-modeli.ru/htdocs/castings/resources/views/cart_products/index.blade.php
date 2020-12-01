@extends('layouts.master')

@section('content')
<div class="row">
<br>	
<h1 style="margin-left: 15px; margin-top: 1%; font-size: 30px;"><a href="{{url('/catalogue')}}" style="color: black;">Каталог</a>/<a href="{{url('/products')}}"style="color: black;">Разделы продукции</a> / <a href="{{url('/products')}}"style="color: black;">Детали</a></h1>
	@foreach($products as $product)
		<div class="col s12 m4 l4">
		    <h5 style="font-weight: bold; text-align: center; margin-top: 25px;"><a href="#"style="color: black;">{{$item->name}}</a></h5>
		    <a href="/products/{{$item->path}}"><img src="{{$item->imagePath}}" style="margin-top: 10px; width: 100%;"></a>
		</div>
	$endforeach											
</div>
@endsection

