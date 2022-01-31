@extends('admin.admin-base')

@section('adm-sub-header', "adm-sub-header")

@section('main-content')
    <div class="container-admin">
        <div class="flex-wrap main-content__title">
            <h2 >
                Список робітників
            </h2>
            <a class="action-but add-but" href="{{ route('add-worker-form')}}">
                Додати
            </a>
        </div>
        
        <div class="main-part">
            <table class="table table-two-noborder table-edit" border="0"cellspacing="0">
                @foreach($workers as $worker)
                <tr>
                    <td>
                        {{$worker->worker}}
                    </td>
                    <td> 
                        <a class="action-but delete-but" href="/admin/workers/delete/{{$worker->id}}">
                            Видалити
                        </a>
                        <a class="action-but show-but" href="{{ route('admin-worker-tasks', ['id' => $worker->id]) }}">
                            До завдань
                        </a>

                        <!-- <a class="table-icon" href="{{ route('worker-tasks', ['id' => $worker->id]) }}">
                            <img src="{{asset('img/show.svg')}}" alt="ShowIcon">
                        </a> -->
                        
                    </td>
                </tr>
                @endforeach
            </table>        
        </div>
        
    </div>
@endsection
