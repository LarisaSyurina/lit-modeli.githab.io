@extends('layouts.master')

<!-- КОРЗИНА -->

@section('content')
	<div class="row">
					
	<div class="col s12 m12 l12"  style="margin:2%;">
					
	<h1 style="font-size:30px; margin:0px;">Корзина</h1>
	<br>
   <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
      
            <th style="width:50%">Товар</th>
            <th style="width:10%">Цена</th>
            <th style="width:8%">Кол-во</th>
            <th style="width:12%" class="text-center">Итого</th>
            <th style="width:20%"></th>
        </tr>
        </thead>
        <tbody>
        <?php $total = 0 ?>
        @if(session('cart'))
            @foreach(session('cart') as $id => $products)
                <?php $total += $products['price'] * $products['quantity'] ?>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col s3 m3 l3 hide-on-small-only"><img src="{{ $products['photo'] }}" width="100" height="100" class="responsive-img"/></div>
                            <div class="col s9 m9 l9">
                                <h4 class="nomargin" style="font-size:25px;">{{ $products['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $products['price'] }} руб.</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $products['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $products['price'] * $products['quantity'] }} руб.</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" style="background-color:#12AA25;" data-id="{{ $id }}"><i class="fa fa-refresh">обновить</i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" style="background-color: red;" data-id="{{ $id }}"><i class="fa fa-trash-o">Х</i></button>
       
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center" style="font-size:25px;"><strong>Итого {{ $total }} руб.</strong></td>
        </tr>
        <!--<tr>
 
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Итого {{ $total }} руб.</strong></td>
			<td><div class="btn-small" style="background: #12AA25;"><a href="{{url('/catalogue')}}" style="color:white;">Добавить другие товары</a></div></td>
            
	    </tr>-->
        </tfoot>
    </table>
	<br>
	<div class="btn-small" style="background: #12AA25;"><a href="{{url('/catalogue')}}" style="color:white;">Добавить другие товары</a></div>
	
<br>
<br>
<br>	


<p style="font-size: 15px;">При оформлении заказа укажите адрес доставки. Наш менеджер свяжется с вами дополнительно и уточнит условия и стоимость доставки.</p>
					
</div>
					
	<div class="col s12 m8 l6"  style="margin: 2% 30px 2% 2%;">
					
		<form action="#" method="POST">
			<input type="text" name="firm" placeholder="Название компании">
			<input type="text" name="name" placeholder="ФИО*">
			<input type="text" name="tel" placeholder="Телефон*">
			<input type="text" name="e_mail" placeholder="E-mail*">
			<input type="text" name="address" placeholder="Адрес доставки / Самовывоз">
			<br>
			<br>
			<textarea placeholder="Коментарий"></textarea>
			<br>
			<br>
			<input class="btn-small" style="width: 200px;" id="send-order" type="submit" value="Отправить заказ">
		</form>
	</div>
	</div>
	
	<script
  src="http://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  
	 <script type="text/javascript">
        $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Вы точно хотите удалить данную позицию?")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection