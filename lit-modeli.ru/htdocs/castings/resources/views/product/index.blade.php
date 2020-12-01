@extends('layouts.master')

<!-- 3. PRODUCT Каталог разделов продукции/Продукция раздела/Деталь -->

@section('content')
    <div class="row">
				    
        <h1 style="margin-left: 15px; margin-top: 1%; font-size: 30px;"><a href="{{url('/catalogue')}}" style="color: grey;">Каталог разделов продукции </a>/ <a href="/catalogue/{{$category->id}}" style="color: grey;">{{$category->name}}</a> / <a  style="color:black;">{{$oneProduct->name}}</a></h1>	
		   
		   <div class="col s12 m5 l4">
			    <h1 style="font-size: 30px; font-weight: bold; margin-top: 25px; margin-left: 5%;">{{$oneProduct->name}}</h1>
			    <img src="{{$oneProduct->imagePath}}" style="margin-top: 10px; width: 100%;">
	</div>
    <br>
					
	<div class="col s12 m7 l8" >
		<h5>Описание детали</h5>
			<p>{{$oneProduct->text}}</p>
		    <br>
			
			    <table>
				    <tr>
                        <td data-th="Price" style="width: 150px"><span class="one-price">Цена: {{ $oneProduct['price'] }}</span> руб.</td>
                        <td data-th="Quantity">
                            <input type="number" min="1" value="{{ $oneProduct['quantity'] }}" style="width: 45px" class="form-control quantity" />
                        </td>
                        <td data-th="Subtotal" class="text-left">Итого: <span class="summ">{{ $oneProduct['price'] * $oneProduct['quantity'] }}</span> руб.</td>
				    </tr>
			    </table>
			    <br>
				<div class="btn-small" style="background: #FFB000"><a href="{{url('add-to-cart/'.$oneProduct->id)}}" style="color: white;">Добавить в корзину</a></div> 
	            <br>
	            <br>
				<div class="btn-small" style="background: #12AA25"><a href="{{url('cart/')}}" style="color: white;">Перейти к оформлению</a></div> 
	            <br>
                <br>
				<a href="/catalogue/{{$category->id}}" style="color: black; margin-left:15px; font-size: 20px;"><strong><< Вернуться в раздел</strong></a><br>
				<a href="{{url('/catalogue')}}" style="color: black; margin-left:15px; font-size: 20px;"><strong><< Вернуться к списку разделов</strong></a>
				<br>
				<br>
	       
	</div>	
</div>
<script>
    $(document).ready(function(){
        $('.form-control.quantity').on('change', function(){
            let val = parseFloat($(this).val());
            let summ = val * parseFloat($('.one-price').text());
            $('.summ').text(summ);
            let id = $('.btn-small a').data('id');
            $('.btn-small a').attr('href', 'http://lit-modeli.ru/add-to-cart/' + id + '/' + val);
        });
    });
</script>

@endsection