<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
<header class="@yield('adm-sub-header')">
	<div class="container-admin">
		<div class="flex-wrap">
			<a href="{{ route('admin-main') }}" class="admin-header-caption">
			<b>Облік бракованої продукції</b> - 
	        Адміністративна панель
			</a>
			<a href="/" class="admin-exit">
				Вийти
			</a>
		</div>
		
	</div>
	
    <!-- <h2 class="header__title">
    	
    </h2> -->
</header>
<section class="main-content">
    @yield('main-content')

</section>
</body>
</html>