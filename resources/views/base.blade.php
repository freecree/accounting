<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
<header>
    <h2 class="header__title">
        Облік бракованої продукції
    </h2>
</header>
<div id="menu">
    <ul class="menu-flex">
        <li>
            <a href="/workers">Список робітників</a>
        </li>
        <li>
            <a href="/plan">План виготовлення продукції<br>за місяць</a>
        </li>
        <li>
            <a href="/summary-made">Зведення виготовленої<br>продукції робітником за місяць</a>
        </li>
        <li>
            <a href="/summary-brack">Зведення відбракованої продукції<br> за місяць за видами браку</a>
        </li>
    </ul>
</div>
<section class="main-content">
    @yield('main-content')

</section>

</body>
</html>
