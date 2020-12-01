@extends('layouts.master')


@section('content')
		<style>
		.invalid-feedback {
			display: block;
		}
		</style>
<div class="row">
				    <div class="col s12 m6 l6" style="font-size: 20px; margin-left: 2%; margin-top: 30px;" class="contacts">
					    <h1 class="title" style="text-align:left;">Контактная информация</h1>
					    <h1 class="title" style="text-align:left;">Контактная информация</h1>
						<p style="font-weight: bold;">ИП Зотов Г.А.</p>
					    <p>Модельное производство</p>
					    <p>Литейное производство</p>
						<br>
					    <p>Адрес: г. Тула</p>
					    <p>Телефон: + 7 906 532 04 40</p>
					    <p>e-mail: zsvzot@yandex.ru</p>
					    <p>www.lit_modeli.ru</p>
						<br>
						<p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d149423.17068611048!2d37.48736490390008!3d54.18473274153034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41343f84ed31c1fd%3A0xa3a7e25d4ca39145!2z0KLRg9C70LAsINCi0YPQu9GM0YHQutCw0Y8g0L7QsdC7Lg!5e0!3m2!1sru!2sru!4v1596400709217!5m2!1sru!2sru" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</p>
						<br>
					</div>
					
					
					<div class="col s12 m6 l5"  style="margin-top: 30px;" class="contacts">
					<a name="ancor"></a>
					<p style="font-size: 20px;">Заполните форму:</p>
                        
						@if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                               @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                               @endforeach
                             </ul>
                        </div>				
						@endif	

						<div class="row" id="alert_box">
                        <div class="col s12 m12">
                           <div class="card red darken-1">
                                <div class="row">
                                    <div class="col s12 m10">
                                        <div class="card-content white-text">
                                            <p>1. Проверьте корректность заполнения поля "ФИО"</p>
                                            <p>2. Проверьте корректность заполнения поля "Телефон"</p>
                                            <p>3. Проверьте корректность заполнения поля "E-mail"</p>
                                        </div>
                                    </div>
                        <div class="col s12 m2">
                        <i class="fa fa-times icon_style" id="alert_close" aria-hidden="true"></i>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>						

                    <?php 
					$('#alert_close').click(function(){
                    $( "#alert_box" ).fadeOut( "slow", function() {
                         });
                    });
					?> --}}
					
						@if(Session::has('flash_message'))
							<div class="alert alert-success'>{{ Session::get('flash_message')}}</div>
						@endif
						
						<form action="{{route('contact-form')}}" method="POST">
						    @csrf
						    <input type="text" name="firm" placeholder="Название компании" id="company_name">
						    <input type="text" name="name" placeholder="ФИО*" id="name">
							@if ($error->has('name'))
								<small class = "form-text invalid-feedback" style="display: block;">{{$errors-first('name')}}</small>
						    @endif
						    <input type="text" name="tel" placeholder="Телефон*" id="tel">
						    @if ($error->has('tel'))
								<small class = "form-text invalid-feedback">{{$errors-first('tel')}}</small>
						    @endif
							<input type="text" name="e_mail" placeholder="E-mail*" id="e_mail">
							@if ($error->has('e_mail'))
								<small class = "form-text invalid-feedback">{{$errors-first('e_mail')}}</small>
						    @endif
							<br>
							<br>
							<br>
						    <textarea placeholder="Описание заказа"></textarea>
						    <br>
							<br>
							<input type="file" multiple>
							<br>
							<p><i>Прикрепите приложение (чертеж заказа).</i></p>
							
							<br>
							<input class="btn-small" id="send-order" type="submit" value="Отправить">
						</form>
					</div>
				</div>
@endsection
