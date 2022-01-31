@extends('admin.admin-base')

@section('main-content')
    <div id="menu">
        <ul class="menu-vertical">
            <li>
                <a href="{{ route('admin-workers')}}">Редагувати працівників</a>
            </li>
            <li>
                <a href="{{ route('admin-sizes') }}">Редагувати розміри</a>
            </li>
            <li>
                <a href="{{ route('admin-fashions') }}">Редагувати моделі</a>
            </li>
        </ul>
    </div>
@endsection

