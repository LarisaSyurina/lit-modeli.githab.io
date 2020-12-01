@extends('layouts.master')


@section('content')
<div class="row">
<h1 class="title" style="text-align:left;margin: 2% 2% 0% 2%;font-size:30px;"><a href="{{url('/catalogue')}}" style="color: black;">Каталог</a>/Разделы продукции{{$category->name}}</h1>
	@foreach($categories as $item)
		<div class="col s12 m4 l4">
		    <h5 style="font-weight: bold; text-align: center; margin-top: 25px;"><a href="#"style="color: black;">{{$item->name}}</a></h5>
		    <a href="{{url('/category')}}"><img src="{{$item->imagePath}}" style="margin-top: 10px; width: 100%;"></a>
		    <p><strong>Цена: {{$item->price}}</strong></p>
			<div class="btn-small" style="background: #FFB000"><a href="{{url('add-to-cart/'.$item->id)}}">Купить</a></div> 
		</div>
	$endforeach											
</div>
@endsection