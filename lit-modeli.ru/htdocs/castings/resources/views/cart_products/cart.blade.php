@extends('layouts.master')


@section('content')
				<div class="row">
					
					<div class="col s12 m12 l12"  style="margin:2%;">
					
					<h1 style="font-size:30px; margin:0px;">Корзина</h1>
					<br>
					<img src="./images/1.jpg" alt="Изображение"style="width: 150px; float: left; margin-right: 10px;">
					<h6 class="product_name" style="font-weight: bold;">Наименование товара</h6>
					<div class="product_description">Описание товара Описание товара Описание Товара</div>
					<br>
					<div class="">Количество: 1 шт.</div>
					<br>
					<div class="product_price">Итого по товару: 100 рублей</div>
					<br>
					<hr>
					<br>
					<div class="total_price" style="font-weight: bold">ИТОГО: 100 рублей</div>
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
@endsection

