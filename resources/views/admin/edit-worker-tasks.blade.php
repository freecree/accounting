@extends('admin.admin-base')

@section('adm-sub-header', "adm-sub-header")

@section('main-content')
    <div class="container-admin">
        <div class="flex-wrap main-content__title">
            <h2 >
                Список завдань робітника {{$worker->name}}
            </h2>
            <a class="action-but add-but" href="{{ route('add-worker-task-form', ['id' => $worker->id]) }}">
                Додати
            </a>
        </div>
        
        <div class="main-part">
            <table class="table table-two-noborder table-edit" border="0"cellspacing="0">
                <tr>
                    <th>
                        Фасон
                    </th>
                    <th>
                        Розмір
                    </th>
                    <th>
                        Кількість 
                    </th>
                    <th>
                        День
                    </th>
                    <th>
                        
                    </th>
                </tr>
                @foreach($tasks as $task)
                <tr>
                    <td>
                        {{$task->fashion}}
                    </td>
                    <td>
                        {{$task->size}}
                    </td>
                    <td>
                        {{$task->amount}}
                    </td>
                    <td>
                        {{$task->date}}
                    </td>
                    <td> 
                        <a class="action-but delete-but" href="{{ route('delete-task', ['task_id' => $task->id, 'worker_id' => $worker->id]) }}">
                            Видалити
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>        
        </div>
        
    </div>
@endsection