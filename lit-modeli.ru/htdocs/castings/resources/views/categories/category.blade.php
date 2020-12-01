@extends('layouts.master')

<!-- 2. CATEGORIES Каталог разделов продукции/Продукция раздела -->

@section('content')
<div class="row">
<br>	
<h1 style="margin-left: 15px; margin-top: 0%; font-size: 30px;"><a href="{{url('/catalogue')}}" style="color: grey;">Каталог разделов продукции </a>/ <a href="#" style="color: black;">{{$category->name}}</a> </h1>
	@foreach($products as $product)
		<div class="col s12 m4 l4">
		    <h5 style="font-weight: bold; text-align: center; margin-top: 10px;"><a href="/product/{{$product->id}}"style="color: black;">{{$product->name}}</a></h5>
		    <a href="/product/{{$product->id}}"><img src="{{$product->imagePath}}" style="margin-top: 10px; width: 100%;"></a>
			<a href="/product/{{$product->id}}"><img src="{{$product->imagePath}}" style="margin-top: 10px; width: 100%;"></a>
            <p style="text-align:center"><strong>Цена: {{$product->price}} руб.</strong></p>
			<br>
			<div class="btn-small" style="background: #FFB000; margin-left: 37%;"><a href="{{url('add-to-cart/'.$product->id)}}" style="color:white;">в корзину</a></div>
		    <br>
		    <br>
		    
		</div>
            
	@endforeach		
    {{$products->links()}}	
</div>
				<a href="{{url('/catalogue')}}" style="color: black; margin-left:15px; font-size: 20px;"><strong><< Вернуться к списку разделов</strong></a>
				<br>
				<br>
@endsection