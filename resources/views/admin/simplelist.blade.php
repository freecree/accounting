@extends('admin.admin-base')

@section('adm-sub-header', "adm-sub-header")

@section('main-content')
    <div class="container-admin container-small" >
        <div class="flex-wrap main-content__title">
            <h2 >
                {{$obj->title}}
            </h2>
            <a class="action-but add-but" href='{{ route( "$obj->routeToAdd" )}}'>

                Додати
            </a>
        </div>
        <div class="main-part">
            <table class="table table-two-noborder table-edit" border="0"cellspacing="0">
                <tr>
                    <th>
                        {{$obj->coloumn}}
                    </th>
                    <th>
                    	
                    </th>
                </tr>
                @foreach($obj->items as $item)
                <tr>
                	<td>
                		{{$item->name}}
                	</td>
                	<td> 
                        <a class="action-but delete-but" href="{{ route("$obj->routeToDelete", ['id' => $item->id]) }}">
                            Видалити
                        </a>
                    </td> 
                </tr>  
                @endforeach  
            </table>
        </div>
    </div>
@endsection                
                       