@extends('base')

@section('main-content')
    <div class="container">
        <h2 class="main-content__title">
            Список робітників
        </h2>
        <div class="main-part">
            <table class="table table-two-noborder" border="0"cellspacing="0">
               <tr>
                    <th>
                        Робітник
                    </th>
                    <th>
                        Переглянути завдання
                    </th>
                </tr>
                @foreach($workers as $worker)
                <tr>
                    <td>
                        {{$worker->worker}}
                    </td>
                    <td> 
                        <a class="table-icon" href="{{ route('worker-tasks', ['id' => $worker->id]) }}">
                            <img src="{{asset('img/show.svg')}}" alt="ShowIcon">
                        </a>
                        
                    </td>
        	
            <div></div>
        	@endforeach
        </div>
        
    </div>
@endsection
