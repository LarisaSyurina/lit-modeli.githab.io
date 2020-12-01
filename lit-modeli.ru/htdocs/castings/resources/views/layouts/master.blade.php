<!DOCTYPE html>
<html>
	<head>
		<title>Литейное производство Модельное производство</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('./css/style.css')}}">
		<style>
		.invalid-feedback {
			display: block;
		}
		</style>
		<script src="https://www.google.com/recaptcha/api.js"></script>
	</head>
	<body>
	
		<header class="white">
			
			<div class="header-container">
				<div class="row">
				    <div class="col s12 m4 l2 center">
				        <img class="logo-top" class="responsive-img" class="profile valign-wrapper center" style="width:110px;" src="{{asset('./images/logo-tula.png')}}" alt="Logo">
					    <div style="font-family: serif; font-weight: bold; font-size: 20px; margin: -15px;">ТУЛА</div>
					</div>
					<div class="col s12 m4 l6"  class="profile valign-wrapper center" class="title">
					    <div class="title"> 
							<div> Модельное производство</div>
							<div> Литейное производство</div>
					        <div> ИП Зотов Г.А.</div>
					    </div>	
					</div>
					
					<div class="col s12 m4 l2 center">
						<div class="contacts">
								<p>+7 906 532 04 40</p>
								<p>zsvzot@yandex.ru</p>
								<p>г. Тула</p>
						</div>		
						<a href = "https://www.instagram.com" target="_blank">
						    <img src="{{asset('icons/instagram.png')}}" style="width: 25px;">
						</a>
					</div>
					
					<div class="col s12 m12 l2 center" class="cart-button">
						<a href="{{url('/cart')}}"class="btn-small" style="background-color: #FFB000">
						    <i class="material-icons profile valign-wrapper left">shopping_cart</i>
						    <div class="button-text">
							<?php $total = 0 ?>
                        @foreach((array) session('cart') as $id => $products)
                            <?php $total += $products['price'] * $products['quantity'] ?>
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Итого: <span class="text-info"> {{ $total }} руб.</span></p>
                        </div>
							</div>
						</a>
					
					</div>
					
					<!--<div class="col s12 m12 l2 center" class="search-box" style="display: flex; flex-direction: row; margin-top: 10px;">
						<input type="text" name="search" placeholder="Поиск">
					    <a class="search-button" href="#">
						<i class="material-icons">search</i>
						</a>
					</div>-->	
					<br>
					{!! Form:: open(['action' => 'SearchController@index', 'method' =>'GET', 'class'=>'col s12 m12 l2 center','style'=>'display: flex; flex-direction: row; margin-top: 20px;height:35px','placeholder'=>'"Поиск"']) !!}
						{!! Form:: text('q');(['placeholder'=>'Поиск']) !!}
						{!! Form:: submit('Найти',['style'=>'height:40px; width:60px;font-size:15px;'])!!}
					{!! Form:: close() !!}
			
		            	
					<div>
					
					
					</div>
				</div>
			</div>
		</header>
		
		<main>
			
			<div class="menu-container">
				
			    <nav class="nav-wrapper" style="background:#12AA25;">
				    <div class="horisontal-menu">
					<a href="#" class="sidenav-trigger" data-target="mobile-links">
					    <i class="material-icons">menu</i>
					</a>	    
						<ul id="nav-mobile" class="hide-on-med-and-down">
							<li><a href="{{url('/main')}}">Главная</a></li>
							<li><a href="{{url('/about')}}">О компании</a></li>
							<li><a href="{{url('/services')}}">Услуги</a></li>
							<li><a href="{{url('/catalogue')}}">Каталог продукции</a></li>
							<li><a href="{{url('/gallery')}}">Примеры работ</a></li>
							<li><a href="{{url('/contacts1')}}">Контакты</a></li>
						</ul>
					</div>	
			
				</nav>	
						<ul id="mobile-links" class="sidenav">
							<li><a href="{{url('/main')}}">Главная</a></li>
							<li><a href="{{url('/about')}}">О компании</a></li>
							<li><a href="{{url('/services')}}">Услуги</a></li>
							<li><a href="{{url('/catalogue')}}">Каталог продукции</a></li>
							<li><a href="{{url('/gallery')}}">Примеры работ</a></li>
							<li><a href="{{url('/contacts1')}}">Контакты</a></li>
						</ul>				
<!-- Authentication Links -->
                  <!--  @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest  -->
						
		@yield('content')
		
		
							<div class="col s12 m12 l2 center" class="apply-button">
						<a href="{{url('/contacts1/#ancor')}}" class="btn-large" style="background-color: #12AA25">
						    <div class="apply-button-text" style="color: white">Написать сообщение</div>
						</a>
					</div>
					<br>
					
				<div class="parallax-container" style="height: 200px;">
				    <div class="parallax"> 
					    <img src="{{asset('images/1.jpg')}}" alt="Background picture" class="responsive-img" >
					</div>
				</div>

			</div>
			
		</main>
		
		
		<footer class="hide-on-small-only">
		    <div class="row">
				    
				    <div class="col s12 m4 l2 center">
				        <img class="logo-top" class="responsive-img" class="profile valign-wrapper center" src="{{asset('images/logo-tula.png')}}" alt="Logo" style="width:110px;">
					    <div style="font-family: serif; font-weight: bold;">ТУЛА</div>
					</div>
					
					<div class="col s12 m2 l3">
						  <ul class="footer-list">
							<li><a href="{{url('/main')}}" class="black-text">Главная</a></li>
							<li><a href="{{url('/about')}}" class="black-text">О компании</a></li>
							<li><a href="{{url('/services')}}" class="black-text">Услуги</a></li>
						  </ul>
					</div>	  
					<div class="col s12 m2 l3">	  
						  <ul class="footer-list">
							<li><a href="{{url('/catalogue')}}" class="black-text">Каталог продукции</a></li>
							<li><a href="{{url('/gallery')}}" class="black-text">Примеры работ</a></li>
							<li><a href="{{url('/contacts1')}}" class="black-text">Контакты</a></li>
						  </ul>
					</div>
					
					<div class="col s12 m2 l2" class="contacts">
						    <div>+7 906 532 04 40</div>
						    <div>zsvzot@yandex.ru</div>
						    <div>г. Тула</div>
					</div>
					
					<div class="col s12 m2 l2" class="social">
					    <p>Мы в социальных сетях:</p>
					    <br>
					    <a href = "https://www.instagram.com" target="_blank">
						    <img src="{{asset('icons/instagram.png')}}" style="width: 25px;">
					    </a>
						
					     <br>
						 <br>
							<!--LiveInternet counter--><a href="//www.liveinternet.ru/click"
							target="_blank"><img id="licntC282" width="88" height="31" style="border:0" 
							title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня"
							src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
							alt=""/></a><script>(function(d,s){d.getElementById("licntC282").src=
							"//counter.yadro.ru/hit?t21.6;r"+escape(d.referrer)+
							((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
							(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
							";h"+escape(d.title.substring(0,150))+";"+Math.random()})
							(document,screen)</script><!--/LiveInternet-->
					
					</div>
		    </div>
		</footer>
	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
	    $(document).ready(function(){
		   $('.sidenav').sidenav();
		   $('.parallax').parallax();
		})
	</script>
	
	</body>
</html>