@extends('layouts.master')


@section('content')
<div class="row">
<h1 class="title" style="text-align:left; margin: 2% 2% 0% 2%; font-size: 30px;"><a href="#" style="color: black;">Каталог</a></h1>
	@foreach($products as $item)
		<div class="col s12 m4 l4">
		    <h5 style="font-weight: bold; text-align: center; margin-top: 25px;"><a href="#"style="color: black;">{{$item->name}}</a></h5>
		    <a href="{{url('/product')}}"><img src="{{$item->imagePath}}" style="margin-top: 10px; width: 100%;"></a>
		</div>
	$endforeach											
</div>
@endsection
