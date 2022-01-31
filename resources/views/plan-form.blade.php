@extends('base')

@section('main-content')
    <div class="container">
        <h2 class="main-content__title">
            План виготовлення продукції<br>за місяць
        </h2>
        <form action="plan" method="post" class="form">
            {{ csrf_field() }}
            <div class="form-main">
                <div class="form-block">
                    <h3 class="form__title">
                        Оберіть місяць:
                    </h3>
                    <p>
                        <input name="month" type="radio" value="1"> Січень
                    </p>
                    <p>
                        <input name="month" type="radio" value="2"> Лютий
                    </p>
                    <p>
                        <input name="month" type="radio" value="3"> Березень
                    </p>
                    <p>
                        <input name="month" type="radio" value="4"> Квітень
                    </p>
                    <p>
                        <input name="month" type="radio" value="5"> Травень
                    </p>
                    <p>
                        <input name="month" type="radio" value="6"> Червень
                    </p>
                    <p>
                        <input name="month" type="radio" value="7"> Липень
                    </p>
                    <p>
                        <input name="month" type="radio" value="8"> Серпень
                    </p>
                    <p>
                        <input name="month" type="radio" value="9"> Вересень
                    </p>
                    <p>
                        <input name="month" type="radio" value="10"> Жовтень
                    </p>
                    <p>
                        <input name="month" type="radio" value="11"> Листопад
                    </p>
                    <p>
                        <input name="month" type="radio" value="12"> Грудень
                    </p>
                </div>
            </div>

            <button class="button" type="submit">
                Переглянути
            </button>

        </form>
    </div>
@endsection