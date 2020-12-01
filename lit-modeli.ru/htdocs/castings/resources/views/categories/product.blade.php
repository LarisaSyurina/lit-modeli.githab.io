@extends('layouts.master')


@section('content')
				<div class="row">
				    
					<h1 style="margin: 15px; font-size: 30px;"><a href="{{url('/catalogue')}}" style="color: black;">Разделы продукции</a> / <a href="{{url('/products')}}" style="color: black;">Детали</a> / <a href="{{url('/product')}}"style="color: black;">Деталь</a></h1>
	
					<div class="col s12 m5 l4">
					    <h1 style="font-size: 30px; font-weight: bold; margin-top: 25px; margin-left: 5%;">{{$oneProduct -> name}}</h1>
					    <img src="{{$oneProduct -> imagePath}}" style="margin-top: 10px; width: 100%;">
					</div>
					<br>
					
					<div class="col s12 m7 l8" >
					    <h5>Описание детали</h5>
						<p>{{$oneProduct -> text}}</p>
					    <br>
						<div id="buy">
						    <div> Количество  + 1 - </div>
							<br>
						    <div class="btn-small" style="background: #FFB000">Купить</div> 
							<br>
                           
						</div>
					</div>	

				</div>
@endsection
