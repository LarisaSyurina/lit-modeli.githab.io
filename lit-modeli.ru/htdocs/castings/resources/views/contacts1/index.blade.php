@extends('layouts.master')


@section('content')
<div class="row">
				    <div class="col s12 m6 l6" style="font-size: 20px; margin-left: 2%; margin-top: 30px;" class="contacts">
	                    <h1 class="title" style="text-align:left; margin-top:0%; font-size: 30px;">Контактная информация</h1>					   
					    <p style="font-weight: bold;">ИП Зотов Г.А.</p>
					    <p>Модельное производство</p>
					    <p>Литейное производство</p>
						<br>
					    <p>Адрес: г. Тула</p>
					    <p>Телефон: + 7 906 532 04 40</p>
					    <p>e-mail: zsvzot@yandex.ru</p>
					    <p>www.lit-modeli.ru</p>
						<br>
						<p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d149423.17068611048!2d37.48736490390008!3d54.18473274153034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41343f84ed31c1fd%3A0xa3a7e25d4ca39145!2z0KLRg9C70LAsINCi0YPQu9GM0YHQutCw0Y8g0L7QsdC7Lg!5e0!3m2!1sru!2sru!4v1596400709217!5m2!1sru!2sru" width="400" height="280" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</p>
						<br>
					</div>
					
					
					<div class="col s12 m6 l5"  style="margin-top: 30px;" class="contacts">
					<a name="ancor"></a>
					<p style="font-size: 20px;">Заполните форму:</p>
          	
						
						<form action="contacts1" method="POST">
						    
							<!--@if($errors->any())
								<div>
								    <ul>
								        @foreach($errors->all() as $err)
									    <li>{{$err}}</li>
										@endforeach
									</ul>
								</div>	
							@endif-->
							
							<!--@if($errors->any())
								<div class="alert alert-danger">
								    <ul>
								        @foreach($errors->all() as $err)
									    <li>{{$err}}</li>
										@endforeach
									</ul>
								</div>	
							@endif-->	
						    <input type="text" name="firm" placeholder="Название компании" id="company_name">
						    <input type="text" name="name" placeholder="ФИО*" id="name"><br>
						    @error('name')
							    <span style="color:red">{{message}}</span>
							@enderror
							<input type="text" name="tel" placeholder="Телефон*" id="tel">
						    @error('tel')
							    <span style="color:red">{{message}}</span>
							@enderror						   
						   <input type="text" name="e_mail" placeholder="E-mail*" id="e_mail">
						   	@error('e_mail')
							    <span style="color:red">{{message}}</span>
							@enderror
							<br>
							<br>
							<br>
						    <textarea placeholder="Описание заказа"></textarea>
						    <br>
						    <br>
							
							<!--<input type="file" multiple>
							<br>
							<p><i>Прикрепите приложение (чертеж заказа).</i></p>
							<br>
							<br>-->
							@csrf

            <!-- Прикрепление нескольких файлов-->
			<form enctype="multipart/form-data" action="upload.php" method="post">
 				<input name="file[]" type="file" />
				<button class="add_more">Добавить ещё файлы</button>
				<input type="button" id="upload" value="Загрузить файл" />
			</form>	
			<p><i>Прикрепите приложение (чертеж заказа).</i></p>
						
			<br>
			<!-- <input class="btn-small" id="send-order" type="submit" value="Отправить">-->
			
			<!-- Согогласие на обработку данных-->
			<form>
				<input type="checkbox" id="politics" onclick="check();" value="" autocomplete="off"/>
			    Нажимая на кнопку "Отправить", я даю <a href="{{url('/politics')}}"> согласие на обработку персональных данных.</a>
			    <br>
			    <br>
                <!--<input type="submit" name="submit" class="submit" disabled="" value="Отправить" />-->
		    </form>
					
			<script>
			  function check() {
				var submit = document.getElementsByName('submit')[0];
				    if (docyument.getElementById('politics').checked)
					   submit.disabled = '';
						   else
						      submit.disabled = 'disabled';
					           }
			</script>
			<!--КАПЧА-->
			<script src="https://www.google.com/recaptcha/api.js"></script>
			<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
							
							<input class="btn-small"  class="g-recaptcha" 
        data-sitekey="reCAPTCHA_site_key" 
        data-callback='onSubmit' 
        data-action='submit' id="send-order" type="submit" value="Отправить">
							 <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
						</form>
					</div>
				</div>
@endsection